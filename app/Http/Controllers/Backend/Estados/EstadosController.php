<?php

namespace App\Http\Controllers\Backend\Estados;

use App\Http\Controllers\Controller;
use App\Models\Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.admin.configuracion.estados.vistaestados');
    }

    public function indexTabla(){

        $lista = Estados::orderBy('nombre', 'ASC')->get();

        return view('backend.admin.configuracion.estados.tablaestados', compact('lista'));
    }


}
