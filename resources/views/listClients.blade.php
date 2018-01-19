@extends ('MainLayout')

@section ('content')
<div>
  <h3 class="text-center">Listado de Clientes</h3>
</div>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nombre</th>
      <th scope="col">Celular</th>
      <th scope="col">Teléfono</th>
      <th scope="col">RUT</th>
      <th scope="col">Correo</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    
     <?php echo($clientsRows)  ?> 
    
  </tbody>
</table>


@endsection