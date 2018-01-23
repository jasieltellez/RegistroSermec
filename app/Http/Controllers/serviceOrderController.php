<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vehicle;
use App\ServiceOrder;


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
    public function newServiceOrderSubmit(Request $request){
        /*
            $table->timestamp('date_order')->nullable();
            $table->timestamp('date_in')->nullable();
            $table->timestamp('date_out')->nullable();
            $table->unsignedInteger('kms')->nullable();
            $table->unsignedInteger('client_id')->references('id')->on('clients');
            $table->unsignedInteger('vehicle_id')->references('id')->on('vehicles');
            $table->text('notes')->nullable();
            $table->text('services')->nullable();
            $table->integer('total')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('balance')->nullable();
            $table->string('payment_method')->nullable();  */

        $order=new ServiceOrder;
        $order->date_order=$request->input('fechaOrden');
        $order->date_in=$request->input('fechaEntrada');
        $order->date_out=$request->input('fechaSalida');
        $order->kms=$request->input('kms');
        ////////////////////////////////////////////
        $order->client_id=$request->input('idClient');
        $order->vehicle_id=$request->input('idVehicle');
        /////////////////////////////////////////////////
        $order->notes=$request->input('observaciones');
        $order->services=$request->input('servicios');
        ////////////////////////////////////////////////
        $order->total=$request->input('total');
        $order->deposit=$request->input('abono');
        $order->discount=$request->input('descuento');
        $order->balance=$request->input('saldo');
        $order->payment_method=$request->input('medioPago');
        ////////////////////////////////////////////////////
        $result =$order->save();
        return (string)($result);

    }

}
