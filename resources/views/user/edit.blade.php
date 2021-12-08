@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Edita tú Usuario</h1>
@stop
@section('content')


<form action="{{route('user.update', $user->id)}}" method="POST" > 
@csrf
@method('PUT')
<div class="modal-body">

  <div class="form-row">
    
    <div class="form-group col-md-1">
    <label for="id" class="form-label">Id</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id') ? old('id')  : $user->id}}" required class="form-control"  tabindex= "1">
  </div>
  
  <div class="form-row">

    <div class="form-group col-md-5">
    <label for="nombre" class="form-label">Nombre</label>
      <input id="nombre" class="form-control" type="text" placeholder="" name="nombre" value="{{ old('nombre') ? old('nombre')  : $user->nombre}}" required class="form-control" tabindex= " 5" />
    </div>

    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input id="apellido" class="form-control" type="text" placeholder="" name="apellido" value="{{ old('apellido') ? old('apellido')  : $user->apellido}}" tabindex= " 6"/>
    </div>
  </div>

  <div class="form-group col-md-2">
      <label for="telefono">Telefono</label>
      <input id="telefono" class="form-control" type="text" name="telefono" value="{{ old('telefono') ? old('telefono')  : $user->telefono}}" placeholder="" tabindex= " 7"/>
    </div>
  </div> 


  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="email">Email</label>
      <input id="email" class="form-control" type="email" name="email" value="{{ old('email') ? old('email')  : $user->email}}" placeholder="" tabindex= " 8"/>
  </div>

    <div class="form-group col-md-2">
      <label for="password" class="col-form-label">Password</label>
      <input id="password" class="form-control" type="password" name="password" value="{{ old('password') ? old('password')  : $user->password}}" placeholder="" tabindex= "9"/>
    </div>
  

  
    <div class="form-group col-md-2">
    <label for="direccion">Direccion</label>
    <input id="direccion" class="form-control" type="text" name="direccion" value="{{ old('direccion') ? old('direccion')  : $user->direccion}}" placeholder="" tabindex= " 10">
    </div>
   
   <div class="form-group">
    <div class="form-group col-md-7">
     <label for="local">Local</label>
      <input id="local_id" class="form-control" type="text" name="local_id" value="{{ old('local_id') ? old('local_id')  : $user->local_id}}" placeholder="" tabindex= " 11">
    </div>


  
<a href="/user" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
<button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop