<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class vehicleController extends Controller
{
    public function NewVehicle()
    {
    	return view('newvehicle');
    }


    public function NewVehicleSubmit(Request $request)
    {
    	if($request->ajax()){
			try{
				$vehicle= new Vehicle;
				$vehicle->patent=$request->input('patente');
				$vehicle->brand=$request->input('marca');
				$vehicle->model=$request->input('modelo');
				$vehicle->year=$request->input('anno');
				
				$vehicle->save();
				return "Vehículo con patente {$vehicle->patent} agregado correctamente.";
			}
			catch(Exception $e){
				return "Ha ocurrido un error al intentar agregar el vehículo con patente {$vehículo->patent}. ";
			}

			
		}
    }


    public function ListVehicles(){
		$vehicles=Vehicle::All();
		
		if (empty($vehicles)) {
			$vehiclesRows="<tr><td>No existen vehículos en la base de datos.</td></tr>";
		}
		else{
			$vehiclesRows="";
				
			foreach ($vehicles as $key => $vehicle) {
				  $vehiclesRows=$vehiclesRows."<tr>";
			      $vehiclesRows=$vehiclesRows."<td>{$vehicle->patent}</td>";
			      $vehiclesRows=$vehiclesRows."<td>{$vehicle->brand}</td>";
			      $vehiclesRows=$vehiclesRows."<td>{$vehicle->model}</td>";
			      $vehiclesRows=$vehiclesRows."<td>{$vehicle->year}</td>";
			      $vehiclesRows=$vehiclesRows."<td id='{$vehicle->id}'><a class='editVehicleLink'  href='./editvehicle/?id={$vehicle->id}'>Editar</a><a class='deleteVehicleLink' href='#'>Eliminar</a></td>";
			      $vehiclesRows=$vehiclesRows."</tr>";

			}


		}
		return view ('listVehicles')
		->with('vehiclesRows',$vehiclesRows);
	}





	public function DeleteVehicle(Request $request){
		if($request->ajax()){
			try{
				Vehicle::Destroy($request->input('id'));
				return "OK";
			}
			catch(Exception $e){
				return "Ha ocurrido un error al intentar eliminar el auto.";
			}

			
		}
	}
}
