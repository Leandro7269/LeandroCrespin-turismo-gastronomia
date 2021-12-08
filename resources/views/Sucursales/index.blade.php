@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Crea tú Sucursal</h1>
@stop
@section('content')
    
<a href="sucursales/create" class="btn btn-success mb-3">Nuevo Registro</a>

<!-- Tabla -->
<div class="table-responsive">
<table id="sucursales" class="table table-striped table-bordered table-condensed" style= width:100%>
<thead class="bg-info text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Local_id</th>
        <th scope="col">Direccion</th>
        <th scope="col">Referencia</th>
    </tr>

</div>
</thead>
<tbody>
    
 <!-- Recorro los elementos del array -->   
    @foreach($sucursales as $sucursales)
    <tr>
        <td>{{$sucursales->id}}</td>
        <td>{{$sucursales->descripcion}}</td>
        <td>{{$sucursales->local_id}}</td>
        <td>{{$sucursales->direccion}}</td>
        <td>{{$sucursales->referencia}}</td>
        <td><a href="{{ route('sucursales.edit',$sucursales) }}" class="btn btn-info">Editar</a>

        <form action="{{route ('sucursales.destroy', $sucursales->id)}}" method="POST">

        @csrf
        @method('DELETE')  
        <button  type="submit" class="btn btn-danger">Borrar</button>

</form>   
    </tr>    
    
    
@endforeach

</tbody>
</table>
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel=styleshp>
@stop

@section('js')
<script></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#users').DataTable();
    
} );
</script>
@stop