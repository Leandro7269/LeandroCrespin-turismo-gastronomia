@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Publicaciones</h1>
@stop
@section('content')


<a href="publicaciones/create" class="btn btn-success mb-3">Nuevo Registro</a>

<!-- Tabla -->
<div class="table-responsive">
<table id="publicaciones" class="table table-striped table-bordered table-condensed" style= width:100%>
<thead class="bg-info text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Imagen</th>
        <th scope="col">Descripcion</th>     
        
    </tr>

</div>
</thead>
<tbody>
    
 <!-- Recorro los elementos del array -->   
    @foreach($Publicaciones as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td><img src="{{ asset('img/'.$item->imagen) }}"></td>
        <td>{{$item->descripcion}}</td>
        
        <td><a href="{{ route('Publicaciones.edit',$item) }}" class="btn btn-info">Editar</a>

        <form action="{{route ('Publicaciones.destroy', $item->id)}}" method="POST">

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