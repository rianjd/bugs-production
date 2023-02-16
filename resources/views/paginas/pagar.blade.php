@extends('base/base')

@section('conteudo')

<body style="background-color: rgb(250, 250, 250)">

<div class="container-xl my-5">
    <div class="row justify-content-center">
        @if (isset($cart) && count($cart) >0)
        @endif
        <div class="col-md-12">
            <form>
                <main >
                    <div class="py-5 text-center">
                        <h2 class="koulen">Pagamento (Destivado)</h2>
                        <p class="lead">Escolha uma opção de pagamento</p>
                    </div>
                    <ul class="list-group shadow">
                        {{--  href="/compras/pagar/credito" --}}
                        <a class="list-group-item post-boxed lista_pag "><li><img class="icon_pag p-2 me-4" src="{{URL::asset('images/cartao_icon.png')}}" width="50" alt=""> Cartão de credito</li></a>
                        <a class="list-group-item post-boxed lista_pag " ><li><img class="icon_pag p-2 me-4" src="{{URL::asset('images/bandeiras/pix.png')}}" width="50" alt="">Pix</li></a>
                        <a class="list-group-item post-boxed lista_pag " ><li><img class="icon_pag p-2 me-4" src="{{URL::asset('images/boleto-bancario.png')}}" width="50" alt="">Boleto</li></a>
                    </ul>
                </main>
            </form>
        </div>
            <div id="respostaRequest"></div>
            <!--FORM VALIDATE-->
            <div id="alert">
                <div class="col-md-3 offset-md-9 fixed-bottom p-3" style="bottom:5em;">
                        <div class="alert alert-success alert-dismissible fade" role="alert">
                            <strong>Cadastro realizado!</strong> <br>Seu cadastro foi concluido com sucesso!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-9 fixed-bottom p-3" style="bottom:5em;">
                <div class="alert alert-danger alert-dismissible fade" role="alert">
                    <strong>Opss...</strong> <br>{{$errors->first()}}<u>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

    </div>
</div>



@endsection
