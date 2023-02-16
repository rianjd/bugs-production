@extends('base/base')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
    $(document).ready(function(){
        $(".img2").click(function(){
            let foto = $(this).attr("src");
            // Change src attribute of image
            $("#img").attr("src", foto);
        });
    });
</script>
@section('conteudo')
<body style="background-color: rgb(250, 250, 250)">


<div class="container-sm my-5">
    <div class="row">
        @foreach ($produto as $item)


            <div class="col-md-6 ">
                    <div class="gallery shadow" >
                        <img id="img" class="gallery_img" src="{{URL::asset($item['foto'])}}">
                    </div>

                <div class="my-5">
                    @php
                        $arr = explode(',', $item['foto_item']);
                    @endphp
                    @foreach ($arr as $a)
                        <div class="gallery-sm " >
                            <img class="img2 gallery_img " src="{{URL::asset($a)}}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">

                <h2 class="koulen" style="color: rgb(82, 82, 82)">{{$item['nome']}}</h2>
                <h1 style="color: rgb(12, 80, 74); font-weight:bolder;">R$ {{number_format($item['valor'],2,',','')}}</h1>
                <div class="divider-modern" ></div>
                <form action="{{route('adicionar_Carrinho', ['idproduto' => $item['id']]) }}" method="post">
                    @csrf
                    <div class="row">
                        @if (isset($item['cor']))
                            <div class="col-sm-4 " style="margin: 0 auto;">
                                @php
                                    $arr = explode(',', $item['cor']);
                                @endphp
                                    <div class="mb-3 text-center">
                                        <h3>Cor</h3>
                                        <h3>
                                        @foreach ($arr as $a)
                                        <div class="form-check my-2" style="display: inline-block; padding-left:auto;" >
                                            <input type="radio" name="color" class=" form-check-input" style="background-color:{{$a}}; border-color: {{$a}};margin-right:0px;" value="{{$a}}">

                                        </div>
                                        @endforeach
                                        </h3>
                                    </div>
                            </div>
                        @endif


                        @if (isset($item['tamanho']))
                            <div class="col-4 " style="margin: 0 auto;">
                                <div class="mb-3">
                                    <h3>Tamanhos</h3>
                                    <span class="bola" >XS</span>
                                    <span class="bola" >P</span>
                                    <span class="bola" >M</span>
                                    <span class="bola" >G</span>
                                    <span class="bola" >XL</span>
                                </div>
                            </div>
                        @endif

                        @if (isset($item['extra']))
                            <div class="col-4" style="margin: 0 auto;">
                                @php
                                    $extra = explode(',', $item['extra']);
                                @endphp
                                <div class="mb-3" style="color: ">
                                    <h3 class="pb-2">Tipo</h3>
                                    <div class="row">
                                        @foreach ($extra as $e)

                                        <div class="form-check mx-3" style="display: inline-block; padding-left:auto;">
                                            <input type="radio" name="extra" id="extra{{$e}}" class=" form-check-input" style="margin-right:0px;" value="{{$e}}">
                                            <label  class="form-check-label" for="extra{{$e}}">{{$e}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        @endif

                    </div>

                    <div class="my-5 text-center ">
                        @if (Auth::check())
                            <button type="submit" class="btn btn-primary  heading-3 p-2" >Adicionar<i class="bi bi-cart-plus ms-2"></i></button>
                        @else
                            <a class="btn btn-primary heading-3 p-2" data-bs-toggle="modal" data-bs-target="#modalLogin" title="Cadastro">Adicionar<i class="bi bi-cart-plus ms-2"></i></a>
                        @endif
                    </div>
                </form>
                <div class="divider mb-2" ></div>
                <h3>Descrição</h3>
                <p>{{$item['descricao']}}</p>

            </div>
        @endforeach
    </div>

</div>

</body>
@endsection

