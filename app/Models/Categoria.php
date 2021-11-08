<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categorias';
    
  protected $primarykey = 'CATEGORIA_ID';
  public $timestamps = false;
  
//definición de valores de la tabla

  protected $fillable = [
  'CATEGORIA_ID',
  'NOMBRE_CATEGORIA',
  'DESCRIPCION_CATEGORIA',
  ];
}