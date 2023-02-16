@extends('base/base')

@section('conteudo')
    <!--Hey! This is the original version of Simple CSS Waves-->

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
                xml:space="preserve">
                <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                <g>
                    <path fill="#fff"
                        d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
                </g>
            </svg>
            <h1 class="koulen heading-1" style="color: whitesmoke ;">BUGS SURF</h1>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->
    {{-- <!-- CAPA -->
 <section class="section parallax-container bg-image-dark" data-parallax-img='images/banner-teste-4.jpg'>
    <div class="parallax-content">
      <section class="section-lg text-center">
        <div class="shell">
          <div class="range range-50 range-sm-center range-md-reverse range-md-middle">
            <div class="cell-md-6 cell-lg-5">
              <div class="box-width-4 box-centered">
                <p class="heading-1 heading-10" style="font-family: Bebas Neue; margin: 10px;">BUGS <br > SURF</p>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section> --}}


    <!-- INICIO-->
    <section class="section section-md bg-white">
        <div class="shell">
            <div class="range range-50 range-sm-center range-md-left range-md-middle range-md-reverse">
                <div class="cell-sm-6 wow fadeInRightSmall">
                    <div class="thumb-line"><img src='images/about-1-531x640.jpg' alt="" width="531"
                            height="640" />
                    </div>
                </div>
                <div class="cell-sm-6">
                    <div class="box-width-3">
                        <p class="heading-1 wow fadeInLeftSmall">Peça agora!</p>
                        <article class="quote-big wow fadeInLeftSmall" data-wow-delay=".1s">
                            <p class="q">Entre em contato com a gente para fazer seu pedido agora mesmo ou compre pelo
                                site</p>
                        </article>
                        <div class="divider wow fadeInLeftSmall" data-wow-delay=".2s"></div>
                        <div class="row">
                            <a class="button button-primary-outline button-ujarak button-size-3 wow fadeInLeftSmall"
                                style="background-color: rgb(0, 48, 18)" href="contato" data-wow-delay=".4s">
                                <i class="bi bi-whatsapp " style="margin-right: 10px;"></i>Orçamento
                            </a>
                            <a class="button button-primary-outline button-ujarak button-size-3 wow fadeInLeftSmall"
                                style="background-color: rgb(6, 83, 77)" href="acessorios" data-wow-delay=".4s">
                                <i class="bi bi-bag-plus" style="margin-right: 10px;"></i>Comprar agora
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- catalogo-->
    <section class="section bg-image-dark"
        style="background :linear-gradient(180deg, rgb(73, 162, 170) 0%, rgb(31, 87, 100) 100%)">

        <div class="section-md text-center">
            <div class="shell">
                <div class="col-md-12">
                    <h1 class="my-5"><strong>PROMO</strong><i class="bi bi-tags-fill ms-3"></i></h1>
                </div>
                @include('promocao.promoca_page')

            </div>
        </div>
    </section>

    <!-- Cards-->
    <section class="section section-md bg-gray-lighter text-center" style="padding: 40px 0px;" id="sobre">
        <div class="shell">
            <p class="heading-1 ">Sobre</p>
            <div class="range range-30">
                <div class="cell-sm-6 cell-md-4 wow fadeInLeftSmall">
                    <article class="post-boxed">
                        <ul class="post-boxed__meta">
                        </ul>
                        <div class="post-boxed__main">
                            <h3 class="post-boxed__title"><a href="#">Rumo as Ondas de Todo o Mundo</a></h3>
                            <p>Nosso maior objetivo é levar nossa marca para diversos picos e diferentes ondas, Bugs pelo
                                mundo!</p>
                        </div>
                        <div class="post-boxed__aside">
                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                <div class="unit__left"><img src='images/rasgada-rik.jpg' alt="" width="400"
                                        height="210" />
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4 wow fadeInLeftSmall" data-wow-delay=".15s">
                    <article class="post-boxed">
                        <ul class="post-boxed__meta">
                        </ul>
                        <div class="post-boxed__main">
                            <h3 class="post-boxed__title"><a href="producao">Processos Detalhados e Precisos</a></h3>
                            <p>Pranchinas feitas a mão detalhe por detalhe, não deixamos nada para tras, apenas as
                                ondas.....</p>
                        </div>
                        <div class="post-boxed__aside">
                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                <div class="unit__left"><img src='images/pintor.jpg' alt="" width="400"
                                        height="210" />
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4 wow fadeInLeftSmall" data-wow-delay=".3s">
                    <article class="post-boxed">
                        <ul class="post-boxed__meta">
                        </ul>
                        <div class="post-boxed__main">
                            <h3 class="post-boxed__title"><a href="contato">Dicas e Recomendações </a></h3>
                            <p>Se você não sabe o que é melhor você, nosso laminador Rik tem varias dicas que vão te ajudar!
                            </p>
                        </div>
                        <div class="post-boxed__aside">
                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                <div class="unit__left"><img src='images/gallery-image-2-1200x800-original.jpg'
                                        alt="" width="400" height="210" />
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <section class=" section section-sm row justify-content-center ">
            <p class="heading-3 my-3">Como chegar?</p>
            <div class="mapouter">
                <style>
                    @media (max-width: 768px){
                        iframe{
                            width:auto;
                        }
                    }
                    @media (min-width: 1000px){
                        iframe{
                            width:800px;
                        }
                    }
                </style>
                <div class="gmap_canvas "><iframe class="shadow" height="400" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=bugs%20surf&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://embedgooglemap.net/124/"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: center;
                            height: auto;
                            width: auto;
                        }
                    </style><a href="https://www.embedgooglemap.net">embed google maps on website</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: auto;
                            width: auto;
                        }
                    </style>
                </div>
            </div>
        </section>
    </section>

    <!-- Maps -->


    <!-- Insta-->
    <section class="section section-sm text-center">
        <div class="shell">
            <div class="range range-50 range-sm-center">
                <div class="cell-md-10 cell-lg-9">
                    <h1 class="bebas">Veja mais</h1>
                    <h5> Acompanhe nosso dia a dia pelo nosso instagram!</h5>
                    <div class="col-sm-12 "><img
                            src='images/celular-bugs.png' alt="" width="670" height="700" />
                    </div>
                    <a style="background-color: #086473 ;border-radius: 8px; margin-top: 10px;"
                        class="button button-primary button-size-3 wow fadeInLeftSmall"
                        href="https://www.instagram.com/bugssurf_oficial/" data-wow-delay=".4s">Vamos la!</a>
                        <div class="divider mt-3"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
