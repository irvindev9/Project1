<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Quotation;
use App\Product;
use App\Mensaje;
use App\shops;
use App\Car;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Administrador extends Controller
{
    public function VerCotizacion($idCotizacion){
        if(session()->get('tipoCuenta') != 'Admin'){
            //Si no es administrador se redirige al inicio
            return redirect('/');
        }
    
        $Cotizacion = Quotation::where('id',$idCotizacion)->first();
        $Cotizacion->visto = 'Si';
        $Cotizacion->save();
        return view('PanelAdministrativo/Cotizacion',['idCotizacion'=> $idCotizacion]);
    }

    public function VerMensaje($id_user){
        if(session()->get('tipoCuenta') != 'Admin'){
            //Si no es administrador se redirige al inicio
            return redirect('/');
        }
    
        $MensajeCliente = Mensaje::where('id_usuario',$id_user)->update(['visto' => 'Si']);

        return view('PanelAdministrativo/Mensajes',['id_user' => $id_user]);
    }

    public function UploadProduct(Request $request){
        if(session()->get('tipoCuenta') != 'Admin'){
            //Si no es administrador se redirige al inicio
            return redirect('/');
        }
    
        if ( isset( $_FILES ) && isset( $_FILES['myfile'] ) && !empty( $_FILES['myfile']['name'] && !empty($_FILES['myfile']['tmp_name']) ) ) {
            
            if ( ! is_uploaded_file( $_FILES['myfile']['tmp_name'] ) ) {
                return "Error: El fichero encontrado no fue procesado por la subida correctamente";
            } 

            $destination = public_path('tienda_img');
                    
            if ( is_file($destination) ) {
                return 'Ya existe un fichero con ese nombre';        
            }

            $source = time().'.'.$request->myfile->getClientOriginalExtension();
            $request->myfile->move(public_path('tienda_img'), $source);
            
            $Producto = new Product();
            $Producto->admin_id = session()->get('id');
            $Producto->articulo = $request->articulo;
            $Producto->precio = $request->precio;
            $Producto->descripcionCorta = $request->descripcionC;
            $Producto->descripcionLarga = $request->descripcionL;
            $Producto->keywords = $request->articulo.' '.$request->categoria.' '.$request->keywords;
            $Producto->categoria = $request->categoria;
            $Producto->imagen = $source;
            $Producto->agotado = 'No';
            $encryptedKey = sha1('TeLoCompro'.$request->articulo.'TeLoEnvio'.time());
            $Producto->llave = $encryptedKey;
            $Producto->save();
            return redirect('/Administrador?Publicado='.$request->articulo);

            
        }
    }

    public function NewMessage(Request $request, $user_id){
        if(session()->get('tipoCuenta') != 'Admin'){
            //Si no es administrador se redirige al inicio
            return redirect('/');
        }

        $Mensaje = new Mensaje();
        $Mensaje->mensaje = $request->newMessage;
        $Mensaje->visto = 'Si';
        $Mensaje->id_usuario = $user_id;
        $Mensaje->id_admin = session()->get('id');
        $Mensaje->save();

        return redirect('/Administrador/Mensajes/'.$user_id);

    }

    public function ChangeUser(Request $request){
        if(session()->get('tipoCuenta') != 'Admin'){
            return redirect('/');
        }

        $Cambio = User::where('id',$request->id)->first();

        if(count($Cambio) == 1){
            $Cambio->name = $request->name;
            $Cambio->lastname = $request->lastname;
            $Cambio->email = $request->email;
            $Cambio->tel = $request->tel;

            if($request->newpass != ''){
                $Cambio->pass = sha1('TeLoCompro'.$request->newpass.'TeLoEnvio');
            }

            $Cambio->save();

            return redirect('/Administrador/Usuario/'.$request->id);
        }

    }

    public function DropProduct($id){
        if(session()->get('tipoCuenta') != 'Admin'){
            return redirect('/');
        }

        DB::table('products')->where('id',$id)->delete();

        return redirect('/Administrador/Productos');        
    }

    public function UpBanner(Request $request){
        if(session()->get('tipoCuenta') != 'Admin'){
            //Si no es administrador se redirige al inicio
            return redirect('/');
        }
    
        if ( isset( $_FILES ) && isset( $_FILES['myfile'] ) && !empty( $_FILES['myfile']['name'] && !empty($_FILES['myfile']['tmp_name']) ) ) {
            
            if ( ! is_uploaded_file( $_FILES['myfile']['tmp_name'] ) ) {
                return "Error: El fichero encontrado no fue procesado por la subida correctamente";
            } 

            $destination = public_path('tiendas');
                    
            if ( is_file($destination) ) {
                return 'Ya existe un fichero con ese nombre';        
            }

            $source = 'tienda'.time().'.'.$request->myfile->getClientOriginalExtension();
            $request->myfile->move(public_path('tiendas'), $source);

            $Shop = new shops();
            $Shop->admin_id = session()->get('id');
            $Shop->banner = $request->titulo;
            $Shop->subtitulo = $request->subtitulo;
            $Shop->link = $request->link;
            $Shop->categoria = $request->categoria;
            $Shop->imagen = $source;
            $Shop->save();

            return redirect('/Administrador/Banners?Publicado='.$request->articulo);

            
        }
    }

    public function AddItem($idItem){
        if(session()->has('id')){
            $Item = new Car();
            $Item->id_user = session()->get('id');
            $DatosItem = Product::where('id',$idItem)->first();
            $Item->articulo = $DatosItem->articulo;
            $Item->precio = $DatosItem->precio;
            $Item->save();

            return redirect('/Carrito');
        }

        return redirect('/');
    }
}
