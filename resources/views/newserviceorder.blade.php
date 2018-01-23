
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
				<option value="Seleccione">Seleccione</option>
				<?php echo($clients)?>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="inputCellNumber">Celular</label>
			<input type="text" class="form-control" id="inputCellNumber" readonly>
		</div>
		<div class="form-group col-md-3">
			<label for="inputPhoneNumber">Teléfono</label>
			<input type="text" class="form-control" id="inputPhoneNumber" readonly>
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
				<option value="Seleccione">Seleccione</option>
				<?php echo($vehicles)?>
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
	<div class="row align-items-end">
		
		<div class="form-group col-md-2">
			<label for="inputCantidad">Cantidad</label>
			<input type="number" class="form-control" id="inputCantidad" value="1" min="1" required>
		</div>
		<div class="form-group col-md-5">
			<label for="inputDescripcion">Descripción del Servicio</label>
			<input type="text" class="form-control" id="inputDescripcion" required>
		</div>
		<div class="form-group col-md-3">
			
			<label for="inputValorU">Valor Unitario</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text " id="basic-addon1">$</span>
				</div>
				<input type="text" class="form-control text-right" id="inputValorU" required>
				<div class="input-group-append">
					<span class="input-group-text " id="basic-addon2">.00</span>
				</div>
			</div>
			
		</div>
		<div class="form-group col-md-2 ">
			
			<button id='buttonAddService' type="submit" class="btn btn-primary">Agregar</button>
			
		</div>
	</div>
	<div class="">
		
		<div class="form-group col ">
			<table id="tableservices" class="table">
				<thead>
					<tr>

						<th scope="col">Cantidad</th>
						<th scope="col">Descripción</th>
						<th scope="col">V. Unitario</th>
						<th scope="col">V. Neto</th>
						<th scope="col">Acción</th>
						
					</tr>
				</thead>
				<tbody id="tbodyServices">

					

				</tbody>
			</table>
			
			<table id="tableTotales" class="offset-md-8 col-md-4">

				<tbody id="tbodyTotales">

					<tr>
						
						<td><strong>Total</strong></td>
						<td><div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text " >$</span>
							</div>
							<input type="text" class="form-control text-right" id="inputValorT" readonly>
							<div class="input-group-append">
								<span class="input-group-text " >.00</span>
							</div>
						</div></td>
					</tr>
					<tr>
						
						<td><strong>Descuento</strong></td>
						<td><div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text ">$</span>
							</div>
							<input type="text" class="form-control text-right" id="inputValorDescuento" required value="0">
							<div class="input-group-append">
								<span class="input-group-text " >.00</span>
							</div>
						</div></td>
					</tr>
					<tr>
						
						<td><strong>Abono</strong></td>
						<td><div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text ">$</span>
							</div>
							<input type="text" class="form-control text-right" id="inputValorAbono" required value="0">
							<div class="input-group-append">
								<span class="input-group-text " >.00</span>
							</div>
						</div></td>
					</tr>


					<tr>
						
						<td><strong>Saldo</strong></td>
						<td><div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text " >$</span>
							</div>
							<input type="text" class="form-control text-right" id="inputSaldo" readonly>
							<div class="input-group-append">
								<span class="input-group-text " >.00</span>
							</div>
						</div></td>
					</tr>
					<tr>
						<td><strong>M. Pago</strong></td>
						<td>
							
							<div class="input-group">

								<select class="form-control text-center" id="selectPayment">
									<option value="No pagado">No pagado</option>
									<option value="Efectivo">Efectivo</option>
									<option value="Red compra">Red compra</option>
								</select>

								</div>
							</td>
						</tr>

					</tbody>
				</table>


			</div>

		</div>




		<div class="form-group ">
			<label id="msgAddSO" class="alert-success"></label>

		</div>

		<button id='buttonAddSO' type="submit" class="btn btn-primary">Aceptar</button>
	</form>


	@endSection