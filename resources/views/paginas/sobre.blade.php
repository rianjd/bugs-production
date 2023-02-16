@extends('base/base')

@section('conteudo')

<!-- Banner-->
<section class="section parallax-container bg-image-dark" data-parallax-img="images/fundo-ondas.jpg">
    <section class="section-lg text-center">
      <div class="shell">
        <div class="range range-50 range-sm-center range-md-reverse range-md-middle">
          <div class="cell-md-6 cell-lg-5">
            <div class="box-width-4 box-centered">
              <p class="heading-1 koulen">Pinturas</p>
              <div class="divider-small"></div>
              <ul class="breadcrumbs-custom__path">
                <li class="passion"><a href="bugs">Home</a></li>
                <li class="active passion">Artes</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- Inicio-->
  <section class="section section-md bg-grey">
    <div class="shell">
      <div class="range range-50 range-sm-center range-md-left">
        <div class="cell-sm-6 cell-md-5">
          <div class="thumb-bordered"><img src='images/pinturas-04.jpg' alt="" width="437" height="435"/>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-7">
          <div class="box-width-3 box-centered">
            <article class="quote-big">
              <p class="q Yantramanav">As artes são unicas e exclusivas para cada cliente, do jeitinho que você desejar.</p>
            </article>
            <div class="divider"></div>
            <p class="text-spacing-05"> Em parceria com nosso pintor Hamilton Ferreira, realizamos a personalização da sua prancha com artes incriveis. Trabalho unico de nosso artista.</p>
            <div class="group-3-columns" data-lightgallery="group">
              <div class="column-item"><a class="thumb-light" href='images/certificate-1-847x1200.jpg' data-lightgallery="item"><img src='images/certificate-1-120x171.jpg' alt="" width="120" height="171"/>
                  <div class="thumb-light__overlay"></div></a></div>
              <div class="column-item"><a class="thumb-light" href='images/certificate-2-847x1200.jpg' data-lightgallery="item"><img src='images/certificate-2-120x171.jpg' alt="" width="120" height="171"/>
                  <div class="thumb-light__overlay"></div></a></div>
              <div class="column-item"><a class="thumb-light" href='images/certificate-3-847x1200.jpg' data-lightgallery="item"><img src='images/certificate-3-120x171.jpg' alt="" width="120" height="171"/>
                  <div class="thumb-light__overlay"></div></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Slides -->
  <section class="section section-md bg-gray-lighter text-center section parallax-container bg-image-ligth" data-parallax-img='images/fundo-madeira.jpg'>
    <div class="shell">
      <div class="range range-50 range-sm-center">
        <div class="cell-md-10 cell-lg-9 ">
          <h1 style="font-family: Koulen;">Mais pinturas</h1>
          <div class="divider-small"></div>
        </div>
      </div>
    </div>
    <div class="owl-carousel-wrap owl-carousel_style-2">
      <div class="owl-carousel" data-items="1" data-lg-items="3" data-autoplay="true" data-xl-items="3" data-dots="false" data-nav="false" data-stage-padding="0" data-xs-stage-padding="90" data-sm-stage-padding="140" data-md-stage-padding="260" data-lg-stage-padding="1" data-loop="true" data-margin="0" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav" data-center-mode="true" data-speed="500" data-lightgallery="group"><a class="thumb-ruby thumb-mixed_large" href='images/foto_sereia.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/foto_sereia.jpg' alt="" width="649" height="427"/>
        <div class="thumb-ruby__caption">
          <p class="thumb-ruby__title heading-3 koulen">Seu estilo</p>
          <p class="thumb-ruby__text"></p>
        </div></a><a class="thumb-ruby thumb-mixed_large" href='images/pinturas-01.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-01.jpg' alt="" width="649" height="427"/>
        <div class="thumb-ruby__caption">
          <p class="thumb-ruby__title heading-3 koulen">Muitas Cores</p>
          <p class="thumb-ruby__text"></p>
        </div></a><a class="thumb-ruby thumb-mixed_large" href='images/pinturas-02.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-02.jpg' alt="" width="649" height="427"/>
        <div class="thumb-ruby__caption">
          <p class="thumb-ruby__title heading-3 koulen">Personalizado</p>
          <p class="thumb-ruby__text"></p>
        </div></a>
      </div>
      <div class="owl-outer-navigation" id="owl-carousel-nav">
      <button class="owl-arrow owl-arrow-prev">
        <svg x="0px" y="0px" viewbox="0 0 28.5 16" width="26" height="14">
        <line x1="27.5" y1="8" x2="1" y2="8" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></line>
        <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="8.8,15 1,8 8.8,1"></polyline>
        </svg>
      </button>
      <button class="owl-arrow owl-arrow-next">
        <svg x="0px" y="0px" viewbox="0 0 28.5 16" width="26" height="14">
        <line fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="8" x2="27.5" y2="8"></line>
        <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="19.7,15 27.5,8 19.7,1"></polyline>
        </svg>
      </button>
      </div>
    </div>
  </section>

    <!-- Fotos-->
  <section class="section section-md bg-gray-lighter  text-center"  >
    <div class="shell-fluid">
      <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby  thumb-bordered-port thumb-mixed_height-2 thumb-mixed_md" href='images/pinturas-03.jpg ' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-03.jpg' alt="" width="440" height="327"/>
              <div class="thumb-ruby__caption"> </div></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-bordered-port thumb-mixed_height-3 thumb-mixed_md" href='images/pinturas-madeira-01.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-madeira-01.jpg' alt="" width="444" height="683"/>
              <div class="thumb-ruby__caption"> </div></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-bordered-port thumb-mixed_height-2 thumb-mixed_md" href='images/pinturas-madeira-02.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-madeira-02.jpg' alt="" width="440" height="327"/>
              <div class="thumb-ruby__caption">  </div></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-bordered-port thumb-mixed_height-3 thumb-mixed_md" href='images/pinturas-04.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-04.jpg' alt="" width="444" height="683"/>
              <div class="thumb-ruby__caption"> </div></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-bordered-port thumb-mixed_height-2 thumb-mixed_md" href='images/pinturas-05.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-05.jpg' alt="" width="440" height="327"/>
              <div class="thumb-ruby__caption"> </div></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-bordered-port thumb-mixed_height-2 thumb-mixed_md" href='images/pinturas-06.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/pinturas-06.jpg' alt="" width="440" height="327"/>
              <div class="thumb-ruby__caption"> </div></a>
          </div>
        </div>
      </div>
    </div>

    <div class="divider my-5"></div>
  </section>



@endsection

