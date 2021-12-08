@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Registra tú Usuario</h1>
@stop
@section('content')



<form action="{{route('user.store')}}" method="POST" > 
@csrf
<div class="modal-body">

<p><label for="avatar">
 <input type="file" name="avatar">

</label></p>

  <div class="form-row">
    
    <div class="form-group col-md-0">
    <label for="" class="form-label">ID</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id')}}" required />
  </div>
  
  <div class="form-row">

        <div class="form-group col-md-5">
        <label for="" class="form-label">Nombre</label>
          <input id="nombre" class="form-control" type="text" placeholder="" name="nombre" value="{{ old('nombre')}}" />
        </div>

  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="inputPassword4">Apellido</label>
      <input id="apellido" class="form-control" type="text" placeholder="" name="apellido" value="{{ old('apellido')}}"/>
    </div>
  </div>

  <div class="form-group col-md-3">
      <label for="inputPassword4">Telefono</label>
      <input id="telefono" class="form-control" type="text" name="telefono" value="{{ old('telefono')}}" placeholder=""/>
    </div>
  </div> 


  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputEmail4">Email</label>
      <input id="email" class="form-control" type="email" name="email" value="{{ old('email')}}" placeholder=""/>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="password" class="col-form-label">Password</label>
      <input id="password" class="form-control" type="password" name="password" value="{{ old('password')}}" placeholder=""/>
  </div>
  

  
    <div class="form-group col-md-6">
      <label for="direccion">Direccion</label>
      <input id="direccion" class="form-control" type="text" name="direccion" value="{{ old('direccion')}}" placeholder=""/>
    </div>
  
  <div class="form-group col-md-8">
      <div class="form-group">
      <label for="inputAddress2">Local</label>
      <input id="local_id" class="form-control" type="text" name="local_id" value="{{ old('local_id')}}" placeholder=""/>
  </div>


  
  <a href="/user" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>
@endsection



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop