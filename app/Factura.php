<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'idmatricula',
        'numero',
        'nombre',
        'apellido',
        'cedula',
        'celular',
        'direccion',
        'fecha',
        'compra1',
        'compra2',
        'subtotal',
        'total',
    ];

    public function Matricula()
    {
        return $this->belongsTo('App\Matricula', 'idmatricula');
    }
}
