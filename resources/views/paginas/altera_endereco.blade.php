<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
    $(document).ready( function() {
        $(".cep").blur(function(){
            // Remove tudo o que não é número para fazer a pesquisa
            var cep = this.value.replace(/[^0-9]/, "");

            // Validação do CEP; caso o CEP não possua 8 números, então cancela
            // a consulta
            if(cep.length != 8){
                return false;
            }

            // A url de pesquisa consiste no endereço do webservice + o cep que
            // o usuário informou + o tipo de retorno desejado (entre "json",
            // "jsonp", "xml", "piped" ou "querty")
            var url = "https://viacep.com.br/ws/"+cep+"/json/";

            // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
            // caso ocorra algum erro (o cep pode não existir, por exemplo) a
            // usabilidade não seja afetada, assim o usuário pode continuar//
            // preenchendo os campos normalmente
            $.getJSON(url, function(dadosRetorno){
                try{
                    // Preenche os campos de acordo com o retorno da pesquisa
                    $("#endereco").val(dadosRetorno.logradouro);
                    $("#bairro").val(dadosRetorno.bairro);
                    $("#cidade").val(dadosRetorno.localidade);
                    $("#uf").val(dadosRetorno.uf);
                }catch(ex){}
            });
        });
    });
</script>
<div class= "modal fade" id="modalAltera" tabindex="-1" aria-labelledby="modalAltera" aria-hidden="true">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3 koulen" id="exampleModalLabel">Alterar endereco</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="contact-form mx-3 mt-4">
                    <form class="mb-2" action="{{ route('alterar_Endereco')}}" method="post" >
                    {{ csrf_field() }}
                            <div class="row my-3">
                                <div class=" col-3 col-md-2">
                                    DDD
                                    <input type="text" class="form-control ddd" name="ddd" id="cddd" placeholder="" required="">
                                </div>
                                <div class="col-9 col-md-5">
                                    Telefone
                                    <input type="text" class="form-control telefone" name="telefone" id="cnumero" placeholder="" required="">
                                </div>
                                <div class="col-md-5">
                                    CEP
                                    <input type="text" class="form-control cep" name="cep" id="cep" maxlength="9" autofocus>
                                </div>
                            </div>
                            <div class="row my-3">

                                <div class="col-md-12">
                                    Endereço
                                    <input type="text" class="form-control endereco" name="logradouro" id="endereco" placeholder="" required="">
                                </div>
                                <div class="col-md-5">
                                    Bairro
                                    <input type="text" class="form-control bairro" name="bairro" id="bairro" placeholder="" required="">
                                </div>
                                <div class="col-9 col-md-4">
                                    Cidade
                                    <input type="text" class="form-control cidade" name="cidade" id="cidade" placeholder="" required="">
                                </div>
                                <div class="col-3 col-md-3">
                                    Estado
                                    <select class="form-control uf" name="estado" id="uf">
                                        <option value="SC">SC</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                        <option value="EX">EX</option>
                                    </select>
                                </div>

                                <div class="col-9 col-md-9">
                                    Complemento
                                    <input type="text" class="form-control complemento" name="complemento" id="complemento" placeholder="" required="">
                                </div>
                                <div class="col-3 col-md-3">
                                    Numero
                                    <input type="text" class="form-control num" name="numero" id="num" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-12 pt-5">
                                <div class="justify-content-center">
                                    <div class="form-group text-center">
                                        <input type="submit" value="Alterar" class="btn btn-primary rounded-1 py-3 px-5" style="background: #003b32 !important;border-color:#003b32 !important;">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


