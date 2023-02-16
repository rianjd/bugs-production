<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class= "modal fade" id="modalLogin" tabindex="1" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3 koulen" id="exampleModalLabel">LOGIN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

            <div class="modal-body">
                <div class="contact-form mx-3 mt-4">
                                        <form class="mb-2" action="{{ route('cliente_logar')}}" method="post" >
                                        {{ csrf_field() }}

                                            <div class="row ">

                                                <div class="col-md-12 ">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group">
                                                            <i class="bi bi-person-fill " style="font-size: 25px; margin-right: 1em;"></i><input class="form-control formulario_bugs" name="email" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group">
                                                            <i class="bi bi-key mr-3" style="font-size: 25px;margin-right: 1em;"></i><input class="form-control formulario_bugs" type="password" name="password" placeholder="Senha">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-right">
                                                    <a href="{{route('cadastrar')}}" class="text-muted">Não tenho login</a>
                                                </div>

                                                <div class="col-md-12 pt-5">
                                                    <div class="justify-content-center">
                                                        <div class="form-group text-center">
                                                            <input type="submit" value="Entrar" class="btn btn-primary rounded-1 py-3 px-5" style="background: #003b32 !important;border-color:#003b32 !important;">
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
        </div>
    </div>
</div>
