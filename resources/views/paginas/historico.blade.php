@extends('base/base')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script>
    $(function (){
            $(".infocompra").on('click', function() {
                let id = $(this).attr("data-value")
                $.post('{{route("compraDetalhes")}}', {idpedido : id}, (result) => {
                    $("#conteudopedido").html(result)
                })
            })
    })
</script>
@section('conteudo')

<div class="container my-5">
    <div class="col-md-12 my-5">
        <h2 class="text-center koulen">Minhas compras</h2>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Data da compra
                </th>
                <th>
                    Status
                </th>
                <th>
                    Detalhes
                </th>
            </tr>
            @foreach ($listaP as $p)
                <tr>
                    <td>{{($p['id']+20)*18}}</td>
                    <td>{{date('d/m/Y H:m',strtotime($p['datapedido']))}}</td>
                    <td>{{$p['status']}}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-primary infocompra" data-value="{{$p['id']}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ver detalhes
                        </button>
                    </td>
                </tr>

            @endforeach
        </table>
        <!-- Modal -->
        <div class="modal fade infocompra" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detalhes da sua compra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="conteudopedido">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

