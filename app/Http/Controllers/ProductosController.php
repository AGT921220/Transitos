<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $productos = Product::
        join('users','users.id','=','products.id_user')
        ->select('users.name as user','products.*')
        ->get();
        return view('dashboard.contenido.productos.lista',compact('productos'));

    }

    public function nuevo_producto(){
        return view('dashboard.contenido.productos.nuevo');
    }

    public function guardar_producto(Request $request){

        if( isset($request->imagen) ){
            $file = $request->imagen;
              $filename = time().trim($file->getClientOriginalName());
              $file->move(public_path().'/images/productos',$filename);
              $foto = 'images/productos/'.$filename;
      }else{
        return back()->with('error','Debe agregar imágen');
      }


        Product::create([
            'name' => $request->name,
            'description' => $request->descripcion,
            'precio' => $request->precio,
            'cantidad'=>$request->cantidad,
            'imagen'=>$foto,
            'id_user'=>auth()->user()->id,
        ]);

        return back()->with('success','Producto Agregado');

    }
}
