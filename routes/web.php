<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//////////Rutas asociadas a los Clientes/////////////////////////////////////////////
Route::get('/newclient', 'clientController@newClient');
Route::post('/newclientsubmit', 'clientController@newClientSubmit');
Route::get('/listclients', 'clientController@listClients');
Route::post('/deleteclient', 'clientController@deleteClient');
Route::get('/editclient', 'clientController@editClient');
Route::post('/editclient', 'clientController@saveClient');
Route::post('/getclientdetails', 'clientController@getClient');

////////Rutas Asociadas a los Vehiculos////////////////////////////////////////////
Route::get('/newvehicle', 'vehicleController@newVehicle');
Route::post('/newvehiclesubmit', 'vehicleController@newVehicleSubmit');
Route::get('/listvehicles', 'vehicleController@listVehicles');
Route::post('/deletevehicle', 'vehicleController@deleteVehicle');
Route::get('/editvehicle', 'vehicleController@editVehicle');
Route::post('/editvehicle', 'vehicleController@saveVehicle');
Route::post('/getvehicledetails', 'vehicleController@getVehicle');

////////Rutas Asociadas a las Ordenes de Servicio////////////////////////////////////////////
Route::get('/newserviceorder', 'serviceOrderController@newServiceOrderInitialLoad');
