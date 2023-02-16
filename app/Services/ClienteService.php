<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;

class ClienteService
{
    public function save_clienteDb($data){

        try{
            $exists_login = Usuarios::where('login', $data['login'])->first();
            $exists_cpf = Usuarios::where('cpf', $data['cpf'])->first();

            if ($exists_login){
                return ['status' => 'error_exists_login','erro'=>'Login já cadastrado'];
            }
            if ($exists_cpf){
                return ['status' => 'error_exists_cpf','erro'=>'CPF já cadastrado'];
            }

            Usuarios::create($data);


            return ['status' => 'success','success'=>'OK'];

        }catch(\Throwable $e){

            return ['status' => 'error','erro'=>'Algo inesperado aconteceu'];

        }



    }

}
