@extends('layout.layout')
@section('title','categorias')
@section('content')
	
	<h2>Listado de categorias</h2>
	
	@if (session('status'))
		<div class="alert alert-success">
		{{ session('status') }}
		</div>
	@endif
	
	<a class="btn btn-success" href="{{ url('/categorias/create') }}" role="button">Nueva categoria</a>
	<table class="table table-striped">
		<thead>
			<tr>
                <th scope="col">Nombre</th>
				<th scope="col">Descripción</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categorias as $categoria)
			<tr>
				<th scope="row">{{ $categoria->NOMBRE_CATEGORIA }}</th>
				<td>{{ $categoria->DESCRIPCION_CATEGORIA }}</td>
				<td>
                        <a href="{{ route('categorias.edit', $categoria->CATEGORIA_ID) }}" class="btn btn-secondary">Editar</a>
						<br></br>
						<form action="{{ route('categorias.destroy', $categoria->CATEGORIA_ID) }}" method="POST">
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