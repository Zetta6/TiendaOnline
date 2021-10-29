<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>@yield('title')</title>
	</head>
	<body>
		<!-- 
		
		Inicio contenedor principal 
		
		-->
		<div class="container-fluid">
			<!-- 
		
				Inicio menú de navegación
		
			-->
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			
			  <form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Buscar</button>
			  </form>
			</div>
		  
		</nav>

			<!-- 
		
				Fin menú de navegación
		
			-->
			
			

			<!-- Para mensajes de alerta -->
			@if (session('warning'))
				<div class="alert alert-warning">
				{{ session('warning') }}
				</div>
			@endif
			
			<!-- Para mensajes de 'éxito -->
			@if (session('success'))
				<div class="alert alert-success">
				{{ session('success') }}
				</div>
			@endif
			
			<!-- Para validación de formularios -->
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
			@yield('content')
			
			<!-- Fin del contenido principal -->
			
			
			
			<!-- 
		

		Fin de footerInicio menú de navegación
		
			-->
		</div>
		<!-- 
		
		Fin contenedor principal 
		
		-->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<footer class="text-center text-white" style="background-color: #45637d;">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Iframe -->
    <section class="">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
          <div class="ratio ratio-16x9">
            <iframe
              class="shadow-1-strong rounded"
              src="https://www.youtube.com/embed/vlDzYIIOYmM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Iframe -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
	</body>
</html>