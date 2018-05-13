<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    protected $table = 'shops';													

    protected $fillable = [ 
        'id',
        'admin_id',
        'banner',
        'subtitulo',
        'link',
        'categoria',
        'imagen',
        'created_at',
        'updated_at'
    ];
}
