<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'idnivel',
        'iduser',
        'idlibro',
        'estado',
    ];

    public function Nivel()
    {
    	return $this->belongsTo('App\Nivele', 'idnivel');
    }

    public function User()
    {
    	return $this->belongsTo('App\User', 'iduser');
    }

    public function Libro()
    {
        return $this->belongsTo('App\Libro', 'idlibro');
    }
}
