<?php

namespace App\Http\Controllers\Backend\Estadisticas;

use App\Http\Controllers\Controller;
use App\Models\Expediente;
use App\Models\Procesos;
use App\Models\Resoluciones;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $date = Carbon::now('America/El_Salvador');
        $date = $date->format('Y');

        // expediente pendiente de resolucion del anio actual
        $expediente = Expediente::where('id_estados', 1)
            ->whereYear('fecha', $date)
            ->count();

            // ingresos totales del presente anio
            $lista = Procesos::orderBy('id', 'ASC')->get();

            foreach ($lista as $pro) {

                // total expediente por cada proceso
                $toexp = Expediente::whereYear('fecha', $date) // presente anio
                    ->where('id_procesos', $pro->id)
                    ->get();

                $monto = 0;

                // recorrer cada expediente para ver si tiene resolucion
                foreach($toexp as $t){
                    $tores = Resoluciones::where('id_exp', $t->id)->get();

                    $m = collect($tores)->sum('monto');
                    $monto = $monto + $m;
                }
                $pro->monto = $monto;
            }

            $totalMonto = collect($lista)->sum('monto');

            // resoluciones sin entregar
            $resSinEntregar = DB::table('expediente AS e')
                ->join('resoluciones AS r', 'r.id_exp','=','e.id')
                ->where('e.id_estados', 2) // resolucion generada pero no entregada
                ->count();

        return view('backend.admin.estadisticas.vistaestadisticas', compact(['expediente', 'totalMonto', 'resSinEntregar']));
    }


}
