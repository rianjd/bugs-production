@extends('base/base')

@section('conteudo')
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-imag-1.jpg;">
  <div class="shell">
    <h1 class="breadcrumbs-custom__title">Portifolio</h1>
    <ul class="breadcrumbs-custom__path">
      <li><a href="/">Home</a></li>
      <li class="active">Portifolio</li>
    </ul>
  </div>
</section>

<!-- My Best Photos-->
<section class="section section-sm bg-gray-lighter text-center">
  <div class="shell">
    <div class="range range-50 range-sm-center">
    <div class="cell-md-10 cell-lg-9">
      <h1>Mais fotos</h1>
    </div>
    </div>
  </div>
<!-- Owl Carousel-->
  <div class="owl-carousel-wrap owl-carousel_style-2">
    <div class="owl-carousel" data-items="1" data-lg-items="3" data-autoplay="true" data-xl-items="3" data-dots="false" data-nav="false" data-stage-padding="0" data-xs-stage-padding="90" data-sm-stage-padding="140" data-md-stage-padding="260" data-lg-stage-padding="1" data-loop="true" data-margin="0" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav" data-center-mode="true" data-speed="500" data-lightgallery="group"><a class="thumb-ruby thumb-mixed_large" href='images/portifolio1.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/portifolio1.jpg' alt="" width="649" height="427"/>
      <div class="thumb-ruby__caption">
      <p class="thumb-ruby__title heading-3">Imagem #1</p>
      <p class="thumb-ruby__text"></p>
      </div></a><a class="thumb-ruby thumb-mixed_large" href='images/portifolio-1.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/about-3-649x427.jpg' alt="" width="649" height="427"/>
      <div class="thumb-ruby__caption">
      <p class="thumb-ruby__title heading-3">Imagem #2</p>
      <p class="thumb-ruby__text"></p>
      </div></a><a class="thumb-ruby thumb-mixed_large" href='images/group-image-3-1200x800-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/about-4-649x427.jpg' alt="" width="649" height="427"/>
      <div class="thumb-ruby__caption">
      <p class="thumb-ruby__title heading-3">Imagem #3</p>
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

<!-- Portfolio-->
<section class="section section-md  text-center" >
  <div class="shell-fluid">
    <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href='images/gallery-image-1-1200x800-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/gallery-image-1-440x327.jpg' alt="" width="440" height="327"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Image #</p>
            <p class="thumb-ruby__text"></p>
          </div></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href='images/gallery-image-9-1200x800-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/gallery-image-9-444x683.jpg' alt="" width="444" height="683"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Image #</p>
            <p class="thumb-ruby__text"></p>
          </div></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href='images/gallery-image-15-1200x801-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/gallery-image-15-440x327.jpg' alt="" width="440" height="327"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Image #</p>
            <p class="thumb-ruby__text"></p>
          </div></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href='images/gallery-image-10-835x1200-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/gallery-image-10-444x683.jpg' alt="" width="444" height="683"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Image #</p>
            <p class="thumb-ruby__text"></p>
          </div></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href='images/gallery-image-14-1200x800-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/gallery-image-14-440x327.jpg' alt="" width="440" height="327"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Image #</p>
            <p class="thumb-ruby__text"></p>
          </div></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href='images/gallery-image-2-1200x800-original.jpg' data-lightgallery="item"><img class="thumb-ruby__image" src='images/gallery-image-2-440x327.jpg' alt="" width="440" height="327"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Image #</p>
            <p class="thumb-ruby__text"></p>
          </div></a>
      </div>
    </div>
    </div>
  </div>
  </section>
</section>


<section class="section parallax-container bg-image-dark" data-parallax-img="{% static 'media/images/banner-teste-2.jpg' %}">
  <div class="container-fluid med" >
    <div class="grid">
      <p class="heading-1 text-center-title">  Veja mais</p>
        <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
          <div class="col-md-3 "  >
            <div class="col-sm-12 post-boxed " >
              <div class="thumb-corporate img  "  ><a class="thumb-ruby " href='images/gallery-image-9-1200x800-original.jpg' data-lightgallery="item"><img class=" img-centered" src="{% static 'media/images/quilhas.png' %}" width="372" height="276"/></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 "  >
            <div class="col-sm-12 post-boxed " >
              <div class="thumb-corporate img " ><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href='images/gallery-image-9-1200x800-original.jpg' data-lightgallery="item"><img class=" img-centered" src="{% static 'media/images/quilhas.png' %}" width="372" height="276"/></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 "  >
            <div class="col-sm-12 post-boxed " >
              <div class="thumb-corporate img " ><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href='images/gallery-image-9-1200x800-original.jpg' data-lightgallery="item"><img class=" img-centered" src="{% static 'media/images/quilhas.png' %}" width="372" height="276"/></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 "  >
            <div class="col-sm-12 post-boxed " >
              <div class="thumb-corporate img " ><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href='images/gallery-image-9-1200x800-original.jpg' data-lightgallery="item"><img class=" img-centered" src="{% static 'media/images/quilhas.png' %}" width="372" height="276"/></a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>


@endsection

