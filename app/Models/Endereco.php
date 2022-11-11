<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends RModel
{
    protected $table ="enderecos";

    protected $fillable = ['endereco', 'numero', 'cidade', 'estado', 'cep'];
} 