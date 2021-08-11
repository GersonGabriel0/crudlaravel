<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //Definindo os atributos finais
    protected $fillable = ['nome','genero'];
}
