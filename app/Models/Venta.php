<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $primarykey = 'VENTA_ID';
    public $timetamps = false;
    //definicion de valores de la tabla
    protected $fillable = [
        'VENTA_ID',
        'CLIENTE_ID',
        'SERIE_COMPROBANTE',
        'FECHA_HORA',
        'CANTIDAD',
        'SUB_TOTAL', 
        'TOTAL',
    ];
}
