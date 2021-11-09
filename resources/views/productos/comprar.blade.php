@extends('layout.layout')
@section('title','Nuevo')
@section('content')
	<h3>Crear nuevo producto</h3>
	
	<form action="{{ route('clientes.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<div class="col-md-3">
			<label for="NOMBRE_CLIENTE" class="form-label">Primer Nombre</label>
			<input type="text" class="form-control" id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE">
		</div>
		<div class="col-md-2">
			<label for="APELLIDO_CLIENTE" class="form-label">Apellido paterno</label>
			<input type="text" class="form-control" id="APELLIDO_CLIENTE" name="APELLIDO_CLIENTE">
		</div>
		<div class="col-md-2">
			<label for="EMAIL" class="form-label">Correo electronico</label>
			<input type="text" class="form-control" id="EMAIL" name="EMAIL">
		</div>
		<div class="col-md-2">
			<label for="RUN" class="form-label">RUN</label>
			<input type="number"  class="form-control" id="RUN" name="RUN">
		</div>
		<div class="col-md-3">
			<label for="TELEFONO" class="form-label">Numero telefonico</label>
			<input type="number"  class="form-control" id="TELEFONO" rows="3" name="TELEFONO">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Comprar</button>
	</form>
@endsection