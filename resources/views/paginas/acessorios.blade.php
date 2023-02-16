@extends('base/base')

@section('conteudo')

<!-- Banner-->
<section class="section parallax-container bg-image-dark" data-parallax-img="{{URL::asset('images/banner-teste-2.jpg')}}" >
    <section class="section-lg text-center">
      <div class="shell">
        <div class="range range-50 range-sm-center range-md-reverse range-md-middle">
          <div class="cell-md-6 cell-lg-5">
            <div class="box-width-4 box-centered">
                    @if (!empty($listaCateg))
                    @foreach ($listaCateg as $cat)
                        <p class="heading-1 koulen">{{$cat['categoria']}}</p>
                    @endforeach
                    @else <p class="heading-1 koulen">Acessorios</p>
                    @endif
              <div class="divider-small"></div>
              <ul class="breadcrumbs-custom__path">
                <li class="passion" >Home</li>
                <li class="passion">Comprar</li>
                @if (!empty($listaCateg))
                        @foreach ($listaCateg as $cat)
                            <li class="active passion" > <a data-bs-toggle="collapse" href="#collapseCat" role="button" aria-expanded="false" aria-controls="collapseCat">{{$cat['categoria']}}<i class="bi bi-chevron-down ms-2"></i></a></li>
                        @endforeach
                @else
                        <li class="active passion" >  <a data-bs-toggle="collapse" href="#collapseCat" role="button" aria-expanded="false" aria-controls="collapseCat">Categoria<i class="bi bi-chevron-down ms-2"></i></a></li>
                @endif

              </ul>

            </div>
            <div class="collapse mt-3" id="collapseCat">
                <div class="card card-body">
                    <h5 style="color: rgb(90, 90, 90); font-weight:100;">
                        @foreach ($listaCat as $cat)
                            <li class="active passion" ><a class="mx-3" href="{{route('produtos', ['filtro' => $cat['id']])}}">{{$cat['categoria']}}</a></li>
                        @endforeach
                    </h5>
                </div>
          </div>
          </div>
        </div>
      </div>

    </section>



  {{-- <!-- Inicio-->
  <section class="section section-md bg-white">
    <div class="shell">
      <div class="range range-50 range-sm-center-itemrange-md-left range-md-middle range-md-reverse">
        <div class="cell-sm-6 wow fadeInRightSmall">
          <div class="thumb-line"><img src="{{URL::asset('images/teste-fundo.jpg')}}"  alt="IMAGEM NÃO FEITA" width="531" height="640"/>
          </div>
        </div>
        <div class="cell-sm-6">
          <div class="box-width-3">
            <p class="heading-1 wow fadeInLeftSmall">Acessórios</p>
            <article class="quote-big wow fadeInLeftSmall" data-wow-delay=".1s">
              <p class="q">Opções de acessórios para acrescentar a sua encomenda.</p>
            </article>
            <div class="divider wow fadeInLeftSmall" data-wow-delay=".2s"></div>
            <p class="wow fadeInLeftSmall" data-wow-delay=".3s">Os acessórios acompanham pedidos e não são vendidos separadamente.</p> </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Categorias-->


    <div class="container-fluid my-3" >

      <div class="row" >
        @if (count($listaProd) != 0)
        @foreach ($listaProd as $produto)
            <div class="col-sm-3 separador my-2 card-group" >
                <div class="col-sm-12 post-boxed shadow" >
                <div class="thumb-corporate img"><a  class="btn-block" ><img class=" img-centered" src="{{URL::asset($produto["foto"])}}" /></a>
                    {{-- href="{{ route('ver_Produto', ['filtro' => $produto['id']])}}" --}}
                    <div class="post-classic__text text-center">
                    <p class="text-center-item" >{{$produto['nome']}}</p>
                    {{-- <p class="text-center-item " ><strong> R$ {{number_format($produto['valor'],2,',','')}}</strong> á vista</p> --}}
                    <p class="text-center-item mb-2 text-muted" >Indisponivel</p>

                    <p class="text-center-desc pb-3" style="color:#1d97d0; margin-top:5px;" >ou em até<strong>  12x</strong> no cartão</p>
                    <p class="text-center-desc" >{{$produto['descricao']}}</p>

                    {{-- @if (Auth::check())
                        <a class="btn btn-primary text-center mt-2" style="background: #1d97d0 !important; border:none !important;" href="{{route('adicionar_Carrinho', ['idproduto' => $produto['id']]) }}">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                    @else
                        <a class="btn btn-primary text-center mt-2" style="background: #1d97d0 !important; border:none !important;" data-bs-toggle="modal" data-bs-target="#modalLogin" title="Cadastro">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                    @endif --}}
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        @endif
        <div class="col-sm-3 separador my-2 card-group" >
            <div class="col-sm-12 post-boxed shadow" >
            <div class="thumb-corporate img"><a href="{{ route('ver_Produto', ['filtro' => 6])}}" class="btn-block" ><img class=" img-centered" src="{{URL::asset($produto["foto"])}}" /></a>

                <div class="post-classic__text text-center">
                <p class="text-center-item" >Teste produto</p>
                <p class="text-center-item " ><strong> R$ 0,00 </strong> á vista</p>

                <p class="text-center-desc pb-3" style="color:#1d97d0; margin-top:5px;" >ou em até<strong>  12x</strong> no cartão</p>
                <p class="text-center-desc" >Produto de teste sem valor</p>

                {{-- @if (Auth::check())
                    <a class="btn btn-primary text-center mt-2" style="background: #1d97d0 !important; border:none !important;" href="{{route('adicionar_Carrinho', ['idproduto' => $produto['id']]) }}">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                @else
                    <a class="btn btn-primary text-center mt-2" style="background: #1d97d0 !important; border:none !important;" data-bs-toggle="modal" data-bs-target="#modalLogin" title="Cadastro">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                @endif --}}
                </div>
            </div>
            </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section section-md bg-white">
</section>


@endsection


