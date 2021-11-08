<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(5);
        return view('productos.index',['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//return $request->all();

        $nombre_producto      = $request->input('NOMBRE_PRODUCTO');
        $precio_producto      = $request->input('PRECIO');
        $codigo_producto      = $request->input('CODIGO_PRODUCTO');
        $stock_producto       = $request->input('STOCK');
        $estado_producto      = $request->input('ESTADO');
        $categoria_producto   = $request->input('CATEGORIA_ID');
        $descripcion_producto = $request->input('DESCRIPCION_PRODUCTO');
        $imagen_producto      = $request->input('IMAGEN');
        
        $respuesta = DB::insert("INSERT INTO productos (PRODUCTO_ID, CATEGORIA_ID, NOMBRE_PRODUCTO, PRECIO, CODIGO_PRODUCTO, STOCK, DESCRIPCION_PRODUCTO, IMAGEN, ESTADO)
        values ( null, '$categoria_producto', '$nombre_producto', '$precio_producto', '$codigo_producto', '$stock_producto', '$descripcion_producto', '$imagen_producto', '$estado_producto')");

        if($respuesta){
			return redirect('/productos')->with('status', 'Nuevo producto registrado con éxito');
		}else{
			return redirect('/productos/create')->with('status', 'Ocurrio un error');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Edit '.$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Producto::findOrFail($id);
        $productos->delete();
        return redirect('/productos')->with('status', 'Producto eliminado con éxito');
    }
}
