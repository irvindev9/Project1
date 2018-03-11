<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Inicio/inicio');
});

//Panel de Administrador
Route::get('/Administrador',function(){
    return view('PanelAdministrativo/Contenido');
});

//Sistema de Mensajes
Route::get('/Administrador/Mensajes',function(){
    return view('PanelAdministrativo/MensajesPanel');
});

//Sistema de Mensajes > Especifico
Route::get('/Administrador/Mensajes/{id}',function(){
    return view('PanelAdministrativo/Mensajes');
});

//Sistema de Cotizacion
Route::get('/Administrador/Cotizaciones',function(){
    return view('PanelAdministrativo/CotizacionesPanel');
});

//Sistema de Cotizacion > Especifico
Route::get('/Administrador/Cotizacion/{id}','Administrador@VerCotizacion');

//Sistema de Ventas
Route::get('/Administrador/Ventas',function(){
    return view('PanelAdministrativo/VentasPanel');
});

//Sistema de Ventas > Especifico
Route::get('/Administrador/Ventas/{id}',function(){
    return view('PanelAdministrativo/Venta');
});

//Sistema de Usuarios
Route::get('/Administrador/Usuarios',function(){
    return view('PanelAdministrativo/UsuariosPanel');
});

//Sistema de Usuarios > Especifico
Route::get('/Administrador/Usuario/{id}',function($id){
    $Usuario = DB::table('users')->where('id',$id)->first();
    return view('PanelAdministrativo/Usuario',['Usuario'=>$Usuario]);
});

//Sistema de correos
Route::get('/Administrador/Email',function(){
    return view('PanelAdministrativo/Email');
});

//Sistema de banners
Route::get('/Administrador/Banners',function(){
    return view('PanelAdministrativo/Banners');
});

//Sistema de promociones
Route::get('/Administrador/Promociones',function(){
    return view('PanelAdministrativo/Promociones');
});

//Panel de articulos
Route::get('/Administrador/Productos',function(){
    return view('PanelAdministrativo/PanelProductos');
});

//-------------- USER ----------------------

Route::get('/Perfil/Mensajes',function(){
    return view('/PanelUsuario/Mensajes');
});

//-------------------- BUSQUEDA -------------

//Sistema de busqueda
Route::get('/Busqueda/Articulo/{id}',function($Id){
    return view('Busqueda/Producto',['Id'=>$Id]);
});

//Sistema de busqueda / Producto
Route::get('/Busqueda/{Articulo}',function($Articulo){
    return view('Busqueda/Busqueda',['Articulo'=>$Articulo]);
});

//Formulario de Registro
Route::get('/Registro',function(){
    return view('/Registro/Registro');
});

//Forma para cotizar
Route::get('/Cotizacion', function(){
    return view('/Cotizacion/FormaCotizacion');
});


//Funciones -------------------------------------------


//Funcion para registrar usuario
Route::post('/Registro/go','Usuarios@Registro');

//Redirige si no acepta la funcion post
Route::get('/Registro/go',function(){
    return redirect('/Registro');
});

//Funcion para registrar cotizacion
Route::post('/Cotizacion/go','Usuarios@Cotizacion');

//Redirige si no acepta la funcion post
Route::get('/Cotizacion/go',function(){
    return redirect('/Cotizacion');
});

//Funcion de login
Route::post('/Login/go','Login@Login');

//Cerrar sesion
Route::get('/Close/go','Login@CloseConnection');

//Publicar productos
Route::post('/Administrador/Save/Product/go','Administrador@UploadProduct');