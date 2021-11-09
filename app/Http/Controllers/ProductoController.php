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
            'IMAGEN'                   => 'required|mimes:jpg,jpeg,png',
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
        $producto = Producto::All()->where('PRODUCTO_ID', $id)->first();

        $categorias = DB::table('categorias')
        ->select('CATEGORIA_ID', 'NOMBRE_CATEGORIA')
        ->orderBy('NOMBRE_CATEGORIA')
        ->get();

        return view('productos.edit',['producto' => $producto], ['categorias' => $categorias]);
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
        $request->validate([
            
            'CATEGORIA_ID'             => 'required|numeric',
            'NOMBRE_PRODUCTO'          => 'required|unique:productos',
            'PRECIO'                   => 'required|numeric',
            'CODIGO_PRODUCTO'          => 'required|',
            'STOCK'                    => 'required|numeric',
            'DESCRIPCION_PRODUCTO'     => 'required',
            //'IMAGEN'                   => 'required|mimes:jpg,png,jpeg',
            'ESTADO'                   => 'required'
        ]);
        //dd($request);exit();

        $editado = $request->input('CATEGORIA_ID', 'NOMBRE_PRODUCTO', 'PRECIO', 'CODIGO_PRODUCTO', 'STOCK', 'DESCRIPCION_PRODUCTO', 'IMAGEN', 'ESTADO');
		$respuesta = DB::table('productos')
            ->where('PRODUCTO_ID', $id)
            ->update(['CATEGORIA_ID'                => $editado->CATEGORIA_ID,
                      'NOMBRE_PRODUCTO'             => $editado->NOMBRE_PRODUCTO,
                      'PRECIO'                      => $editado->PRECIO,
                      'CODIGO_PRODUCTO'             => $editado->CODIGO_PRODUCTO,
                      'STOCK'                       => $editado->STOCK,
                      'DESCRIPCION_PRODUCTO'        => $editado->DESCRIPCION_PRODUCTO,
                      'IMAGEN'                      => $editado->IMAGEN,
                      'ESTADO'                      => $editado->ESTADO
                    ]);
			
		if($respuesta){
			return redirect('/productos')->with('success', 'El producto a sido actualizado exitosamente');
		}else{
			return redirect('/categorias')->with('warning', 'No se pudo actualizar el producto');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $respuesta = DB::table('productos')->where('PRODUCTO_ID', '=', $id)->delete();
		if($respuesta){
			return redirect('/productos')->with('success', 'Producto eliminado satisfactoriamente');
		}else{
			return redirect('/productos')->with('warning', 'No se pudo eliminar el producto sugerido');
        }
    }
}
