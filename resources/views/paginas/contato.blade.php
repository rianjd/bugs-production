@extends('base/base')

@section('conteudo')

<!-- BANNER-->
<section class="section section-md bg-gray-lighter text-center section parallax-container bg-image-ligth" data-parallax-img='/images/fundo-contato.jpg'>
    <div class="shell">
      <div class="range range-50 range-sm-center">
        <div class="cell-md-10 cell-lg-9">
          <h1 class="koulen">Como pedir?</h1>
          <div class="divider-small"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contato-->
  <section class="section section-md bg-white">
    <div class="shell">
      <div class="range">
        <div class="range range-30 range-center">
          <div class="cell-xs-10 cell-sm-6 cell-md-4">
            <article class="box-minimal">
              <div class="box-minimal__icon fa fa-whatsapp"></div>
              <p class="box-minimal__title heading-3">Whatsapp</p>
              <div class="box-minimal__divider"></div>
              <div class="box-minimal__text">Converse conosco no Whatsapp e detalhe seu pedido, envie exemplos, desenhos, modelos, etc...</div>
            </article>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-4">
            <article class="box-minimal">
              <div class="box-minimal__icon fa fa-envelope-o"></div>
              <p class="box-minimal__title heading-3">Email</p>
              <div class="box-minimal__divider"></div>
              <div class="box-minimal__text">Descreva seu pedido dealhadamente, entraremos em contato o mais rapido possivel para confirmar o pedido e confirmar suas preferencias.</div>
            </article>
          </div>
          <div class="cell-xs-10 cell-sm-6 cell-md-4">
            <article class="box-minimal">
              <div class="box-minimal__icon fa fa-phone"></div>
              <p class="box-minimal__title heading-3">Telefone</p>
              <div class="box-minimal__divider"></div>
              <div class="box-minimal__text">Por telefonemas marcamos horarios de atendimento e consiguimos os melhores detalhes para o seu produto.<br> (48) 99123-1975</div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- PEÇA AGORA-->
<section class="section section-md bg-white text-center">
    <div class="shell">
      <div class="range range-md-center">
        <div class="cell-md-11 cell-lg-10">
          <h3 class="text-bold heading-3">PEÇA AGORA</h3>

          <div class="box-minimal__text">Por meio desse formulario entraremos em contato com você</div>
          <div class="layout-columns">
            <div class="layout-columns__main">
              <div class="layout-columns__main-inner">
                <!-- FORMULARIO-->
                <form class="mb-5" action="{{ route('form.store')}}" method="post" id="form" >
                    @csrf

                    <div class="row">
                    <div class="col-md-6 form-group mb-5">

                        <input type="text" class="formulario_bugs" name="nome" id="nome" required="" placeholder="Seu nome">
                    </div>
                    <div class="col-md-6 form-group mb-5">

                        <input type="tel"  class="formulario_bugs" name="numero" id="numero" required  placeholder="Numero (Celular) ">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group mb-5">

                            <input type="text" class="formulario_bugs" name="endereco" id="endereco" required="" placeholder="Seu endereço">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-5">

                            <input type="text" class="formulario_bugs" name="email" id="email" required="" placeholder="Seu email">
                        </div>
                    </div>

                    <div class="row mb-5 " style="margin-bottom: 20px;">
                    <div class="col-md-12 form-group mb-3">

                        <textarea class="formulario_bugs" name="message" id="message" cols="40" rows="2"  placeholder="Escreva aqui detalhes do seu pedido"></textarea>
                    </div>
                    </div>
                    <div class="text-center-title">
                    <div class="col-md-12 form-group text-center">
                        <input type="submit" value="Enviar" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                    </div>
                    </div>
                </form>

                <div class="max-width mt-5">
                    <!--FORM VALIDATE-->
                    @if ($errors->any())
                        <div href="#" id="ui-to-error" class="ui-to-error fa fa-angle-error active ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <span style="background-color: none;" onclick="this.parentElement.style.display='none'"
                            class="w3-button w3-display-topright">&times;</span> </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div href="#" id="ui-to-success" class="ui-to-success fa fa-angle-success active "> <span style="background-color: none;" onclick="this.parentElement.style.display='none'"
                            class="w3-button w3-display-topright">&times;</span> </div>
                    @endif
                </div>
            </div>
        </div>

          <!-- Coluna contato-->
          <div class="layout-columns__aside">
            <div class="layout-columns__aside-item">
              <p class="heading-5">Sociais</p>
              <div class="divider-modern"></div>
              <ul class="list-inline-xs">
                <li><a class="icon icon-md icon-gray-7 fa fa-instagram" href="#"></a></li>
                <li><a class="icon icon-md icon-gray-7 fa fa-google" href="#"></a></li>
                <li><a class="icon icon-md icon-gray-7 fa fa-whatsapp" href="#"></a></li>
              </ul>
            </div>
            <div class="layout-columns__aside-item">
              <p class="heading-5">Fone</p>
              <div class="divider-modern"></div>
              <div class="unit unit-horizontal unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-md icon-primary material-icons-local_phone"></span></div>
                <div class="unit__body"><a href="tel:#">(48) 99123-1975</a></div>
              </div>
            </div>
            <div class="layout-columns__aside-item">
              <p class="heading-5">Endereço</p>
              <div class="divider-modern"></div>
              <div class="unit unit-horizontal unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-md icon-primary material-icons-location_on"></span></div>
                <div class="unit__body"><a href="#">Rua Vereador Adolfo Bunn, 7 / CEP 88104-010</a></div>
              </div>
            </div>
            <div class="layout-columns__aside-item">
              <p class="heading-5">Horario de atendimento</p>
              <div class="divider-modern"></div>
              <div class="unit unit-horizontal unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-md icon-primary mdi mdi-clock"></span></div>
                <div class="unit__body"><span>Todos os dias das 8:00 as 12:00 / 14:00 as 20:00</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
