<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function productos(Request $request){
        $productos = Product::all();

        echo json_encode($productos);

    }
}
