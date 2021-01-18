<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profe extends Model
{
    protected $table = 'profes';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'celular',
        'estado',
    ];
}
