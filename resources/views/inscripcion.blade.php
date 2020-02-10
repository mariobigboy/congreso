<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<h2>Inscripción AOA - 2.020</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos aliquam vitae ea, fugit, odio alias dolores, corrupti vel eius facere inventore magni! Iste natus dolores eius minima, laboriosam sint sit.</p>
	</div>
	<div class="container">
		<form id="formFormulario">
		  <div class="form-row">
		  	<div class="form-group col-md-6">
		      <label for="inputEmail4">Nombres</label>
		      <input type="text" class="form-control" id="inpNombres">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Apellidos</label>
		      <input type="text" class="form-control" id="inpApellidos">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inpEmail">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Contraseña</label>
		      <input type="password" class="form-control" id="inpPass">
		    </div>
		  </div>
		  
		 {{--  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div> --}}
		  <button type="submit" class="btn btn-primary">Registrar!</button>
		</form>
	</div>
</body>
</html>