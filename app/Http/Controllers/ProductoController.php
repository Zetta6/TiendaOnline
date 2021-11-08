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
        $categorias = DB::table('categorias')
        ->select('CATEGORIA_ID', 'NOMBRE_CATEGORIA')
        ->orderBy('NOMBRE_CATEGORIA')
        ->get();
    return view('productos.create',['categorias'=>$categorias]);

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

        $request->validate([
            
            'CATEGORIA_ID'             => 'required|numeric',
            'NOMBRE_PRODUCTO'          => 'required|unique:productos',
            'PRECIO'                   => 'required|numeric',
            'CODIGO_PRODUCTO'          => 'required|',
            'STOCK'                    => 'required|numeric',
            'DESCRIPCION_PRODUCTO'     => 'required',
            'IMAGEN'                   => 'required',
            'ESTADO'                   => 'required'
        ]);
        //dd($request);exit();

        $producto = new Producto();

        $producto->PRODUCTO_ID            = null;
        $producto->CATEGORIA_ID           = $request->CATEGORIA_ID;
        $producto->NOMBRE_PRODUCTO        = $request->NOMBRE_PRODUCTO;
        $producto->PRECIO                 = $request->PRECIO;
        $producto->CODIGO_PRODUCTO        = $request->CODIGO_PRODUCTO;
        $producto->STOCK                  = $request->STOCK;
        $producto->DESCRIPCION_PRODUCTO   = $request->DESCRIPCION_PRODUCTO;
        $producto->IMAGEN                 = $request->IMAGEN;
        $producto->ESTADO                 = $request->ESTADO;
        
        
        $respuesta = $producto->save();
		if($respuesta){
			return redirect('/productos')->with('success', 'Nuevo producto registrado con éxito');
		}else{
			return redirect('/productos/create')->with('warning', 'Ocurrio un error');
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
