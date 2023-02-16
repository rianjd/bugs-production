<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pedidos Bugs</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Estilos customizados para esse template -->
</head>


<div class="container">

    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow"><img class="mr-3" id="logo-messenger" src={{"https://github.com/rianjd/Bugs-django/blob/master/static/media/images/logo-inverse-237x35.png"}} width="150" height="50" style="display:block;" alt="">
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-4 mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 20 20">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
              </svg> Novo pedido </h5>
        @if (isset($data['nome']))<div class="text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Nome: </strong>{{$data['nome'] }}</p></div></div>@endif
        @if (isset($data['numero']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Numero: </strong>{{$data['numero'] }}</p></div></div>@endif
        @if (isset($data['endereco']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Endereço: </strong>{{$data['endereco'] }}</p></div></div>@endif
        @if (isset($data['email']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Email: </strong>{{$data['email'] }}</p></div></div>@endif
        @if (isset($data['message']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Pedido: </strong>{{$data['message'] }}</p></div></div>@endif






</div>
</div>
