@extends('base/base')

@section('conteudo')
@php
    $total = 0;
    $frete = 0;
@endphp
<script>

</script>
<body style="background-color: rgb(250, 250, 250)">


    <div class="container my-5">
        @if (isset($cart) && count($cart) >0)
            <div class="row">
                <div class="col-md-7">
                    @if (count($enderecoList) > 0)

                        <div class="card shadow mb-5">
                            <div class="card-body">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 20%;">
                                            <h2><i class="bi bi-geo-alt-fill p-3" style="color: #0c6dec"></i></h2>
                                        </td>
                                        <td>
                                        @foreach ($enderecoList as $e)
                                            <h5>{{$e['logradouro']}}, {{$e['numero']}} | {{$e['complemento']}}</h5>
                                            <p>{{$e['cidade']}}, {{$e['estado']}} - CEP {{$e['cep']}}</p>
                                            @php

                                                if ($e['cidade'] == 'São José'){
                                                    $frete = 5.00;
                                                }
                                                else{
                                                    $frete = 9.50;
                                                }
                                            @endphp

                                        @endforeach
                                        </td>


                                    </tr>
                                </table>
                                <a class="text-right mt-3" style="display: block" data-bs-toggle="modal" data-bs-target="#modalAltera">Alterar endereço</a>
                                @include('paginas.altera_endereco')
                            </div>
                            <div class="card-footer">
                                <h3 class="text-right">Frete<br><strong>R${{number_format($frete,2,',','')}}</strong></h3>

                            </div>
                        </div>


                    @endif

                </div>

                <div class="col-md-4 offset-md-1" style="background-color: rgb(255, 255, 255);">

                    <div class="card shadow p-3" >



                            @foreach ($cart as $indice => $itens)

                            <table>
                                <tr>
                                    <td >
                                        <span class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-primary">{{$itens['quantidade']}}</span>
                                        <img src="{{URL::asset($itens['foto'])}}" width="200" height="200"/>
                                    </td>
                                    <td>
                                        <div >
                                            <h4 class="text-center-item " >{{$itens['nome']}}</h4>
                                            <p class="text-center ">{{$itens['descricao']}}</p>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            <div class="divider my-3" style="background-color: #f0f0f0a2"></div>
                            <table>
                                <tr>
                                    <td>
                                        <a class="text-right" href="{{route('excluir_Carrinho', ['indice' => $indice])}}"><i class="bi bi-trash-fill me-2" style="color: red;"></i>Remover</a>

                                    </td>

                                    <td>
                                        <div class="align-item-bottom">
                                            <h4 class="text-right pe-5" >R${{number_format($itens['valor'],2,',','')}}</h4>
                                        </div>
                                    </td>

                                </tr>
                            </table>
                                @php
                                $total += $itens['valor']*$itens['quantidade'];
                                @endphp

                            <div class="divider my-3"></div>
                            @endforeach
                            <div class="row text-center">
                                <div class="col-2"><h1><i class="bi bi-truck"></i></h1></div>
                                <div class="col-10"><h3 class="text-right pe-5">Frete<br><strong>R$ {{number_format($frete,2,',','')}}</strong></h3></div>
                            </div>
                            <div class="divider my-3"></div>


                            <div class="col-md-12 text-right py-3 pe-5 ">
                                <h2>Total<br><strong>R$ {{number_format($total+$frete,2,',','')}}</strong></h2>
                                <form action="{{route('pagar')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="total" value="{{$total}}">
                                    <input type="hidden" name="frete" value="{{$frete}}">
                                    <input type="hidden" name="quantidade" value="{{$frete}}">

                                    <button type="submit" class="btn btn-lg btn-success mt-3">Pagamento<i class="bi bi-chevron-double-right ms-2"></i></button>
                                </form>
                            </div>

                    </div>
                </div>
            </div>
        @else
            <div style="padding: 20%;"><h1 class="koulen text-center">Seu carrinho esta vazio!</h1></div>

        @endif
        <section class="section bg-image-dark" >

            <div class="section-md text-center">
                <div class="shell">
                    <div class="col-md-12 text-center" >
                        <h2 class="my-5" style="color: black"><strong>Ofertas para você</strong><i class="bi bi-tags-fill ms-3"></i></h2>
                    </div>
                    @include('promocao.promoca_page')
                </div>
            </div>
        </section>
        <!--FORM VALIDATE-->
            @if ($message = Session::get('success'))
            <div class="col-md-3 offset-md-9 fixed-bottom p-3" style="bottom:5em;">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Cadastro realizado!</strong> <br>Seu cadastro foi concluido com sucesso!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                </div>
            @endif
            @if ($errors->any())
            <div class="col-md-3 offset-md-9 fixed-bottom p-3" style="bottom:5em;">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Opss...</strong> <br>{{$errors->first()}}<u>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
    </div>
</body>
@endsection
