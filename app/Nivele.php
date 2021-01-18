<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivele extends Model
{
    protected $table = 'niveles';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'nivel',
        'periodo',
        'modo',
        'idprofesor',
        'idaula',
        'idlibro',
        'fechainicio',
        'fechafin',
        'desde',
        'hasta',
        'cupos',
        'costo',
        'estado',
    ];

    public function Profesor()
    {
    	return $this->belongsTo('App\Profe', 'idprofesor');
    }

    public function Aula()
    {
    	return $this->belongsTo('App\Aula', 'idaula');
    }

    public function Libro()
    {
    	return $this->belongsTo('App\Libro', 'idlibro');
    }
}
