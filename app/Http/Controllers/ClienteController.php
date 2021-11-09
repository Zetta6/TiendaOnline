<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('productos.comprar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'NOMBRE_CLIENTE'        => 'required',
            'APELLIDO_CLIENTE'      => 'required',
            'EMAIL'                 => 'required|email',
            'RUN'                   => 'required',
            'TELEFONO'              => 'required|numeric',
        ]);
        
        //dd($request);exit();

        $cliente = new Cliente();

        $cliente->CLIENTE_ID            = null;
        $cliente->NOMBRE_CLIENTE        = $request->NOMBRE_CLIENTE;
        $cliente->APELLIDO_CLIENTE      = $request->APELLIDO_CLIENTE;
        $cliente->EMAIL                 = $request->EMAIL;
        $cliente->RUN                   = $request->RUN;
        $cliente->TELEFONO              = $request->TELEFONO;


        $respuesta = $cliente->save();
		if($respuesta){
			return redirect('/productos')->with('success', 'Gracias por su compra');
		}else{
			return redirect('/productos/comprar')->with('warning', 'Ocurrio un error');
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
        //
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
        //
    }
}
