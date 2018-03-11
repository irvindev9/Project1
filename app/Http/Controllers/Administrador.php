<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Quotation;
use App\Product;

class Administrador extends Controller
{
    public function VerCotizacion($idCotizacion){
        $Cotizacion = Quotation::where('id',$idCotizacion)->first();
        $Cotizacion->visto = 'Si';
        $Cotizacion->save();
        return view('PanelAdministrativo/Cotizacion',['idCotizacion'=> $idCotizacion]);
    }

    public function UploadProduct(Request $request){
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
}
