@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Registra tú Usuario</h1>
@stop
@section('content')

<a href="user/create" class="btn btn-success mb-3">Nuevo Registro</a>

<!-- Tabla -->

<div class="table-responsive">
<table id="users" class="table table-striped table-bordered table-condensed" style= width:100%>
<thead class="bg-info text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">Direccion</th>
        <th scope="col">Local_id</th>
        <th colspan="2" scope="col"></th>
    </tr>

</div>
</thead>
<tbody>
    
 <!-- Recorro los elementos del array -->   
@foreach($users as $users)
    <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->nombre}}</td>
        <td>{{$users->apellido}}</td>
        <td>{{$users->telefono}}</td>
        <td>{{$users->email}}</td>
        <td>{{$users->direccion}}</td>
        <td>{{$users->local_id}}</td>
        <td><a href="{{ route('user.edit',$users) }}" class="btn btn-info">Editar</a></td>
        <td><form action="{{route ('user.destroy', $users->id)}}" method="POST">
                @csrf
                @method('DELETE')  
                <button  type="submit" class="btn btn-danger">Borrar</button>
            </form>   
        </td>
        
        

        
    </tr>        
@endforeach

</tbody>
</table>
@endsection


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