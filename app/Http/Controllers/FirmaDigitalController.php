<?php

namespace App\Http\Controllers;

use App\FirmaDigital;
use Illuminate\Http\Request;

class FirmaDigitalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $firmas = FirmaDigital::
        join('users','users.id','=','firma_digitals.id_user')
        ->select('users.name as name','firma_digitals.imagen as firma','firma_digitals.extension as extension')
        ->get();

        return view('dashboard.contenido.firma_digital.lista',compact('firmas'));
    }

    public function nueva_firma(){
        return view('dashboard.contenido.firma_digital.nueva');
    }

    public function guardar_firma_digital(Request $request){

        $base_imagen = $request->firma_digital;

        $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base_imagen));
        
        $extension = $request->extension;

        $filepath = "images/firma_digital/".time().auth()->user()->name.auth()->user()->id.".$extension"; // or image.jpg
        
        // Finalmente guarda la imágen en el directorio especificado y con la informacion dada
        file_put_contents($filepath,$data);

         FirmaDigital::create([
            'id_user' => auth()->user()->id,
            'imagen' => $filepath,
            'extension'=>$request->extension,
        ]);

        return back()->with('success','Firma Agregada');
        dd($request->all());
    }
}
