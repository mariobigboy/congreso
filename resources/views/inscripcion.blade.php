<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container text-center mb-5">
		<img src="img/core-img/logoSolo.svg" alt="" style="width:40%;margin-bottom: 50px;">
		<h2>Inscripción AOA - 2.020</h2>
		<p>Inscripción de asistentes.</p>
	</div>
	<div class="container " style="margin-bottom: 100px;">
		@if(session('success_register'))
			<div class="alert alert-success" role="alert">
			  Usuario registrado correctamente. Ingrese a su correo para confirmar su email.
			</div>
		@endif


		{{-- @if($errors->any())
			@foreach($errors->all() as $error)
				<div class="alert alert-danger" role="alert">
					{{ $error }}
				</div>
			@endforeach
		@endif --}}

		<form id="formFormulario" action="{{ route('inscripcion.store') }}" method="post">
			@csrf

			<div class="form-row">
			  	<div class="form-group col-md-6">
			      <label for="inpNombres" class="col-md-5">Nombres</label>
			      <div class="col-md-12">
			      	<input type="text" class="form-control {{ ($errors->has('nombres')? ' border-danger' : '') }}" id="inpNombres" name="nombres" placeholder="Nombres">
			      	@if($errors->has('nombres'))
			      		<small class="text-danger">{{$errors->first('nombres')}}</small>
			      	@endif
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inpApellidos" class="col-md-5">Apellidos</label>
			      <div class="col-md-12">
			      	<input type="text" class="form-control {{ ($errors->has('apellidos')? ' border-danger' : '') }}" id="inpApellidos" name="apellidos" placeholder="Apellidos">
			      	@if($errors->has('apellidos'))
			      		<small class="text-danger">{{$errors->first('apellidos')}}</small>
			      	@endif
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inpDni" class="col-md-5">DNI</label>
			      <div class="col-md-12">
			      	<input type="text" class="form-control {{ ($errors->has('dni')? ' border-danger' : '') }}" id="inpDni" name="dni" placeholder="00000000">
			      	@if($errors->has('dni'))
			      		<small class="text-danger">{{$errors->first('dni')}}</small>
			      	@endif
			      </div>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inpEmail" class="col-md-5">Email</label>
			      <div class="col-md-12">
			      	<input type="email" class="form-control {{ ($errors->has('email')? ' border-danger' : '') }}" id="inpEmail" name="email" placeholder="email@ejemplo.com">
			      	@if($errors->has('email'))
			      		<small class="text-danger">{{$errors->first('email')}}</small>
			      	@endif
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
			      	<input type="password" class="form-control {{ ($errors->has('password')? ' border-danger' : '') }}" id="inpPass" name="password" placeholder="Contraseña">
			      	@if($errors->has('password'))
			      		<small class="text-danger">{{$errors->first('password')}}</small>
			      	@endif
			      </div>
			    </div>

			</div>
			<div class="form-group col-md-12 text-left">
				<button type="submit" class="btn btn-primary">Registrar!</button>
			</div>

		  
		  
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

	<!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>

	</script>
</body>
</html>