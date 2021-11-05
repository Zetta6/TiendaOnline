<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    
    protected $primarykey = 'producto_id';
    protected $timestamps = false;
//definición de valores de la tabla
    protected $fillable = [
    'PRODUCTO_ID',
    'CATEGORIA_ID',
    'NOMBRE_PRODUCTO',
    'PRECIO',
    'CODIGO_PRODUCTO',
    'STOCK',
    'DESCRPCION_PRODUCTO',
    'IMAGEN',
    'ESTADO',
    ]
}