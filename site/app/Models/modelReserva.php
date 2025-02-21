<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class modelSite extends Model
{
    use HasFactory;//fatoração - dividir
    protected $table = 'reserva'; //nome da tabela
}//Coloco APENAS a tabela do banco de dados
