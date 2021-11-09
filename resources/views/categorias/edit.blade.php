@extends('layout.layout')
@section('title','Editar')
@section('content')
	<h3>Editar una categoria</h3>
	
	<form action="{{ route('categorias.update',$categoria->CATEGORIA_ID) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="col-md-3">
			<label for="NOMBRE_CATEGORIA" class="form-label">Nombre de categoria</label>
			<input type="text" class="form-control" id="NOMBRE_CATEGORIA" name="NOMBRE_CATEGORIA" value="{{ $categoria->NOMBRE_CATEGORIA }}">
		</div>
		<div class="col-md-10">
			<label for="DESCRIPCION" class="form-label">Descripción</label>
			<input type="text"  class="form-control" id="DESCRIPCION" rows="3" name="DESCRIPCION_CATEGORIA" value="{{ $categoria->DESCRIPCION_CATEGORIA }}">
		</div>
        <br>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</form>
    <br>
@endsection