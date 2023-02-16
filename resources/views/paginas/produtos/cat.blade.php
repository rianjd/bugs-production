@if (count($listaProd) != 0)
        @foreach ($listaProd as $produto)
            <div class="col-sm-3 separador my-2" >
                <div class="col-sm-12 post-boxed shadow" >
                <div class="thumb-corporate img"><a href="{{ route('ver_Produto', ['filtro' => $produto['id']])}}" class="btn-block" ><img class=" img-centered" src="{{URL::asset($produto["foto"])}}" /></a>
                    <div class="post-classic__text text-center">
                    <p class="text-center-item" >{{$produto['nome']}}</p>
                    {{-- <p class="text-center-item mb-2" ><strong> R$ {{number_format($produto['valor'],2,',','')}}</strong></p> --}}
                    <p class="text-center-item mb-2 text-muted" >Indisponivel</p>

                    @if (Auth::check())
                        <a class="btn btn-primary text-center mt-2" style="background: #1d97d0 !important; border:none !important;" href="{{route('adicionar_Carrinho', ['idproduto' => $produto['id']]) }}">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                    @else
                        <a class="btn btn-primary text-center mt-2" style="background: #1d97d0 !important; border:none !important;" data-bs-toggle="modal" data-bs-target="#modalLogin" title="Cadastro">Adicionar<i class="bi bi-cart-plus-fill ms-2"></i></a>
                    @endif
                    </div>
                </div>
                </div>
            </div>
        @endforeach
@endif
