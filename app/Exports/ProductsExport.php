<?php

namespace App\Exports;

use App\Product;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{
    public function view(): View
    {
        return view('dashboard.contenido.exportar_excel.products_export', [
            'products' => Product::all()
        ]);
    }
}
