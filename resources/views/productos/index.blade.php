@extends('layout.layout')
@section('title','productos')
@section('content')
	
	<h2>Listado de productos</h2>
	
	@if (session('status'))
		<div class="alert alert-success">
		{{ session('status') }}
		</div>
	@endif
	
	<a class="btn btn-success" href="{{ url('/productos/create') }}" role="button">Nuevo producto</a>
	<table class="table">
		<thead>
			<tr>
                <th scope="col">Imagen</th>
				<th scope="col">Nombre</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
		@foreach($productos as $producto)
			<tr>
				<th scope="row">{{ $producto->PRODUCTO_ID }}</th>
				<td>{{ $producto->NOMBRE_PRODUCTO }}</td>
				<td>{{ $producto->DESCRIPCION_PRODUCTO }}</td>
				<td>{{ $producto->PRECIO }} </td>
				<td>
					<form action="{{ route('productos.destroy', $producto->PRODUCTO_ID) }}" method="POST">
                        <a href="{{ route('productos.edit', $producto->PRODUCTO_ID) }}" class="btn btn-secondary">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Eliminar</button>
                    </form>
				</td>
			</tr>
		@endforeach	
	  </tbody>
	</table>
	
@endsection