<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Home</title>
    @yield('head')
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ URL::asset('/images/favicon.ico') }}" type="/image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic%7CBebas Neue%7CChanga%7CKoulen%7CPassion+One%7CYantramanav%7CChivo') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">



</head>

<body>

    <!-- Page Loader-->
    <div id="page-loader">
        <div class="page-loader-body">
            <div class="cssload-spinner">
                <div class="cssload-cube cssload-cube0"></div>
                <div class="cssload-cube cssload-cube1"></div>
                <div class="cssload-cube cssload-cube2"></div>
                <div class="cssload-cube cssload-cube3"></div>
                <div class="cssload-cube cssload-cube4"></div>
                <div class="cssload-cube cssload-cube5"></div>
                <div class="cssload-cube cssload-cube6"> </div>
                <div class="cssload-cube cssload-cube7"></div>
                <div class="cssload-cube cssload-cube8"></div>
                <div class="cssload-cube cssload-cube9"></div>
                <div class="cssload-cube cssload-cube10"></div>
                <div class="cssload-cube cssload-cube11"></div>
                <div class="cssload-cube cssload-cube12"></div>
                <div class="cssload-cube cssload-cube13"></div>
                <div class="cssload-cube cssload-cube14"></div>
                <div class="cssload-cube cssload-cube15"></div>
            </div>
        </div>
    </div>
    <!-- Page-->
    <div class="page">
        <!-- Page header-->



        <header class="section page-header ">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap shadow-sm">

                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static"
                    data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static"
                    data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px"
                    data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- ICON E SOCIAL-->
                            <div class="rd-navbar-panel">

                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <div class="rd-navbar-brand"><a class="brand" href="/">
                                        <div class="brand__name"><img class="brand__logo-dark"
                                                src='/images/logo-default-237x35.png' alt="" width="150"
                                                height="35" /><img class="brand__logo-light"
                                                src="images/logo-inverse-237x35.png" alt="" width="237"
                                                height="35" />
                                        </div><span class="brand__slogan text-center changa">Surfar é viver</span>
                                    </a></div>
                            </div>

                            <div class="rd-navbar-nav-wrap">

                                <!-- Categorias-->
                                <ul class="rd-navbar-nav">
                                    <li><a style="font-family: Koulen;" href="/"><i
                                                class="fa fa-home icon-style-social cinza"></i>
                                            Home<span></span><span></span><span></span><span></span></a>
                                    </li>
                                    </li>
                                    <li><a style="font-family: Koulen; " href="/acessorios"><i
                                                class="fa fa-shopping-basket icon-style-social cinza"></i>
                                            Comprar<span></span><span></span><span></span><span></span></a>
                                    </li>

                                    <li><a style="font-family: Koulen;" href="/portifolio"><i
                                                class="fa fa-camera-retro icon-style-social cinza"></i>
                                            Portifolio<span></span><span></span><span></span><span></span></a>

                                    <li>
                                        <a style="font-family: Koulen;" href="/contato"><i
                                                class="fa fa-phone icon-style-social cinza"></i> Entre em
                                            contato<span></span><span></span><span></span><span></span></a>
                                    </li>

                                </ul>

                                <div class="rd-navbar-element" style="text-align:left;">
                                    <ul class="list-icons list-inline-sm">
                                        @if (Auth::check())


                                            <li><a class="icon icon-sm fa fa-shopping-cart cinza"
                                                    href="/carrinho"></a><span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                                    @if (!empty(session('cart')))
                                                        {{ count(session('cart')) }}
                                                    @endif
                                                </span></li>
                                            <li><a class="icon icon-sm fa fa-cog cinza dropdown-toggle" role="button"
                                                    id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"></a></li>
                                        @else
                                            <li><a class="icon icon-sm fa fa-user cinza" data-bs-toggle="modal"
                                                    data-bs-target="#modalLogin" title="Cadastro"></a></li>


                                        @endif
                                    </ul>
                                    @if (Auth::check())
                                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                            <p class="dropdown-item disabled" style="color: rgb(54, 54, 54)">
                                                <strong>{{ Crypt::decrypt(Cookie::get('cookie_name')) }}</strong>
                                            </p>
                                            <a class="dropdown-item" href="/perfil">Ver perfil</a>
                                            <a class="dropdown-item" href="/logout">Sair</a>
                                        </div>
                                    @endif
                                </div>


                            </div>

                        </div>

                    </div>
                </nav>
            </div>
        </header>
        <div class="content">

            @yield('conteudo')

        </div>
        <!-- Page Footer -->
        <footer class="footer-centered section bg-gray-darker">
            <div class="site-section">
                <div class=" row px-5">


                    <div class="row col-lg-8">

                        <div class="col-sm mb-3">
                            <a class="brand" href="">
                                <div class="brand__name"><img src="/images/logo-inverse-237x35.png" alt=""
                                        width="237" height="35" />
                                </div><span class="brand__slogan">"Surfar é viver"</span>
                            </a>
                            <p class="copyright">
                                <small>&copy; 2023</small>
                            </p>
                        </div>
                        <div class="col-sm col-6 mb-3">
                            <h3 style="color:white;">Telefone</h3>
                            <ul class="list-unstyled links">
                                <li><a href="#">(48) 9 9123-1975</a></li>
                                <li><a href="#">(48) 9 9133-6884</a></li>
                            </ul>
                        </div>
                        <div class="col-sm col-6 mb-3">
                            <h3 style="color:white;">Empresa</h3>
                            <ul class="list-unstyled links">
                                <li><a href="#sobre">Sobre nós</a></li>
                                <li><a href="/acessorios">Itens</a></li>
                                <li><a href="/portifolio">Portifólio</a></li>
                            </ul>
                        </div>
                        <div class="col-sm col-6 mb-5">
                            <h3 style="color:white;">Endereço</h3>
                            <ul class="list-unstyled links">
                                <li><a href="https://goo.gl/maps/Eef8Qp2PQisuiF9p7">R. Vereador Adolfo Bunn, 7</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-6 mb-5">
                            <h3 style="color:white;">Sociais</h3>
                            <ul class="list-icons list-inline-sm">
                                <li><a class="icon icon-sm fa fa-instagram icon-style-camera"
                                        href="https://instagram.com/bugssurf_oficial?igshid=YmMyMTA2M2Y="><span></span><span></span><span></span><span></span></a>
                                </li>
                                <li><a class="icon icon-sm fa fa-whatsapp icon-style-camera"
                                        href="contato"><span></span><span></span><span></span><span></span></a></li>
                                <li><a class="icon icon-sm fa fa-google icon-style-camera"
                                        href="contato"><span></span><span></span><span></span><span></span></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="text-right col-lg-4 px-5">
                        <div>
                            <h2 class="mb-0">Pronto para começar no surf?</h2>
                            <h3 class="text-muted mb-2">Faça seu orçamento agora!</h3>
                        </div>
                        <div class="ml-auto">
                            <a href="/contato" class="btn btn-primary rounded-0 py-3 px-5">Contate-nos</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
        {{-- SCRIPT --}}
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="/js/core.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>

        @include('paginas.login')
</body>

</html>
