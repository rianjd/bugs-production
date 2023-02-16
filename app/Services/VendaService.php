<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pedido;
use App\Models\ItensPedido;


class VendaService
{
    public function finalizarVenda ($prods = [], User $user){

        try{

            \DB::beginTransaction();
            $pedido = new Pedido();

            $pedido->datapedido = date('Y-m-d H:i:s' , strtotime('-3 hour'));
            $pedido->status = 'PEN';
            $pedido->usuario_id = $user->id;
            $pedido->save();

            foreach ($prods as $p){
                $itens = new ItensPedido();

                $itens->quantidade = 1;
                $itens->valor_item = $p->valor;
                $itens->dt_item = date('Y-m-d H:i:s' , strtotime('-3 hour'));
                $itens->produto_id = $p->id;
                $itens->pedido_id = $pedido->id;
                $itens->save();
            }
            \DB::commit();
            return ['status' => 'success','success'=>'OK', 'idpedido' => $pedido->id];


        }catch(\Exception $e){
            \DB::rollback();
            return ['status' => 'error','erro'=>$e->getMessage()];

        }

    }

}
