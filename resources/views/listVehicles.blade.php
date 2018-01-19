@extends ('MainLayout')

@section ('content')
<div>
  <h3 class="text-center">Listado de Autos</h3>
</div>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Patente</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Año</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    
     <?php echo($vehiclesRows)  ?> 
    
  </tbody>
</table>


@endsection