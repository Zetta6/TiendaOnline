@extends ('layout.layout')
@section('title','Listado de productos')
@section('content')
	<table class="table">
		<tr>
			<th scope="col">Nro</th>
			<th scope="col">Nombre</th>
			<th scope="col">apellido</th>
			<th scope="col">contacto</th>
		</tr>
		<tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>themarck@gmail.com</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>jacoboth@gmail.com</td>
		</tr>
			<tr>
			<th scope="row">3</th>
			<td>larry</td>
			<td>olsonn</td>
			<td>theolsonn@gmail.com</td>
				
		</tr>
	</table>
@endsection