@extends('base.base')

@section('conteudo')

@section('head')
<meta name="csrf_token" content="{{ csrf_token() }}" />
@endsection

@php
$total = 0;
foreach ($cart as $indice => $itens){$total += $itens['valor'];}
@endphp
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
{{-- <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script> --}}
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
    function carregar(){
        PagSeguroDirectPayment.setSessionId('{{ $sessionID }}')

    }
    $(function(){
        carregar();
        $(".ncredito").on('blur',function(){
            PagSeguroDirectPayment.onSenderHashReady(function(response){
                if(response.status == 'error'){
                    console.log(response.message)
                    return false
                }


                var hash = response.senderHash
                $(".hashseller").val(hash)
            })

            let ncartao = $(this).val()
            $(".bandeira").val("")
            if(ncartao.length > 6){
                let prefixocartao = ncartao.substr(0,6)
                PagSeguroDirectPayment.getBrand({
                    cardBin : prefixocartao,
                    success : function(response){
                        $(".bandeira").val(response.brand.name)
                        $(".bandeira_logo").attr('src', "/images/bandeiras/"+response.brand.name+".png")
                        $(".ncredito").removeClass("erro_form");
                        document.getElementById("err").innerText = ""
                    },
                    error : function(response){
                        $(".ncredito").addClass("erro_form");
                        document.getElementById("err").innerText = "Numero do cartão invalido"

                    }
                })
            }

        })

        $(".nparcela").on('blur', function(){
            var totalParcelas = $(this).val();
            var bandeira = $(".bandeira").val();
            if(bandeira == ""){
                $(".ncredito").addClass("erro_form");
                document.getElementById("err").innerText = "Numero do cartão invalido"

                return;
            }
            PagSeguroDirectPayment.getInstallments({
                amount : $(".totalfinal").val(),
                maxInstallmentsNoInterest: 2,
                brand : bandeira,
                success : function(response){
                    console.log(response);
                    let status = response.error
                    if(status){
                        alert("Não foi encontrado opção de parcelamento")
                        return;
                    }
                    let indice = totalParcelas - 1;
                    let totalapagar = response.installments[bandeira][indice].totalAmount
                    let valorTotalParcela = response.installments[bandeira][indice].installmentAmount

                    $(".totalparcela").val(valorTotalParcela)
                    $(".totalparcelaText").val('R$ '+valorTotalParcela)

                    $(".totalapagar").val(totalapagar)
                    $(".totalapagarText").val('R$ '+totalapagar)


                }
            })
        })

        $(".pagar").on("click", function(){
            var numerocartao = $(".ncredito").val()
            var iniciocartao = numerocartao.substr(0,6)
            var ncvv = $(".ncvv").val()
            var anoexp = $(".anoexp").val()
            var mesexp = $(".mesexp").val()
            var hashseller = $(".hashseller").val()
            var bandeira = $(".bandeira").val()
            $('#page-loader').removeClass('loaded')
            $('#page-loader').addClass('load')

            PagSeguroDirectPayment.createCardToken({
                cardNumber : numerocartao,
                brand : bandeira,
                cvv : ncvv,
                expirationMonth : mesexp,
                expirationYear : anoexp,


                success : function(response){
                    $.post('{{ route("finalizar_Carrinho") }}', {
                        hashseller : hashseller,
                        cardtoken : response.card.token,
                        nparcela  : $(".nparcela").val(),
                        totalapagar  : $(".totalapagar").val(),
                        totalparcela  : $(".totalparcela").val(),
                        cddd  : $(".cddd").val(),
                        cnumero  : $(".cnumero").val(),
                        cnome  : $(".cnome").val(),
                        cemail  : $(".cemail").val(),
                        endereco  : $(".endereco").val(),
                        cidade  : $(".cidade").val(),
                        uf  : $(".uf").val(),
                        bairro  : $(".bairro").val(),
                        cep  : $(".cep").val(),
                        complemento  : $(".complemento").val(),
                        num  : $(".num").val(),
                        frete  : $(".frete").val(),

                        _token : $('.token').val()

                    },



                    function(result){
                        $('#page-loader').removeClass('load')
                        $('#page-loader').addClass('loaded')
                        window.location.replace("{{route ('ver_Carrinho')}}");
                    });
                },
                    error : function(err){
                        $(".alert-danger").addClass("show")
                        console.log(err)
                }
            })

        })
    })
</script>

