@php
    $tot = 0;
@endphp
<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Quantidade</th>
    </tr>

        @foreach ($valorPedido as $p)
        @php $tot += $p['valor_item'] ;@endphp
        <tr>
            <td>{{$p['nome']}}</td>
            <td>R$ {{$p['valor_item']}}</td>
            <td>{{$p['quantidade']}}</td>
        </tr>
        @endforeach
</table>
<table class="table table-bordered">
    <tr>
        <th>Total</th>
        <th>R$ {{$tot}}</th>
    </tr>
</table>
