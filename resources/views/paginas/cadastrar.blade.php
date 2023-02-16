@extends('base/base')
@section('conteudo')

<div class="container" style="padding: 10% 0 10% 0;">
    <div class="row justify-content-center">

        <div class="col-md-4 shadow" style="background-image: url(images/banner_cadastro.jpg) ;background-size: cover;">
            <h3 class="text-center text-bold heading-2 my-4" style="background: -webkit-linear-gradient(rgb(65, 132, 134), #333);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">CADASTRAR</h3>
        </div>
        <div class="col-md-4 shadow ">
                <div class="contact-form mx-3 mt-4">
                    <form class="mb-2" action="{{ route('cliente_cadastrar')}}" id="form_contato" method="post" >
                    {{ csrf_field() }}

                        <div class="row ">

                            <div class="col-md-12 ">
                                <div class="form-group mb-3">
                                    <input class="formulario_bugs " name="nome" id="nome" placeholder="Nome" required >

                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-3">
                                    <input class="formulario_bugs " type="text" name="email" required placeholder="Email">

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <input class="formulario_bugs " name="numero" id="numero"  placeholder="(DDD) Telefone">

                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-3">
                                    <input class="formulario_bugs cpf" name="cpf" id="cpf" required placeholder="CPF">

                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-3">
                                    <input class="formulario_bugs" type="password" name="password" required id="password" placeholder="Senha">

                                </div>
                            </div>




                            <div class="col-md-12 pt-5">
                                <div class="justify-content-center">
                                    <div class="form-group text-center">
                                        <input type="submit" value="Enviar" class="btn btn-primary rounded-1 py-3 px-5" style="background: #038D9B !important;border-color:#038D9B !important;">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<!--FORM VALIDATE-->
@if ($message = Session::get('success'))
    <div class="col-md-3 offset-md-9 fixed-bottom p-3" style="bottom:5em;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Cadastro realizado!</strong> <br>Seu cadastro foi concluido com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>
@endif
@if ($errors->any())
    <div class="col-md-3 offset-md-9 fixed-bottom p-3" style="bottom:5em;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Opss...</strong> <br>{{$errors->first()}}<u>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function($) {
        $('#numero').mask('(00) 90000-0000');
        $('.cpf').mask('000.000.000-00');
    });
</script>
<script>
$(document).ready(function() {



    $("#form_contato").validate({
    rules : {
            nome:{
            required:true,
            minlength:3
        },
        email:{
            required:true,
                email:true
        },
        cpf:{
            required:true,
            minlength:14
        },
        password:{
            required:true,
            minlength:8
        }
    },
    messages:{
            nome:{
            required:"Por favor, informe seu nome",
            minlength:"O nome deve ter pelo menos 3 caracteres"
        },
        email:{
            required:"É necessário informar um email",
                email:"Por favor, insira um email valido"
        },
        cpf:{
            required:"CPF inválido",
            minlength:"CPF inválido"
        },
        password:{
            required:"A senha não pode estar vazia",
            minlength:"Senha curta demais"
        }
    },
        errorClass:"erro_form",
    });

});
</script>


