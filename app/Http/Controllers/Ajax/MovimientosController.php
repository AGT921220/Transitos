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
        info('ACTUALIZAR HORAS');
        $movimiento = Movimiento::where('REGMOVTRAF',$request->id_mov)->first();

        foreach($request->horas as $key=>$dato){
            $movimiento->$key = $dato;
        }

        info($movimiento);

        if($movimiento->save()){
            info('si');
            return response()->json(['success' => $request->horas]);
        }else{
            return response()->json(['error' => $request->horas]);
            info('no');
        }




    }


    public function ajax_actualizar_tabla(Request $request){
        $date_start = $request->date_start;
        $date_end = $request->date_end;

        $movimientos = Movimiento::leftJoin('lista_esatus','lista_esatus.NUMESTATUS','=','movhojtrabajo.ESTATUS')
        ->select(
        //Tabla Principal
        'lista_esatus.DESCRIPCION',
        'movhojtrabajo.REGMOVTRAF',
        'lista_esatus.DESCRIPCION',
        'movhojtrabajo.FECHA',
        'movhojtrabajo.NOCARTAPORTE',
        'movhojtrabajo.CARTAPORTEFISICA',
        'cattiposcruces.TIPOCRUCES',
        'movhojtrabajo.IDCLIENTE',
        'catclientes.NOMBRECLIENTE',
        'catunidades.numerounidad',
        'rutasctes.ruta',
        'remitorigen.REMITENTE',
        'destinoentrega.DESTINO',
        'catchoferes.NOMBRECHOFER',
        'movhojtrabajo.NOCAJA',
        'movhojtrabajo.COMISIONMOV',
        'movhojtrabajo.HRALLEGADACTE',
        'movhojtrabajo.HRACARGA',
        'movhojtrabajo.HRASALIDACTE',
        'movhojtrabajo.HRAENTREGADOCTOS',
        'movhojtrabajo.HRAINSPECCION',
        'movhojtrabajo.HRALLEGADAFILA',
        'movhojtrabajo.HRAMODULOMEX','movhojtrabajo.HRAMODULOMEXSALIDA',
        'movhojtrabajo.HRAMODULOUSA','movhojtrabajo.HRAMODULOUSASALIDA',
        'movhojtrabajo.HRAENTREGACTE',
        'movhojtrabajo.SELLO1','movhojtrabajo.SELLO2','movhojtrabajo.SELLO3',
        'movhojtrabajo.compartido'
        )
        ->leftJoin('cattiposcruces','cattiposcruces.IDREGCRUCE','=','movhojtrabajo.IDTIPOCRUCE')
        ->leftJoin('catclientes','catclientes.REGCLIENTE','=','movhojtrabajo.IDCLIENTE')
        ->leftJoin('catunidades','catunidades.idregunidad','=','movhojtrabajo.IDUNIDAD')
        ->leftJoin('rutasctes','rutasctes.IDRUTA','=','movhojtrabajo.IDRUTA')
        ->leftJoin('remitorigen','remitorigen.IDREMITENTE','=','movhojtrabajo.IDREMITENTE')
        ->leftJoin('destinoentrega','destinoentrega.IDDESTINO','=','movhojtrabajo.IDDESTINO')
        ->leftJoin('catchoferes','catchoferes.REGCHOFER','=','movhojtrabajo.idchofer')
        //->where('DESCRIPCION','!=','TERMINADO')
        ->whereBetween('movhojtrabajo.fecha', [$date_start, $date_end])
       // ->limit(3500)
        ->get();
        $response = [];

foreach($movimientos as $item){
    if($item->DESCRIPCION!='TERMINADO'){
        $item->ACCION='<button type="button" class="actualizar_horas btn btn btn-warning" data-id="'.$item->REGMOVTRAF.'">Actualizar</button>';
    }else{
        $item->ACCION='';
    }

    $item->CARTAPORTEFISICA = ($item->CARTAPORTEFISICA) ? 'Si': 'No';
    array_push($response,[$item->DESCRIPCION,$item->REGMOVTRAF,$item->DESCRIPCION,$item->FECHA,$item->NOCARTAPORTE,$item->TIPOCRUCES,
    $item->NOMBRECLIENTE,$item->numerounidad,$item->ruta,$item->REMITENTE ,$item->DESTINO,$item->NOMBRECHOFER]


);
}
$res=$response;


        return response()->json(['data' => $movimientos]);

    }

}
