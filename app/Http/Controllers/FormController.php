<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use App\Mail\MailSender;
use App\Models\Dados;


class FormController extends Controller

{
    public $data;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function messages()
    {
    return [
        'digits_between' => 'Digite :attribute um numero valido',
    ];
    }
    public function index()
    {
        return view('paginas.sobre');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|digits_between:0,9',
            'email' => 'required | email',
        ]);

        $data = array();

        if ($request->input('nome') != "") $data['nome']=$request->input('nome');
        if ($request->input('numero') != "") $data['numero']=$request->input('numero');
        if ($request->input('endereco') != "") $data['endereco']=$request->input('endereco');
        if ($request->input('email') != "") $data['email']=$request->input('email');
        if ($request->input('message') != "") $data['message']=$request->input('message');


        Mail::to('bugssurf@gmail.com')
                ->send(new MailSender($data));

        $insert =[
            'nome' => $data['nome'],
            'cel' => $data['numero'],
            'end' => $data['endereco'],
            'email' => $data['email'],
            'msg' => $data['message']
        ];
        Dados::create($insert);

        return back()
              ->with('success', 'Solicitação enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
