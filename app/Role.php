<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'role_user';

    protected $primaryKey = 'id';
    
    public $timestamps = true;
    
    protected $fillable = [
        'id',
        'role_id', 
        'user_id',
    ];

    

}
