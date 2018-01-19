@extends ('MainLayout')

@section ('content')

<div>
	<h3 class="text-center">Editar Auto</h3>
</div>

<form id="frmNewVehicle" class="col-md-6">
	<div class="form-group">
		<label for="inputPatente">Patente</label>
		<input type="text" class="form-control" id="inputPatente" placeholder="Entrar patente" value="<?php echo($vehicle->patent)?>">
	</div>
	<div class="form-group">
		<label for="inputMarca">Marca</label>
		<input type="tel" class="form-control" id="inputMarca" placeholder="Entrar marca" value="<?php echo($vehicle->brand)?>">
	</div>
	<div class="form-group">
		<label for="inputModelo">Modelo</label>
		<input type="text" class="form-control" id="inputModelo" placeholder="Entrar modelo" value="<?php echo($vehicle->model)?>" value="<?php echo($vehicle->name)?>">
	</div>
		<div class="form-group">
		<label for="inputAnno">Año</label>
		<input type="text" class="form-control" id="inputAnno" placeholder="Entrar el año del vehículo" value="<?php echo($vehicle->year)?>">
	</div>

	
	<div class="form-group ">
		<label id="msgEditVehicle" class="alert-success"></label>
		<label id="idVehicle" class="d-none"><?php echo($vehicle->id)?></label>
	</div>
	
	<button id='buttonSaveVehicle' type="submit" class="btn btn-primary">Salvar</button>
</form>


@endSection