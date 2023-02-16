<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Equipamentos']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Adicionais']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Pranchas']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'Leash','valor' => 50, 'foto'=>'images/leash-colorido-sf.png','descricao'=>'Descrição' , 'categoria_id'=> 1]);
        $prod->save();
        $prod = new \App\Models\Produto(['nome' => 'Quilhas de plastico','valor' => 100, 'foto'=>'images/quilhas-plastico.png','descricao'=>' Varias cores - FCS I , II, Pranchão, Fun, Biquilha, Performace' , 'categoria_id'=> 1]);
        $prod->save();
        $prod = new \App\Models\Produto(['nome' => 'Deck simples','valor' => 70, 'foto'=>'images/deck-preto-sf.png','descricao'=>'Deck Preto - Soul Fins - EVA Reforçado - Colante' , 'categoria_id'=> 1]);
        $prod->save();
        $prod = new \App\Models\Produto(['nome' => 'Deck colorido','valor' => 85, 'foto'=>'images/deck-colorido-sf.png','descricao'=>'Deck colorido - Soul Fins - EVA Reforçado - Fita 3M' , 'categoria_id'=> 1]);
        $prod->save();
        $prod = new \App\Models\Produto(['nome' => 'Parafina','valor' => 10, 'foto'=>'images/parafina-sf.png','descricao'=>'Bloco de parafina' , 'categoria_id'=> 2]);
        $prod->save();
        $prod = new \App\Models\Produto(['nome' => 'Quilhas performace','valor' => 350, 'foto'=>'images/quilhas-future-sf.png','descricao'=>'Quilhas modelo Future  - Encaixe facil - Resistente' , 'categoria_id'=> 3]);
        $prod->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
