<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';													

    protected $fillable = ['id','user_id','articulo','descripcion', 'categoria','sitio','linksitio','created_at','updated_at'];

}
