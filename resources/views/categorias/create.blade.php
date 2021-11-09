@extends('layout.layout')
@section('title','Nueva')
@section('content')
	<h3>Crear nueva categoria</h3>
	
	<form action="{{ route('categorias.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<div class="col-md-3">
			<label for="NOMBRE_CATEGORIA" class="form-label">Nombre de categoria</label>
			<input type="text" class="form-control" id="NOMBRE_CATEGORIA" name="NOMBRE_CATEGORIA">
		</div>
		<div class="col-md-5">
			<label for="DESCRIPCION" class="form-label">Descripción</label>
			<textarea type="text"  class="form-control" id="DESCRIPCION" rows="3" name="DESCRIPCION_CATEGORIA"></textarea>
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
	</form>
@endsection