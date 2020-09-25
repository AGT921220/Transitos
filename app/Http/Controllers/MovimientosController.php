<?php

namespace App\Http\Controllers;
use App\Movimiento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovimientosController extends Controller
{
    public function ver_movimientos(){

  $date_start = date('Y-m-d');
  $date_end=$date_start;

  $date_start='2020-07-01';
 // $date_end='2020-07-01';

  info(date('Y-m-d'));

        $movimientos = Movimiento::leftJoin('lista_esatus','lista_esatus.NUMESTATUS','=','movhojtrabajo.ESTATUS')
        ->select(
        //Tabla Principal
        'movhojtrabajo.REGMOVTRAF','movhojtrabajo.FECHA','movhojtrabajo.NOCARTAPORTE','movhojtrabajo.CARTAPORTEFISICA','movhojtrabajo.IDCLIENTE','movhojtrabajo.IDUNIDAD',
        'movhojtrabajo.IDRUTA','movhojtrabajo.IDREMITENTE','movhojtrabajo.IDDESTINO','movhojtrabajo.IDCHOFER','movhojtrabajo.NOCAJA','movhojtrabajo.COMISIONMOV',
        'movhojtrabajo.HRALLEGADACTE','movhojtrabajo.HRACARGA','movhojtrabajo.HRASALIDACTE','movhojtrabajo.HRAENTREGADOCTOS','movhojtrabajo.HRAINSPECCION','movhojtrabajo.HRALLEGADAFILA',
        'movhojtrabajo.HRAMODULOMEX','movhojtrabajo.HRAMODULOMEXSALIDA','movhojtrabajo.HRAMODULOUSA','movhojtrabajo.HRAMODULOUSASALIDA','movhojtrabajo.HRAMODULOUSASALIDA','movhojtrabajo.HRAENTREGACTE',
        'movhojtrabajo.SELLO1','movhojtrabajo.SELLO2','movhojtrabajo.SELLO3',
        //lista_esatus
        'lista_esatus.DESCRIPCION',
        //cattiposcruces
        'cattiposcruces.IDREGCRUCE','cattiposcruces.TIPOCRUCES',
        //catclientes
        'catclientes.NOMBRECLIENTE','catclientes.NUMEROCLIENTE',
        //catunidades
        'catunidades.numerounidad',
        //rutasctes
        'rutasctes.ruta',
        //remitorigen
        'remitorigen.REMITENTE',
        //destinoentrega
        'destinoentrega.DESTINO',
        //catchoferes
        'catchoferes.NOMBRECHOFER'
        )
        ->leftJoin('cattiposcruces','cattiposcruces.IDREGCRUCE','=','movhojtrabajo.IDTIPOCRUCE')
        ->leftJoin('catclientes','catclientes.NUMEROCLIENTE','=','movhojtrabajo.IDCLIENTE')
        ->leftJoin('catunidades','catunidades.idregunidad','=','movhojtrabajo.IDUNIDAD')
        ->leftJoin('rutasctes','rutasctes.IDRUTA','=','movhojtrabajo.IDRUTA')
        ->leftJoin('remitorigen','remitorigen.IDREMITENTE','=','movhojtrabajo.IDREMITENTE')
        ->leftJoin('destinoentrega','destinoentrega.IDDESTINO','=','movhojtrabajo.IDDESTINO')

        ->leftJoin('catchoferes','catchoferes.REGCHOFER','=','movhojtrabajo.idchofer')
            ->where('DESCRIPCION','!=','TERMINADO')
        //->whereBetween('movhojtrabajo.fecha', [$date_start, $date_end])

        //->get();  return count($movimientos);


        ->limit(350)
        ->get();


        return view('dashboard.contenido.movimientos.lista',compact('movimientos'));
    }
    public function agregar_movimiento(){

    }
}
