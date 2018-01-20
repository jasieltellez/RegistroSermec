<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vehicle;


class serviceOrderController extends Controller
{
    public function NewServiceOrderInitialLoad(){

    	$clients=Client::All();
    	$vehicles=Vehicle::All();
    	$clientSelect="";
    	foreach ($clients as $key => $client) {
    		$clientSelect=$clientSelect."<option value='{$client->id}'>{$client->name}</option>";
    	}
    	$vehicleSelect="";
    	foreach ($vehicles as $key => $vehicle) {
    		$vehicleSelect=$vehicleSelect."<option value='{$vehicle->id}'>{$vehicle->patent}</option>";
    	}

    	return view("newserviceorder")
    		->with('clients',$clientSelect)
    		->with('vehicles',$vehicleSelect);

    }

}
