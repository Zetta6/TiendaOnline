<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $table = 'Clientes';

   protected $primarykey = 'CLIENTE_ID';
   public $timestamps = false;

   //definicion de valores de la tabla

   protected $fillable = [
       'CLIENTE_ID',
       'NOMBRE_CLIENTE',
       'APELLIDO_CLIENTE',
       'EMAIL',
       'RUN', 
       'TELEFONO', 
   ];

}
