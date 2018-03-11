<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Quotation;


class Usuarios extends Controller
{
    public function Registro(Request $request){
        $user= new User();
        $user->name= $request['name'];
        $user->lastname= $request['lastname'];
        $user->email= $request['email'];
        $pass = sha1('TeLoCompro'.$request['pass'].'TeLoEnvio');
        $user->pass= $pass;
        $user->tel= $request['tel'];
        $user->tipo= 'Cliente';
        $user->remember_token = $request['_token'];
        $user->save();

        return redirect('/');
    }

    public function Cotizacion(Request $request){
        $quotation= new Quotation();
        $quotation->user_id= $request['id_usuario'];
        $quotation->articulo= $request['articulo'];
        $quotation->descripcion= $request['descripcion'];
        $quotation->categoria= $request['categoria'];
        $quotation->sitio= $request['sitio'];
        $quotation->linksitio = $request['linksitio'];
        $quotation->visto = 'No';
        $quotation->save();

        return redirect('/Cotizacion?Ok=success');
    }
}
