<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<h2>Inscripción AOA - 2.020</h2>
		<p>Inscripción de asistentes.</p>
	</div>
	<div class="container">
		@if(session('success_register'))
			<div class="alert alert-success" role="alert">
			  Usuario registrado correctamente. Ingrese a su correo para confirmar su email.
			</div>
		@endif

		@if(session('error_register'))
			<div class="alert alert-danger" role="alert">
				{{ session('error_register') }}	  
			</div>
		@endif

		@error('nombres')
			<div class="alert alert-danger" role="alert">
				falta el nombre
			</div>
		@enderror

		<form id="formFormulario" action="{{ route('inscripcion.store') }}" method="post">
			@csrf

			<div class="form-row">
			  	<div class="form-group col-md-6">
			      <label for="inpNombres" class="col-md-5">Nombres</label>
			      <div class="col-md-12">
			      	<input type="text" class="form-control" id="inpNombres" name="nombres" placeholder="Nombres">
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inpApellidos" class="col-md-5">Apellidos</label>
			      <div class="col-md-12">
			      	<input type="text" class="form-control" id="inpApellidos" name="apellidos" placeholder="Apellidos">
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inpEmail" class="col-md-5">Email</label>
			      <div class="col-md-12">
			      	<input type="email" class="form-control" id="inpEmail" name="email" placeholder="email@ejemplo.com">
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="input-telefono" class="col-md-5">Teléfono</label>
			      <div class="col-md-12">
			      	<input type="text" class="form-control" id="input-telefono" name="telefono" placeholder="+54 387 000 0000">
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inpPass" class="col-md-5">Contraseña</label>
			      <div class="col-md-12">
			      	<input type="password" class="form-control" id="inpPass" name="password" placeholder="Contraseña">
			      </div>
			    </div>

			</div>
			<button type="submit" class="btn btn-primary">Registrar!</button>

		  
		  
		 {{--  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div> --}}
		</form>
	</div>
</body>
</html>