<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use App\Services\ClienteService;

class ClienteController extends Controller
{

    public function cadastrar()
    {
       return view('paginas.cadastrar');
    }
    public function cliente_cadastrar(Request $request){

        $data = array(
            'nome' => $request['nome'],
            'login' => $request['email'],
            'numero' => $request['numero'],
            'cpf' => $request['cpf'],
            'password' => Hash::make($request['password']),
        );

        $end = array(
           'logradouro'=>$request['rua'],
           'complemento'=>$request['complemento'],
           'numero'=>$request['numero'],
           'cidade'=>$request['cidade'],
           'estado'=>$request['estado'],
           'cep'=>$request['cep']
        );

        // $validator = Validator::make($request->all(), [
        //     'nome' => 'required',
        //     'cpf' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect('cadastrar')
        //                 ->withErrors($validator);
        // }
        $clienteService = new ClienteService();
        $result = $clienteService->save_clienteDb($data);

        if ($result['status'] != 'success'){
            return back()->withErrors(['error' => $result['erro']]);

        }


        return back()->with('success','success');



    }

}
