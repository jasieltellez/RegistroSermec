@extends ('MainLayout')

@section ('content')

<div>
	<h3 class="text-center">Nuevo Auto</h3>
</div>

<form id="frmNewVehicle" class="col-md-6">
	<div class="form-group">
		<label for="inputPatente">Patente</label>
		<input type="text" class="form-control" id="inputPatente" placeholder="Entrar patente" >
	</div>
	<div class="form-group">
		<label for="inputMarca">Marca</label>
		<input type="tel" class="form-control" id="inputMarca" placeholder="Entrar marca">
	</div>
	<div class="form-group">
		<label for="inputModelo">Modelo</label>
		<input type="text" class="form-control" id="inputModelo" placeholder="Entrar modelo">
	</div>
		<div class="form-group">
		<label for="inputAnno">Año</label>
		<input type="text" class="form-control" id="inputAnno" placeholder="Entrar el año del vehículo">
	</div>

	
	<div class="form-group ">
		<label id="msgAddVehicle" class="alert-success"></label>
		
	</div>
	
	<button id='buttonAddVehicle' type="submit" class="btn btn-primary">Aceptar</button>
</form>


@endSection