<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
}

class Categoria{
    public $categoria_id;
    public $nombre;

    public function __construct() {}

    public static function obtenerCategorias($tabla){
		$bd  = Bd::conectar();
		$stm = $bd->prepare("SELECT * FROM $tabla ORDER BY categoria_id");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_CLASS,'categoria');
    }
}