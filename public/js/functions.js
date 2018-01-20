
$(document).ready(function(){

	////////////////Acciones relacionadas a los Clientes///////////////////////////////

	$('#buttonAddClient').click(NewUserSubmit)
	$('.deleteClientLink').click(DeleteClient)
	$('#buttonSaveClient').click(SaveClient)
	////////////////Acciones relacionadas a los Vehículos///////////////////////////////
	$('#buttonAddVehicle').click(NewVehicleSubmit)
	$('.deleteVehicleLink').click(DeleteVehicle)
	$('#buttonSaveVehicle').click(SaveVehicle)
	////////////////Acciones relacionadas a los Ordenes de Servicio///////////////////////////////
	$('#selectPatent').change(FillVehicleDetails)
	$('#selectClientName').change(FillClientDetails)
	$('#buttonAddService').click(AddService)
	
})

///////////////Metodos relacionados a los Clientes///////////////////////////////////
function NewUserSubmit(e)
{
	e.preventDefault()
	var url='/newclientsubmit'
	var name=$('#inputNombreCliente')
	var cell=$('#inputCelular')
	var fijo=$('#inputTelFijo')
	var rut=$('#inputRut')
	var email=$('#inputEmail')

	var data={
		"name":name.val(),
		"cell":cell.val(),
		"fijo":fijo.val(),
		"rut":rut.val(),
		"email":email.val()
	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post(url,data,function(result){
		$("#msgAddClient").text(result)
	})
}


function DeleteClient(e){
	e.preventDefault()

	var url='/deleteclient'
	var idClient=e.target.parentNode.id 
	var row=e.target.parentNode.parentNode

	var data={
		"id":idClient,

	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post(url,data,function(result){
		if (result=="OK") {
			$(row).hide()
		}
	})



}

function SaveClient(e)
{
	e.preventDefault()
	var url='/editclient'
	var name=$('#inputNombreCliente')
	var cell=$('#inputCelular')
	var fijo=$('#inputTelFijo')
	var rut=$('#inputRut')
	var email=$('#inputEmail')
	var id=$('#idClient')

	var data={
		"id":id.text(),
		"name":name.val(),
		"cell":cell.val(),
		"fijo":fijo.val(),
		"rut":rut.val(),
		"email":email.val()
	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post(url,data,function(result){
		$("#msgSaveClient").text(result)
	})
}

////////////Metodos relacionados a los Vehiculos//////////////////////////////////

function NewVehicleSubmit(e)
{
	e.preventDefault()
	var url='/newvehiclesubmit'
	var patente=$('#inputPatente')
	var marca=$('#inputMarca')
	var modelo=$('#inputModelo')
	var anno=$('#inputAnno')
	

	var data={
		"patente":patente.val(),
		"marca":marca.val(),
		"modelo":modelo.val(),
		"anno":anno.val()

	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post(url,data,function(result){
		$("#msgAddVehicle").text(result)
	})
}



function DeleteVehicle(e){
	e.preventDefault()

	var url='/deletevehicle'
	var idVehicle=e.target.parentNode.id 
	var row=e.target.parentNode.parentNode

	var data={
		"id":idVehicle,

	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post(url,data,function(result){
		if (result=="OK") {
			$(row).hide()
		}
	})



}


function SaveVehicle(e)
{
	e.preventDefault()
	var url='/editvehicle'
	var patente=$('#inputPatente')
	var marca=$('#inputMarca')
	var modelo=$('#inputModelo')
	var anno=$('#inputAnno')
	var id=$('#idVehicle')

	var data={
		"id":id.text(),
		"patente":patente.val(),
		"marca":marca.val(),
		"modelo":modelo.val(),
		"anno":anno.val()

	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post(url,data,function(result){
		$("#msgEditVehicle").text(result)
	})
}


///////////////Metodos relacionados a las Ordenes de Servicio///////////////////////////////////
function FillVehicleDetails(e){
	e.preventDefault()
	if ($('#selectPatent').val()!='Seleccione') {
		var url='/getvehicledetails'
		var id=$('#selectPatent')
		var data={
			"id":id.val()
		}
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.post(url,data,function(result){
			if (result) {
				$('#inputMarca').val(result.brand)
				$('#inputModelo').val(result.model)
				$('#inputAnno').val(result.year)
			}
		})
	}
	else{
		$('#inputMarca').val('')
		$('#inputModelo').val('')
		$('#inputAnno').val('')
	}

	
}

function FillClientDetails(e){
	e.preventDefault()
	if ($('#selectClientName').val()!='Seleccione') {
		var url='/getclientdetails'
		var id=$('#selectClientName')
		var data={
			"id":id.val()

		}
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.post(url,data,function(result){
			if (result) {
				$('#inputCellNumber').val(result.cell_number)
				$('#inputPhoneNumber').val(result.phone_number)
				$('#inputEmail').val(result.email)
			}
		})
	}
	else{
		$('#inputCellNumber').val('')
		$('#inputPhoneNumber').val('')
		$('#inputEmail').val('')
	}
}


function AddService(e){
	e.preventDefault()
	if (($('#inputCantidad').val()!='') && ($('#inputDescripcion').val()!='')&& ($('#inputValorU').val()!='') ) {
		
		cantidad=$("#inputCantidad").val()
		descripcion=$("#inputDescripcion").val()
		valorU=$("#inputValorU").val()
		ValorNeto=cantidad*valorU
		//Crenado la Fila y las columnas////
		row=$("<tr></tr>")

		colCantidad=$(`<td>${cantidad}</td>`)
		colDescripcion=$(`<td>${descripcion}</td>`)
		colValorU=$(`<td>${valorU}</td>`)
		colValorN=$(`<td>${ValorNeto}</td>`)
		colLink=$(`<td><a href="" class='deleteRowService'>Eliminar</a></td>`)

		row.append(colCantidad)
		row.append(colDescripcion)
		row.append(colValorU)
		row.append(colValorN)
		row.append(colLink)

		$("#tbodyServices").append(row)
	}
}