<body style="background-color: #f5f5f5;">
    <div class="container ">
            <form>
                <main >
                    <div class="py-5 text-center">
                    <h2 class="koulen">Pagamento</h2>
                    </div>
                        <div class="row">
                            <div class="col-md-5 ">

                                <div class="row justify-content-center">

                                    <div class="col-md-9 order-md-last">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                          <span class="text-primary">Itens</span>
                                          <span class="badge bg-primary rounded-pill">{{count($cart)}}</span>
                                        </h4>

                                        <ul class="list-group mb-3 shadow">
                                          @foreach ($cart as $indice => $itens)
                                          <li class="list-group-item d-flex justify-content-between lh-sm">
                                            <div>
                                              <h6 class="my-0">{{$itens['nome']}}</h6>
                                              <small class="text-muted"></small>
                                            </div>
                                            <span class="text-muted">R$ {{$itens['valor']}}</span>
                                          </li>
                                          @endforeach
                                          <li class="list-group-item d-flex justify-content-between lh-sm">
                                            <div>
                                              <h6 class="my-0"><i class="bi bi-truck me-2"></i>Frete</h6>
                                              <small class="text-muted"></small>
                                            </div>
                                            <span class="text-muted">R$ {{number_format($frete,2,',','')}}</span>
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between" style="color: rgb(0, 68, 255) ;">
                                            <strong>Total (BRA)</strong>
                                            <strong>R$ {{number_format($total_com_frete,2,',','')}}</strong>
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                                @if (count($enderecoList) != 0)
                                    <input type="hidden" class="cnome" name="cnome" id="cnome" value="{{Auth::user()->nome}}" >
                                    <input type="hidden" class="cemail" name="cemail" id="cemail" value="{{Auth::user()->login}}" >
                                    <input type="hidden" class="frete" name="frete" id="frete"  value="{{$frete}}" >

                                    @foreach ($enderecoList as $e)

                                        <input type="hidden" class="cddd" name="cddd" id="cddd"  value="{{$e['ddd']}}" >
                                        <input type="hidden" class="cnumero" name="cnumero" id="cnumero" value="{{$e['telefone']}}" >
                                        <input type="hidden" class="cep" name="cep" id="cep" maxlength="9" value="{{$e['cep']}}">
                                        <input type="hidden" class="endereco" name="endereco" id="endereco" value="{{$e['logradouro']}}" >
                                        <input type="hidden" class="bairro" name="bairro" id="bairro" value="{{$e['bairro']}}">
                                        <input type="hidden" class="cidade" name="cidade" id="cidade" value="{{$e['cidade']}}"  >
                                        <input type="hidden" class="uf" name="uf" id="uf" value="{{$e['estado']}}" >
                                        <input type="hidden" class="complemento" name="complemento" id="complemento" value="{{$e['complemento']}}"  >
                                        <input type="hidden" class="num" name="num" id="num" value="{{$e['numero']}}" >

                                    @endforeach

                                @endif

                            </div>
                            <div class="col-md-6 offset-md-1 ">

                                {{ csrf_field() }}
                                    <hr class="my-4" >
                                    <div class="card card-body">
                                        <div class="row gy-3">

                                            <input type="hidden" name="hashseller" class="hashseller">
                                            <input type="hidden" name="bandeira" class="bandeira">

                                            <input type="hidden" class="token" name="token" value="{{ csrf_token() }}">

                                            <div class="col-12 col-md-4">
                                            Nome no cartão
                                            <input type="text" class="formulario_bugs nomecartao" name="nomecartao" id="nomecartao" placeholder="" required="">
                                            </div>

                                            <div class=" col-12  col-md-5 cartao">
                                            Número do cartão
                                            <input type="text" class="formulario_bugs ncredito" name="ncredito" id="ncredito" placeholder="" required="">
                                            <span><img name="bandeira_logo" class="bandeira_logo ms-3" width="35" src="" alt=""></span>
                                            <span style="color: red;" id="err"></span>

                                            </div>
                                            <div class="col-4 col-md-2">
                                                CVV
                                                <input type="text" class="formulario_bugs ncvv" name="ncvv" id="ncvv" placeholder="" required="">
                                            </div>

                                            <div class="col-4 col-md-2">
                                                Mês exp.
                                                <select class="formulario_bugs mesexp" name="mesexp" id="mesexp">
                                                    <option value="">...</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>

                                                </select>
                                            </div>

                                            <div class="col-4 col-md-2">
                                                Ano exp.
                                                <select class="formulario_bugs anoexp" name="anoexp" id="anoexp">
                                                    <option value="">...</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="2030">30</option>


                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <p class="lead my-5">Opções de pagamento</p>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mt-3">
                                                <div class="col-md-4 text-center">
                                                    <h6>Parcelas </h6>

                                                    <select class="formulario_bugs nparcela text-center my-2" name="nparcela" id="nparcela">
                                                        <option value="">...</option>
                                                        <option value="1">x 1</option>
                                                        <option value="2">x 2</option>
                                                        <option value="3">x 3</option>
                                                        <option value="4">x 4</option>
                                                        <option value="5">x 5</option>
                                                        <option value="6">x 6</option>
                                                        <option value="7">x 7</option>
                                                        <option value="8">x 8</option>
                                                        <option value="9">x 9</option>
                                                        <option value="10">x 10</option>
                                                        <option value="11">x 11</option>
                                                        <option value="12">x 12</option>

                                                    </select>
                                                    <span style="color: red;" id="err"></span>
                                                </div>
                                                <div class="col-md-4 text-center my-2">
                                                    <h6>Valor da parcela </h6>
                                                    <input type="hidden" class="totalparcela" name="totalparcela" id="totalparcela" required="">
                                                    <input type="text" class="formulario_bugs totalparcelaText text-center" style="border: none; font-weight: bolder;" name="totalparcelaText" id="totalparcelaText" placeholder="R$ 0,00" readonly required="">

                                                </div>
                                                <input type="hidden" class="form-control totalfinal" name="totalfinal" id="totalfinal" value="{{$total_com_frete}}" placeholder="" readonly required="">

                                                <div class="col-md-4 text-center my-2">
                                                    <h6 style="font-weight: bolder">Valor Total</h6>
                                                    <input type="hidden" class="totalapagar" name="totalapagar" id="totalapagar" required="">
                                                    <input class="formulario_bugs totalapagarText text-center" style="border: none; font-weight: bolder; color:rgb(53, 53, 53);" name="totalapagarText" id="totalapagarText" placeholder="R$ 0,00" readonly required=""></h5>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4">
                                        <div class="col-md-3">
                                            <input type="button" class="w-100 btn btn-primary btn-lg pagar" value="Pagar">
                                        </div>
                            </div>
                        </div>
                    </div>
                </main>
            </form>
        </div>
    </div>
</body>
@endsection
