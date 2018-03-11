<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Login extends Controller
{
    public function Login(Request $request){
        $Pass = sha1('TeLoCompro'.$request['pass'].'TeLoEnvio');
        $Datos = DB::table('users')->where('email',$request['correo'])->where('pass',$Pass)->count();

        if($Datos > 0){
            $Datos = DB::table('users')->where('email',$request['correo'])->where('pass',$Pass)->first();

            session()->flush();

            session()->put('id', $Datos->id);

            session()->put('tipoCuenta',$Datos->tipo);

            session()->put('name',$Datos->name);

            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function CloseConnection(){
        session()->flush();

        return redirect('/');
    }
}
