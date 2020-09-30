<?php

namespace App\Http\Controllers;

use App\Chofer;
use App\Cliente;
use App\ComisionTabla;
use App\Cruce;
use App\Destino;
use App\Estatus;
use App\Movimiento;
use App\Remitente;
use App\Ruta;
use App\Subcontratado;
use App\Unidad;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovimientosController extends Controller
{
    public function ver_movimientos(){

  $date_start = date('Y-m-d');
  $date_end=$date_start;

  $date_start='2020-07-01';
 // $date_end='2020-07-01';

//  info(date('Y-m-d'));
/*
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
        ->leftJoin('catclientes','catclientes.NUMEROCLIENTE','=','movhojtrabajo.REGCLIENTE')
        ->leftJoin('catunidades','catunidades.idregunidad','=','movhojtrabajo.IDUNIDAD')
        ->leftJoin('rutasctes','rutasctes.IDRUTA','=','movhojtrabajo.IDRUTA')
        ->leftJoin('remitorigen','remitorigen.IDREMITENTE','=','movhojtrabajo.IDREMITENTE')
        ->leftJoin('destinoentrega','destinoentrega.IDDESTINO','=','movhojtrabajo.IDDESTINO')

        ->leftJoin('catchoferes','catchoferes.REGCHOFER','=','movhojtrabajo.idchofer')
            ->where('DESCRIPCION','!=','TERMINADO')
        //->whereBetween('movhojtrabajo.fecha', [$date_start, $date_end])
        //->get();  return count($movimientos);
        ->limit(3)
        ->get();
*/

        return view('dashboard.contenido.movimientos.lista');
    }
    public function agregar_movimiento(){

        $estatus = Estatus::all();
        $cruces = Cruce::all();
        $clientes = Cliente::all();
        $rutas = Ruta::all();
        $remitentes = Remitente::all();
        $destinos = Destino::all();
        $unidades = Unidad::all();
        $choferes = Chofer::all();
        $subcontratados = Subcontratado::all();


        return view('dashboard.contenido.movimientos.agregar',compact('estatus','cruces','clientes','rutas','remitentes','destinos','unidades','choferes','subcontratados'));

    }

    public function guardar_movimiento(Request $request){


//        dd($request->all());
        $last_mov = Movimiento::orderBy('REGMOVTRAF','desc')
        ->limit(1)
        ->first();

        $new_movimiento = new Movimiento();

        $new_mov_id = $last_mov->REGMOVTRAF+1;
        $new_movimiento->REGMOVTRAF =$new_mov_id;
        $new_movimiento->COMISIONMOV = $request->comisionmov;
        $new_movimiento->ESTATUS = $request->estatus;
        $new_movimiento->FECHA = $request->fecha;
        $new_movimiento->IDTIPOCRUCE = $request->cruce;
        $new_movimiento->IDCLIENTE = $request->cliente;
        $new_movimiento->IDRUTA = $request->ruta;
        $new_movimiento->IDREMITENTE = $request->remitente;
        $new_movimiento->IDDESTINO = $request->destino;
        $new_movimiento->IDUNIDAD = $request->unidad;
        $new_movimiento->IDCHOFER = $request->chofer;
        if(isset($request->chofer_compartido)){
            $new_movimiento->COMPARTIDO = 1;
        }else{
            $new_movimiento->COMPARTIDO = 0;
        }
        if(isset($request->chofer_subcontratado)){
            $new_movimiento->IDSUBCONTRATADO = $request->chofer_subcontratado;
        }else{
            $new_movimiento->IDSUBCONTRATADO = 0;
        }
        $new_movimiento->NOCARTAPORTE = $request->carta_porte;
        $new_movimiento->NOCAJA = $request->no_caja;
        $new_movimiento->NOPEDIMENTO = $request->no_pedimento;
        $new_movimiento->NOFACTURA = $request->no_factura;
        $new_movimiento->SELLO1 = $request->sello1;
        $new_movimiento->SELLO2 = $request->sello2;
        $new_movimiento->SELLO3 = $request->sello3;
        $new_movimiento->INBOND = $request->bond;
        //HORAS MOVIMIENTO
/*        $new_movimiento->HRALLEGADACTE = $request->HRALLEGADACTE;
        $new_movimiento->HRACARGA = $request->HRACARGA;
        $new_movimiento->HRASALIDACTE = $request->HRASALIDACTE;
        $new_movimiento->HRAENTREGADOCTOS = $request->HRAENTREGADOCTOS;
        $new_movimiento->HRALLEGADAFILA = $request->HRALLEGADAFILA;
        $new_movimiento->HRAINSPECCION = $request->HRAINSPECCION;
        $new_movimiento->HRAMODULOMEX = $request->HRAMODULOMEX;
        $new_movimiento->HRAMODULOMEXSALIDA = $request->HRAMODULOMEXSALIDA;
        $new_movimiento->HRAMODULOUSA = $request->HRAMODULOUSA;
        $new_movimiento->HRAMODULOUSASALIDA = $request->HRAMODULOUSASALIDA;
        $new_movimiento->HRAENTREGACTE = $request->HRAENTREGACTE;
*/
        $new_movimiento->save();

        $ruta = Ruta::where('IDRUTA',$request->ruta)->first();
        $comision = ($ruta->COMISION *$request->comisionmov )/100;

        $new_comision = new ComisionTabla();
        $new_comision->REGMOVADTRAF =$new_mov_id;
        $new_comision->COMISIONMOV = $comision;
        $new_comision->ESTATUS = $request->estatus;
        $new_comision->FECHA = $request->fecha;
        $new_comision->IDTIPOCRUCE = $request->cruce;
        $new_comision->IDCLIENTE = $request->cliente;
        $new_comision->IDRUTA = $request->ruta;
        $new_comision->IDREMITENTE = $request->remitente;
        $new_comision->IDDESTINO = $request->destino;
        $new_comision->IDUNIDAD = $request->unidad;
        $new_comision->PORCENTCOMISION=$request->comisionmov;
        if(isset($request->chofer_compartido)){
            $new_comision->IDCHOFER = $request->chofer_compartido;
        }else{
            $new_comision->COMPARTIDO = 0;
        }
        $new_comision->NOCAJA = $request->no_caja;
        $new_comision->save();

        return back()->with('success','Movimiento Agregado.');



    }
}
