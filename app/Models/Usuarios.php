<?php

namespace App\Models;


class Usuarios extends RModel
{
    protected $table = 'usuarios';
    protected $fillable = ['login','nome','password','cpf','email'];
}
