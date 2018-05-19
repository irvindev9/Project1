<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    //
    protected $table = 'answers';													

    protected $fillable = [
        'id',
    	'commit_id',
    	'answer',
    	'id_admin',
    	'created_at',
    	'updated_at'
    ];
}
