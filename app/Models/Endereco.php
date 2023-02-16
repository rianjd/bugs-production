<?php

namespace App\Models;

class Endereco extends RModel
{
    protected $table = 'enderecos';
    protected $fillable = ['logradouro','complemento','numero','cidade','estado','cep'];
}
