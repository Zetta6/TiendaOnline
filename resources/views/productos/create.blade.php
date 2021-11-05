@extends('layout.layout')
@section('title','Nuevo')
@section('content')
	<h3>Crear nuevo producto</h3>
	
	<form action="{{ route('productos.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<div class="col-md-3">
			<label for="NOMBRE_PRODUCTO" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="NOMBRE_PRODUCTO" name="NOMBRE_PRODUCTO">
		</div>
		<div class="col-md-2">
			<label for="PRECIO" class="form-label">Precio</label>
			<input type="number" class="form-control" id="PRECIO" name="PRECIO">
		</div>
		<div class="col-md-2">
			<label for="CODIGO_PRODUCTO" class="form-label">Código</label>
			<input type="number" placeholder="6 caracteres" class="form-control" id="CODIGO_PRODUCTO" name="CODIGO_PRODUCTO">
		</div>
		<div class="col-md-2">
			<label for="CANTIDAD" class="form-label">Cantidad</label>
			<input type="number"  class="form-control" id="CANTIDAD" name="CANTIDAD">
		</div>
		<div class="col-md-5">
			<label for="IMAGEN" class="form-label">Imágen</label>
			<input class="form-control" type="file" id="IMAGEN" name="IMAGEN">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
	</form>
@endsection