
$(document).ready(function(){

	////////////////Acciones relacionadas a los Clientes///////////////////////////////

	$('#buttonAddClient').click(NewUserSubmit)
	$('.deleteClientLink').click(DeleteClient)
	$('#buttonSaveClient').click(SaveClient)
	////////////////Acciones relacionadas a los Vehículos///////////////////////////////
	$('#buttonAddVehicle').click(NewVehicleSubmit)
	$('.deleteVehicleLink').click(DeleteVehicle)
	//$('#buttonSaveClient').click(SaveClient)
	
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