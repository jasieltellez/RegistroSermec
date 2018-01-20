<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class clientController extends Controller
{
	public function NewClient(){
		return view('newclient');
	}

	public function NewClientSubmit(Request $request){
		if($request->ajax()){
			try{
				$client= new Client;
				$client->name=$request->input('name');
				$client->cell_number=$request->input('cell');
				$client->phone_number=$request->input('fijo');
				$client->rut=$request->input('rut');
				$client->email=$request->input('email');

				$client->save();
				return "Cliente {$client->name} agregado correctamente";
			}
			catch(Exception $e){
				return "Ha ocurrido un error al intentar agregar al cliente {$client->name}. Esto puede deberse a que ya existe en el sistema.";
			}

			
		}

	}

	public function ListClients(){
		$clients=Client::All();
		
		if (empty($clients)) {
			$clientsRows="<tr><td>No existen clientes en la base de datos.</td></tr>";
		}
		else{
			$clientsRows="";
				
			foreach ($clients as $key => $client) {
				  $clientsRows=$clientsRows."<tr>";
			      $clientsRows=$clientsRows."<td>{$client->name}</td>";
			      $clientsRows=$clientsRows."<td>{$client->cell_number}</td>";
			      $clientsRows=$clientsRows."<td>{$client->phone_number}</td>";
			      $clientsRows=$clientsRows."<td>{$client->rut}</td>";
			      $clientsRows=$clientsRows."<td>{$client->email}</td>";
			      $clientsRows=$clientsRows."<td id='{$client->id}'><a class='editClientLink'  href='./editclient/?id={$client->id}'>Editar</a><a class='deleteClientLink' href='#'>Eliminar</a></td>";
			      $clientsRows=$clientsRows."</tr>";

			}


		}
		return view ('listClients')
		->with('clientsRows',$clientsRows);
	}



	public function DeleteClient(Request $request){
		if($request->ajax()){
			try{
				Client::Destroy($request->input('id'));
				return "OK";
			}
			catch(Exception $e){
				return "Ha ocurrido un error al intentar eliminar al cliente {$name}.";
			}

			
		}
	}
	public function EditClient(Request $request){
		
			try{
				$client=Client::Find($request->input('id'));
				return view('editclient')
					->with('client',$client);
			}
			catch(Exception $e){
				return "Ha ocurrido un error.";
			}

			
		
		
	}


	public function SaveClient(Request $request){
		if($request->ajax()){
			try{
				$client=Client::Find($request->input('id'));
				$client->name=$request->input('name');
				$client->cell_number=$request->input('cell');
				$client->phone_number=$request->input('fijo');
				$client->rut=$request->input('rut');
				$client->email=$request->input('email');

				$client->save();
				return "Cliente {$client->name} salvado correctamente";
			}
			catch(Exception $e){
				return "Ha ocurrido un error al intentar modificar al cliente {$client->name}.";
			}

			
		}

	}

	public function GetClient(Request $request){
		if($request->ajax()){
			try{
				$client=Client::Find($request->input('id'));				
				return $client;
			}
			catch(Exception $e){
				return $e;
			}

			
		}
	}
}
