@php
    $listaProd = \App\Models\Produto::where('categoria_id', 4)->get();
@endphp
<div class="row">
@if (count($listaProd) != 0)

    @foreach ($listaProd as $produto)
        <div class="col-sm-4 separador my-2 card-group">
            <div class="col-sm-12 post-boxed shadow" >
                <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger ms-3" style="font-size:1.5em;">0%</span>
            <div class="thumb-corporate img"><a  class="btn-block" ><img class=" img-centered" src="{{URL::asset($produto["foto"])}}" /></a>


                {{--   Rota de produto href="{{ route('ver_Produto', ['filtro' => $produto['id']])}}" --}}
                <div class="post-classic__text text-center">
                <p class="text-center-item" >{{$produto['nome']}}</p>
                {{-- <p class="text-center-item " ><strong> R$ {{number_format($produto['valor'],2,',','')}}</strong> á vista</p> --}}
                <p class="text-center-item text-muted" >Indisponivel</p>

                <p class="text-center-desc pb-3" style="color:#1d97d0; margin-top:5px;" >ou em até<strong>  12x</strong> no cartão</p>

                <p class="text-center-desc" >{{$produto['descricao']}}</p>

                {{-- @if (Auth::check())
                    <a class="btn btn-primary text-center mt-2" style="background: #D01D1D !important; border:none !important;" href="{{route('adicionar_Carrinho', ['idproduto' => $produto['id']]) }}">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                @else
                    <a class="btn btn-primary text-center mt-2" style="background: #D01D1D !important; border:none !important;" data-bs-toggle="modal" data-bs-target="#modalLogin" title="Cadastro">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                @endif --}}
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endif
<div class="col-md-12 mt-5">
    <a class="btn btn-primary text-center" href="acessorios" style="background: #242424 !important; border:none !important;"><h3>Ver mais<i class="bi bi-chevron-double-right ms-3"></i></h3></a>
</div>
</div>
