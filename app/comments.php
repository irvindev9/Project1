<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    protected $table = 'comments';													

    protected $fillable = [
        'id',
    	'user_id',
    	'commit',
    	'articulo',
    	'visto',
    	'created_at',
    	'updated_at',
    ];
}
