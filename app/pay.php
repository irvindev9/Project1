<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    //
    protected $table = 'pays';													

    protected $fillable = [ 
        'id',
    	'articulo',
    	'id_usuario',
    	'id_articulo',
    	'estado',
    	'created_at',
    	'updated_at'
    ];
}
