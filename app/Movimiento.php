<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'movhojtrabajo';
    protected $primaryKey = "REGMOVTRAF";
    public $timestamps = false;
    public $incrementing = false;

}
