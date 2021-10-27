<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Controllers\ProductoController;


class ProductoController extends Controller
{
    public function index(){
    return view('producto');
    }
}