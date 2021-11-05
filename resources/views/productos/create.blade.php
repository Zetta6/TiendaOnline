@extends('layout.layout')
@section('title','Nuevo')
@section('content')
	<h3>Crear nuevo producto</h3>
	
	<form action="{{ route('productos.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<div class="col-md-3">
		</div>
		
		<div class="col-md-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>
		<div class="col-md-2">
			<label for="precio_compra" class="form-label">Precio compra</label>
			<input type="number" class="form-control" id="precio_compra" name="precio_compra">
		</div>
		<div class="col-md-2">
			<label for="precio_venta" class="form-label">Precio venta</label>
			<input type="number" class="form-control" id="precio_venta" name="precio_venta">
		</div>
		<div class="col-md-2">
			<label for="codigo" class="form-label">Código</label>
			<input type="number" class="form-control" id="codigo" name="codigo">
		</div>
		
		<div class="col-md-3">
			<label for="fecha_vencimiento" class="form-label">Fecha de vencimiento</label>
			<input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento">
		</div>
		<div class="col-md-2">
			<label for="cantidad" class="form-label">Cantidad</label>
			<input type="number" class="form-control" id="cantidad" name="cantidad">
		</div>
		<div class="col-md-2">
			<label for="stock_minimo" class="form-label">Stock mínimo</label>
			<input type="number" class="form-control" id="stock_minimo" name="stock_minimo">
		</div>
		<div class="col-md-5">
			<label for="imagen" class="form-label">Imágen</label>
			<input class="form-control" type="file" id="imagen" name="imagen">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
	</form>
@endsection