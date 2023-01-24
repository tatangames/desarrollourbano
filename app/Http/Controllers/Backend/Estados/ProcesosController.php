<?php

namespace App\Http\Controllers\Backend\Estados;

use App\Http\Controllers\Controller;
use App\Models\Procesos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProcesosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        return view('backend.admin.configuracion.procesos.vistaprocesos');
    }

    public function indexTabla(){

        $lista = Procesos::orderBy('nombre', 'ASC')->get();

        return view('backend.admin.configuracion.procesos.tablaprocesos', compact('lista'));
    }

    public function informacionProceso(Request $request){
        $regla = array(
            'id' => 'required',
        );

        $validar = Validator::make($request->all(), $regla);

        if ($validar->fails()){ return ['success' => 0];}

        if($lista = Procesos::where('id', $request->id)->first()){

            return ['success' => 1, 'info' => $lista];
        }else{
            return ['success' => 2];
        }
    }

    // editar una cuenta
    public function editarProceso(Request $request){

        $regla = array(
            'id' => 'required',
            'nombre' => 'required',
        );

        $validar = Validator::make($request->all(), $regla);

        if ($validar->fails()){ return ['success' => 0];}

        if(Procesos::where('id', $request->id)->first()){

            Procesos::where('id', $request->id)->update([
                'nombre' => $request->nombre,
            ]);

            return ['success' => 1];
        }else{
            return ['success' => 2];
        }
    }


}
