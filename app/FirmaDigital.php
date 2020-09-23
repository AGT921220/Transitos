<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmaDigital extends Model
{
    protected $fillable = [
        'id_user', 'extension', 'imagen',
    ];
}
