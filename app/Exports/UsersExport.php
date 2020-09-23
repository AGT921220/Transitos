<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellido',
        ];
    }
    public function collection()
    {
         $users = DB::table('users')->select('id','name', 'lname')
//         ->where('rol','Admin')
         ->get();



         return $users;

    }



}

