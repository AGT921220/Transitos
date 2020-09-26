<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Movimiento;
use Illuminate\Http\Request;

class MovimientosController extends Controller
{
    public function ajax_cargar_horas(Request $request){


        $movimiento = Movimiento::where('REGMOVTRAF',$request->id)->first();
        return response()->json(['success' => $movimiento]);
    }

    public function ajax_actualizar_horas(Request $request){
        return response()->json(['success' => $request->horas]);

    }
}
