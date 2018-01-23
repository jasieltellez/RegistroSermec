@extends ('MainLayout')

@section ('content')
<div>
  <h3 class="text-center">Listado de Órdenes de Servicio</h3>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Cliente</th>
      <th scope="col">Patente</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Año</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    
     <?php echo($OrdersRows)  ?> 
    
  </tbody>
</table>


@endsection