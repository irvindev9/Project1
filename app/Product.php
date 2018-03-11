<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';													

    protected $fillable = [
        'id',
        'admin_id',
        'articulo',
        'precio',
        'descripcionCorta',
        'descripcionLarga',
        'keywords',
        'categoria',
        'imagen',
        'agotado',
        'llave',
        'created_at',
        'updated_at'
    ];
}
