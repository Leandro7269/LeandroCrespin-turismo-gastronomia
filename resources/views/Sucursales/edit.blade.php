@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Edita tú Sucursal</h1>
@stop
@section('content')


<form action="{{route('sucursales.update',$sucursales->id)}}" method="POST" > 
@csrf
@method('PUT')
<div class="modal-body">

  <div class="form-row">
    
  <div class="form-group col-md-6">
    <label for="" class="form-label">Id</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="Id" value="{{ old('id')}}" required />
  </div>
  
  <div class="form-row">

    <div class="form-group col-md-6">
    <label for="" class="form-label">Descripcion</label>
      <input id="descripcion" class="form-control" type="text" placeholder="" name="descripcion" value="{{ old('descripcion')}}" />
  </div>

  <div class="form-group col-md-6">
      <label for="inputPassword4">Local</label>
      <input id="local_id" class="form-control" type="text" placeholder="" name="local_id" value="{{ old('local_id')}}"/>
    </div>
  </div>

  
    <div class="form-group col-md-5">
      <label for="direccion">Direccion</label>
      <input id="direccion" class="form-control" type="text" name="direccion" value="{{ old('direccion')}}" placeholder=""/>
    </div>
  
  <div class="form-group col-md-5">
      <div class="form-group">
      <label for="referencia">Referencia</label>
      <input id="referencia" class="form-control" type="text" name="referencia" value="{{ old('referencia')}}" placeholder=""/>
  </div>


  
  <a href="/sucursales" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop