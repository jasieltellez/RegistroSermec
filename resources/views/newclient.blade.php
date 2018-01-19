
@extends ('MainLayout')

@section ('content')

<div>
	<h3 class="text-center">Nuevo Cliente</h3>
</div>

<form id="frmNewClient" class="col-md-6">
	<div class="form-group">
		<label for="inputNombreCliente">Nombre y Apellidos</label>
		<input type="text" class="form-control" id="inputNombreCliente" placeholder="Entrar nombre y apellidos" >
	</div>
	<div class="form-group">
		<label for="inputCelular">Número de Celular</label>
		<input type="tel" class="form-control" id="inputCelular" placeholder="Entrar el número de celular">
	</div>
	<div class="form-group">
		<label for="inputTelFijo">Teléfono Fijo</label>
		<input type="tel" class="form-control" id="inputTelFijo" placeholder="Entrar el número de teléfono fijo">
	</div>
		<div class="form-group">
		<label for="inputRut">R.U.T.</label>
		<input type="text" class="form-control" id="inputRut" placeholder="Entrar el RUT del cliente">
	</div>

	<div class="form-group">
		<label for="inputEmail">Correo Electrónico</label>
		<input type="email" class="form-control" id="inputEmail"  placeholder="Entrar correo electrónico">
		
	</div>
	<div class="form-group ">
		<label id="msgAddClient" class="alert-success"></label>
		
	</div>
	
	<button id='buttonAddClient' type="submit" class="btn btn-primary">Aceptar</button>
</form>


@endSection