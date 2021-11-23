@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Crea tú Local</h1>
@stop
@section('content')
    

<a href="locales/create" class="btn btn-success mb-3">Nuevo Local</a>

<!-- Tabla -->
<div class="table-responsive">
<table id="locales" class="table table-striped table-bordered table-condensed" style= width:100%>
<thead class="bg-primary text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre_local</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo_negocio_id</th>

</div>
</thead>
<tbody>
    
 <!-- Recorro los elementos del array -->   
    @foreach($locales as $locales)
    <tr>
        <td>{{$locales->id}}</td>
        <td>{{$locales->nombre_local}}</td>
        <td>{{$locales->telefono}}</td>
        <td>{{$locales->email}}</td>
        <td>{{$locales->tipo_negocio_id}}</td>
        <td><a href="{{ route('Locales.edit',$locales) }}" class="btn btn-info">Editar</a>

        <form action="{{route ('Locales.destroy', $locales->id)}}" method="POST">

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