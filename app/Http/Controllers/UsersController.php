<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use DB;


class UsersController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perfil(){

        return view('dashboard.users.profile');
    }


    public function empleados(){

        if(auth()->user()->rol!='Admin'){
            return back()->with('mensaje','No tienes permisos para esta sección');
        }

        $empleados = User::where('rol','!=','Admins')->get();
        return view('dashboard.contenido.empleados.lista',compact('empleados'));
    }

    public function nuevo_empleado(){

        if(auth()->user()->rol!='Admin'){
            return back()->with('mensaje','No tienes permisos para esta sección');
        }

        return view('dashboard.contenido.empleados.nuevo');
    }


    public function guardar_empleado(Request $request){

        if(auth()->user()->rol!='Admin'){
            return back()->with('mensaje','No tienes permisos para esta sección');
        }

        if($request->pwd1!=$request->pwd2){
            return back()->with('error','Las contraseñas no coinciden');
        }
        $foto = 'images/profile-empty.png';
        $user = User::where('email',$request->email)->first();
        if(isset($user)){
            return back()->with('error','El correo '.$request->email.' ya existe');
        }

    if( isset($request->user_profile) ){
          $file = $request->user_profile;
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/profiles',$filename);
            $foto = 'images/profiles/'.$filename;
    }
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pwd1),
            'user_profile'=>$foto,
            'geneder'=>$request->geneder,
            'lname'=>$request->lname,
            'rol'=>$request->rol,
        ]);

        return back()->with('success','Usuario Creado');

    }
}

