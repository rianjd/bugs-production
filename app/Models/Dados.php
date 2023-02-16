<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dados extends Model
{
    use HasFactory;
    protected $table = 'bugs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'cel',
        'end',
        'email',
        'msg',
    ];

}
