
@extends ('MainLayout')

@section ('content')

<div>
	<h3 class="text-center">Nueva Orden de Servicio</h3>
</div>

<form id="frmNewClient" class="col-md-10">
	<div><h4>Datos Generales</h4></div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="inputDateSO">Fecha de Orden</label>
			<input type="date" class="form-control" id="inputDateSO" placeholder="Fecha de Orden" >
		</div>
		<div class="form-group col-md-3">
			<label for="inputDateIn">Fecha de Entrada</label>
			<input type="date" class="form-control" id="inputDateIn" placeholder="Fecha de Entrada">
		</div>
		<div class="form-group col-md-3">
			<label for="inputDateOut">Fecha de Salida</label>
			<input type="date" class="form-control" id="inputDateOut" placeholder="Fecha de Salida">
		</div>
		<div class="form-group col-md-3">
			<label for="inputKms">Cuenta Millas</label>
			<input type="text" class="form-control" id="inputKms" placeholder="Distancia en Km">
		</div>
	</div>
	<div><h4>Datos del Cliente</h4></div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="selectClientName">Cliente</label>
			<select class="form-control" id="selectClientName">
				<option>Default select</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="inputCellNumber">Celular</label>
			<input type="text" class="form-control" id="inputCellNumber" readonly>
		</div>
		<div class="form-group col-md-3">
			<label for="inputTel">Teléfono</label>
			<input type="text" class="form-control" id="inputCellNumber" readonly>
		</div>
		<div class="form-group col-md-3">
			<label for="inputEmail">Correo</label>
			<input type="email" class="form-control" id="inputEmail" readonly>
		</div>
	</div>
	<div><h4>Datos del Vehículo</h4></div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="selectPatent">Patente</label>
			<select class="form-control" id="selectPatent">
				<option>Default select</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="inputMarca">Marca</label>
			<input type="text" class="form-control" id="inputMarca" readonly>
		</div>
		<div class="form-group col-md-3">
			<label for="inputModelo">Modelo</label>
			<input type="text" class="form-control" id="inputModelo" readonly>
		</div>
		<div class="form-group col-md-3">
			<label for="inputAnno">Año</label>
			<input type="email" class="form-control" id="inputAnno" readonly>
		</div>
	</div>
	<div><h4>Datos de Seguimiento</h4></div>
	<div class="row">
		
		<div class="form-group col ">
			<label for="inputMarca">Observaciones</label>
			<textarea id="inputObservaciones" class="form-control"></textarea>
		</div>
		
	</div>
	<div><h4>Servicios Realizados</h4></div>
	<div class="row">
		
		<div class="form-group col ">
			<table class="table">
				<thead>
					<tr>

						<th scope="col">Cantidad</th>
						<th scope="col">Descripción</th>
						<th scope="col">V. Unitario</th>
						<th scope="col">V. Neto</th>
						<th scope="col">Acción</th>
						
					</tr>
				</thead>
				<tbody>



				</tbody>
			</table>

		</div>
		
	</div>




	<div class="form-group ">
		<label id="msgAddClient" class="alert-success"></label>
		
	</div>
	
	<button id='buttonAddClient' type="submit" class="btn btn-primary">Aceptar</button>
</form>


@endSection