<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    protected $table = 'progresos';

    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $fillable=[
    	'id',
        'primer',
        'segundo',
        'tercero',
        'cuarto',
        'quinto',
        'sexto',
        'septimo',
        'octavo',
        'iduser',
    ];

    public function User()
    {
    	return $this->belongsTo('App\User', 'iduser');
    }
}
