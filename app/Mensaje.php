<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'messages';													

    protected $fillable = [	
        'id',
    	'mensaje',
    	'visto',
    	'id_usuario',
    	'id_admin',
    	'created_at',
    	'updated_at'
    ];
}
