<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use App\Models\Endereco;

use Illuminate\Support\Facades\Cookie;
use \Crypt;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuarioController extends Controller
{
    public function cliente_logar(Request $request)
    {
        $credentials = [
            'email' => $request['email'] ,
            'password' => $request['password'],

        ];

        /** Login com ADMIN */


        if (Auth::attempt(['login' => $request['email'],'password' =>$request['password']])){
            $id = Usuarios::where('login', $request['email'])->get();
            foreach ($id as $ids){
                $request->session()->regenerate();
                Cookie::queue('cookie_user', Crypt::encrypt($ids->id));
                Cookie::queue('cookie_name', Crypt::encrypt( $ids->nome));

                return back();
            }

        }
        else{
            return back()->with('errors','Erro');
        }
    }
     /** Função para logout */
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        /** Excluir cookie */
        Cookie::queue(Cookie::forget('cookie_user'));
        Cookie::queue(Cookie::forget('cookie_name'));

        return redirect('/');
    }

    public function alterarEndereco(Request $request){
        $insert = $request->input();
        unset($insert['_token']);

        $enderecoList = Endereco::where('usuario_id', \Auth::user()->id)->update($insert);

        //dd($request->input());
        // foreach ($enderecoList as $e){
        //     $e->cep = $request->input('cep');
        //     $e->logradouro = $request->input('endereco');
        //     $e->bairro = $request->input('bairro');
        //     $e->cidade = $request->input('cidade');
        //     $e->estado = $request->input('uf');
        //     $e->complemento = $request->input('complemento');
        //     $e->numero = $request->input('num');
        //     $e->ddd = $request->input('cddd');
        //     $e->numero = $request->input('cnumero');
        //     $e->updated_at = date('Y-m-d H:i:s');

        // }

        return back();
    }
}
