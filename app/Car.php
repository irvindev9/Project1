<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';													

    protected $fillable = [
        'id',
    	'id_user',
    	'articulo',
    	'precio',
    	'created_at',
    	'updated_at',
    ];
}
