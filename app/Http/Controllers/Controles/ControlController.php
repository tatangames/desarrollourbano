<?php

namespace App\Http\Controllers\Controles;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ControlController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // verifica que usuario inicio sesión y redirecciona a su vista según ROL
    public function indexRedireccionamiento(){

        $user = Auth::user();

        // ADMINISTRADOR SISTEMA
        if($user->hasRole('admin')){
            $ruta = 'admin.roles.index';
        }

        // ROL USUARIO SISTEMA
        else  if($user->hasRole('usuario')){
            $ruta = 'admin.estadisticas.index';
        }

        else{
            // no tiene ningun permiso de vista, redirigir a pantalla sin permisos
            $ruta = 'no.permisos.index';
        }

        $titulo = "Alcaldía de Metapán";

        return view('backend.index', compact( 'ruta', 'user', 'titulo'));
    }

    // redirecciona a vista sin permisos
    public function indexSinPermiso(){
        return view('errors.403');
    }
}
