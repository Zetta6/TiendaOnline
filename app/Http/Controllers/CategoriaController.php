<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(5);
        return view('categorias.index',['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre_categoria     = $request->input('NOMBRE_CATEGORIA');
        $descripcion_categoria = $request->input('DESCRIPCION_CATEGORIA');
        
        $respuesta = DB::insert("INSERT INTO categorias (CATEGORIA_ID, NOMBRE_CATEGORIA, DESCRIPCION_CATEGORIA)
        values ( null, '$nombre_categoria', '$descripcion_categoria')");

        if($respuesta){
			return redirect('/categorias')->with('status', 'Nueva categoria registrada con éxito');
		}else{
			return redirect('/categorias/create')->with('status', 'Ocurrio un error');
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
        $categoria = DB::table('categorias')->where('categoria_id', $id)->first();
		$productos = DB::table('productos')
            ->select('PRODUCTO_ID',
                     'CATEGORIA_ID',
                     'NOMBRE_PRODUCTO',
                     'PRECIO',
                     'CODIGO_PRODUCTO',
                     'STOCK',
                     'DESCRIPCION_PRODUCTO',
                     'IMAGEN',
                     'ESTADO')
			->where('CATEGORIA_ID','=',$id)
            ->get();
		return view('categorias.ver',['categoria'=>$categoria,'productos'=>$productos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::All()->where('CATEGORIA_ID', $id)->first();


        return view('categorias.edit', ['categoria' => $categoria]);
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
            
            'NOMBRE_CATEGORIA'          => 'required',
            'DESCRIPCION_CATEGORIA'     => 'required',
        
        ]);
        //dd($request);exit();

        $editado = $request->input('NOMBRE_CATEGORIA', 'DESCRIPCION_CATEGORIA');
		$respuesta = DB::table('categorias')
            ->where('CATEGORIA_ID', $id)
            ->update(['NOMBRE_CATEGORIA'                => $request->NOMBRE_CATEGORIA,
                      'DESCRIPCION_CATEGORIA'           => $request->DESCRIPCION_CATEGORIA,
                    ]);
			
		if($respuesta){
			return redirect('/categorias?page=')->with('success', 'La categoria a sido actualizada exitosamente');
		}else{
			return redirect('/categorias')->with('warning', 'No se pudo actualizar la categoria');
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
        $respuesta = DB::table('categorias')->where('CATEGORIA_ID', '=', $id)->delete();
		if($respuesta){
			return redirect('/categorias')->with('success', 'La categoria fue eliminada');
		}else{
			return redirect('/productos')->with('warning', 'No se pudo eliminar la categorias');
        }
    }
}
