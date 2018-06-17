<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Quotation;
use App\Mensaje;
use App\pay;
use App\comments;


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

        Mail::send('emails.cotizacion',$request->all(),function($msj) use ($request){
            $msj->from('cotizaciones@telocomproteloenvio.com', 'Te lo compro Te lo envio');
            $msj->subject('Nueva cotizacion');
            $msj->to('rojagorra@gmail.com');
        });

        return redirect('/Cotizacion?Ok=success');
    }

    public function NewMessage(Request $request){
        $Mensaje = new Mensaje();
        $Mensaje->mensaje = $request->newMessage;
        $Mensaje->visto = 'No';
        $Mensaje->id_usuario = session()->get('id');
        $Mensaje->save();

        return redirect('/Perfil/Mensajes');
    }

    public function UpdateProfile(Request $request){
        $Update = User::where('id',session()->get('id'))->first();
        $Update->name = $request->name;
        $Update->lastname = $request->lastname;

        if(isset($request->pass)){
            $Newpass = sha1('TeLoCompro'.$request->pass.'TeLoEnvio');
            $Update->pass = $Newpass;
        }
        if(isset($request->tel)){
            $Update->tel = $request->tel;
        }
        $Update->save();

        return redirect('/Perfil');
    }

    public function Pago($llave, $id){
        $Check = DB::table('products')->where('id',$id)->where('llave',$llave)->first();

        if(count($Check) == 1 && session()->has('id')){
            $pago = new pay();
            $pago->articulo = $Check->articulo;
            $pago->id_usuario = session()->get('id');
            $pago->id_articulo = $id;
            $pago->estado = 'Procesando';
            $pago->save();

            return redirect('/Profile');
        }

        return redirect('/');
    }

    public function Comentario($Articulo, Request $request){
        if(session()->has('id')){
            $commit = new comments();
            $commit->user_id = session()->get('id');
            $commit->commit = $request->commit;
            $commit->articulo = $Articulo;
            $commit->save();

            return redirect('/Busqueda/Articulo/'.$Articulo);
        }

        return redirect('/');
    }
}
