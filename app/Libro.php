<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'nombre',
        'nivel',
        'modo',
        'costo',
        'estado',
    ];
}
