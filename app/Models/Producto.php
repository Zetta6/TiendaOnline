<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
}

class Producto{
    public $producto_id;
    public $nombre_producto;
    public $precio;
    public $codigo_producto;
    public $stock;
    public $descripcion_producto;
    public $imagen;
    public $estado;

    public function __construct() {}

    public static function obtenerProductos($tabla){
		$bd  = Bd::conectar();
		$stm = $bd->prepare("SELECT * FROM $tabla ORDER BY producto_id");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_CLASS,'producto');
    }
}