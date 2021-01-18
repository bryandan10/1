<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'numero',
        'capacidad',
        'ubicacion',
        'estado',
    ];
}
