<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use Illuminate\Http\Request;

use App\Exports\UsersExport;
use App\Product;
use Maatwebsite\Excel\Facades\Excel;


class ExportarExcelController extends Controller
{
    public function index(){
        return view('dashboard.contenido.exportar_excel.index');
    }

    public function exportar_users_excel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportar_products_excel(){
        return Excel::download(new ProductsExport, 'products.xlsx');
    }


}
