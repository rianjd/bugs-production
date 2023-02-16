@extends('base/base')

@section('conteudo')


<!-- InICIO-->

<section class="section section-md bg-white">
    <div class="grid">
      <div class="range range-50 range-sm-center range-md-rigth range-md-middle range-md-reverse">
        <div class="cell-sm-4">
            <div class="box-width-3">
              <p class="heading-1 wow fadeInLeftSmall text-center bebas">Processo de produção</p>
              <article class="quote-big wow fadeInLeftSmall text-center" data-wow-delay=".1s">
                <p class="q">Acompanhe aqui as etapas de produção das pranchas.</p>
              </article>
            </div>
        </div>
        <div class="cell-sm-4 wow fadeInLeftSmall">
          <div class="thumb-line"><img src='images/portifolio1.jpg'   alt="" width="800" height="1200"/>
          </div>
        </div>

      </div>
    </div>
</section>

<!-- VIDEOS -->
<section class="section section-md bg-gray-lighter text-center section parallax-container bg-image-ligth" data-parallax-img='images/fundo-madeira.jpg' >
    <div class="shell">
        <div class="range range-50 range-sm-center">
            <div class="cell-md-10 cell-lg-9">
            <h1 class="koulen">Videos</h1>
            <div class="divider-small"></div>
            </div>
        </div>
    </div>
    <div class="shell-wide">
        <div class="container-fluid-md ">
            <div class="grid">
                <div class="col-sm-4 separador" >
                    <div class="col-sm-12 post-boxed" style="text-align: center;" >
                        <iframe width="275" height="300" src="https://www.youtube.com/embed/A1KNG87-o8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>> </iframe>
                        <div class="divider"></div>
                        <h5 class="passion"> Shapeando </h5>
                        <p>Nessa etapa é onde escolhemos o formato e tamanho da prancha, sem falar de todos os detalhes
                        <br>que vão ser aperfeiçoados durante o caminho. </p>
                    </div>
                </div>
                <div class="col-sm-4 separador" >
                    <div class="col-sm-12 post-boxed" style="text-align: center;" >
                        <iframe width="275" height="300" src="https://www.youtube.com/embed/A1KNG87-o8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>> </iframe>
                        <div class="divider"></div>
                        <h4 class="passion"> Laminação e vacuo </h4>
                        <p> Aqui vamos reforçar nossa prancha com com algumas camadas de tecido e resina epoxy.
                        <br>Para deixar tudo isso muito firme finalizamos com o vacuo. </p>
                    </div>
                </div>
                <div class="col-sm-4 separador" >
                    <div class="col-sm-12 post-boxed" style="text-align: center;" >
                        <iframe width="275" height="300" src="https://www.youtube.com/embed/A1KNG87-o8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>> </iframe>
                        <div class="divider"></div>
                        <h5 class="passion"> Acabamentos e Lixa  </h5>
                        <p> Etapa final, sua prancha ja esta com o formato e consistencia, agora com a lixa e os acabamentos a nave ja ta pronta para voar!! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-sm bg-gray-lighter text-center">
</section>

@endsection

