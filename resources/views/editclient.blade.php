@extends ('MainLayout')

@section ('content')

<div>
	<h3 class="text-center">Editar Cliente</h3>
</div>

<form id="frmNewClient" class="col-md-6">
	<div class="form-group">
		<label for="inputNombreCliente">Nombre y Apellidos</label>
		<input type="text" class="form-control" id="inputNombreCliente" placeholder="Entrar nombre y apellidos" value="<?php echo($client->name)?>">
	</div>
	<div class="form-group">
		<label for="inputCelular">Número de Celular</label>
		<input type="text" class="form-control" id="inputCelular" placeholder="Entrar el número de celular"value="<?php echo($client->cell_number)?>">
	</div>
	<div class="form-group">
		<label for="inputTelFijo">Teléfono Fijo</label>
		<input type="text" class="form-control" id="inputTelFijo" placeholder="Entrar el número de teléfono fijo"value="<?php echo($client->phone_number)?>">
	</div>
		<div class="form-group">
		<label for="inputRut">R.U.T.</label>
		<input type="text" class="form-control" id="inputRut" placeholder="Entrar el RUT del cliente"value="<?php echo($client->rut)?>">
	</div>

	<div class="form-group">
		<label for="inputEmail">Correo Electrónico</label>
		<input type="email" class="form-control" id="inputEmail"  placeholder="Entrar correo electrónico"value="<?php echo($client->email)?>">
		
	</div>
	<div class="form-group ">
		<label id="msgSaveClient" class="alert-success"></label>
		<label id="idClient" class="d-none"><?php echo($client->id)?></label>
		
	</div>
	<button id="buttonSaveClient" type="submit" class="btn btn-primary">Salvar</button>
</form>

@endSection