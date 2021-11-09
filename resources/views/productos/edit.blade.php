@extends('layout.layout')
@section('title','Editar')
@section('content')
	<h3>Editar un producto</h3>
	
	<form action="{{ route('productos.update',$producto->PRODUCTO_ID) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="col-md-3">
			<label for="NOMBRE_PRODUCTO" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="NOMBRE_PRODUCTO" name="NOMBRE_PRODUCTO" value="{{ $producto->NOMBRE_PRODUCTO }}">
		</div>
		<div class="col-md-2">
			<label for="PRECIO" class="form-label">Precio</label>
			<input type="number" class="form-control" id="PRECIO" name="PRECIO" value="{{ $producto->PRECIO }}">
		</div>
		<div class="col-md-2">
			<label for="CODIGO_PRODUCTO" class="form-label">Código</label>
			<input type="text" placeholder="6 caracteres" class="form-control" id="CODIGO_PRODUCTO" name="CODIGO_PRODUCTO" minlength="6" maxlength="6" value="{{ $producto->CODIGO_PRODUCTO }}">
		</div>
		<div class="col-md-2">
			<label for="CANTIDAD" class="form-label">Cantidad</label>
			<input type="number"  class="form-control" id="CANTIDAD" name="STOCK" value="{{ $producto->STOCK }}">
		</div>
        <br>
		<select class="form-select" aria-label="Default select example" name="ESTADO" value="{{ $producto->ESTADO }}">
 			<option>Disponible</option>
			<option>No Disponible</option>
		</select>
        <br>
		<select id="CATEGORIA_ID" class="form-select" name="CATEGORIA_ID">
			<option value="" selected>Seleccione una categoria</option>
			@foreach($categorias as $categoria)
				<option value="{{ $categoria->CATEGORIA_ID }}">{{ $categoria->NOMBRE_CATEGORIA }}</option>
			@endforeach
		</select>

		<div class="col-md-5">
			<label for="DESCRIPCION" class="form-label">Descripción</label>
			<textarea type="text"  class="form-control" id="DESCRIPCION" rows="3" name="DESCRIPCION_PRODUCTO" value="{{ $producto->DESCRIPCION_PRODUCTO }}"></textarea>
		</div>
		<div class="col-md-5">
			<label for="IMAGEN" class="form-label">Imágen</label>
			<input class="form-control" type="file" id="IMAGEN" name="IMAGEN">
		</div>
        <br>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
@endsection