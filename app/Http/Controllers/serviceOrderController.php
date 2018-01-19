<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vehicle;


class serviceOrderController extends Controller
{
    public function NewServiceOrder(){

    	$clients=Client::All();
    	$vehicles=Vehicle::All();
    	return view("newserviceorder");

    }

}
