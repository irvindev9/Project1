<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Quotation;
use App\Product;
use App\Mensaje;
use App\shops;
use App\Car;
use App\answers;
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

    public function Respuesta($id_commit,Request $request){
        if(session()->get('tipoCuenta') != 'Admin'){
            return redirect('/');
        }

        $answer = new answers();
        $answer->commit_id = $id_commit;
        $answer->answer = $request->answer;
        $answer->id_admin = session()->get('id');
        $answer->save();

        $Articulo = DB::table('comments')->where('id',$id_commit)->first();

        return redirect('/Busqueda/Articulo/'.$Articulo->articulo);
    }

    public function DeleteCommit($id_commit){
        if(session()->get('tipoCuenta') != 'Admin'){
            return redirect('/');
        }

        $GuardarArticulo = DB::table('comments')->where('id',$id_commit)->first();

        DB::table('answers')->where('commit_id',$id_commit)->delete();
        DB::table('comments')->where('id',$id_commit)->delete();

        return redirect('/Busqueda/Articulo/'.$GuardarArticulo->articulo);
    }

    public function Procesarpago(Request $request){
        include(base_path() . '/vendor/conekta/conekta-php/lib/Conekta.php');
        //require_once("/vendor/conekta/conekta-php/lib/Conekta.php");
        \Conekta\Conekta::setApiKey("key_ZoHZ7ZvhmLe5YepszbLSrg");
        \Conekta\Conekta::setApiVersion("2.0.0");

        //Conekta::setApiKey("key_ZoHZ7ZvhmLe5YepszbLSrg");

        try{
            $order = \Conekta\Order::create(
              array(
                "line_items" => array(
                  array(
                    "name" => "Tacos",
                    "unit_price" => 1000,
                    "quantity" => 12
                  )//first line_item
                ), //line_items
                "shipping_lines" => array(
                  array(
                    "amount" => 1500,
                    "carrier" => "FEDEX"
                  )
                ), //shipping_lines - physical goods only
                "currency" => "MXN",
                "customer_info" => array(
                  "name" => "Fulanito Pérez",
                  "email" => "fulanito@conekta.com",
                  "phone" => "+5218181818181"
                ), //customer_info
                "shipping_contact" => array(
                  "address" => array(
                    "street1" => "Calle 123, int 2",
                    "postal_code" => "06100",
                    "country" => "MX"
                  )//address
                ), //shipping_contact - required only for physical goods
                "charges" => array(
                    array(
                        "payment_method" => array(
                          "type" => "oxxo_cash"
                        )//payment_method
                    ) //first charge
                ) //charges
              )//order
            );
          } catch (\Conekta\ParameterValidationError $error){
            return $error->getMessage();
          } catch (\Conekta\Handler $error){
            return $error->getMessage();
          }

          $order = json_encode($order);
          $order = json_decode($order);

          return $order->charges;
          
    }
}
