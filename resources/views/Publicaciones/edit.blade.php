@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Edita tú publicacion</h1>
@stop
@section('content')


<form action="{{route('$Publicaciones.update',$Publicaciones->id)}}" method="POST" > 
@csrf
@method('PUT')
<div class="modal-body">

  <div class="form-row">
    
    <div class="form-group col-md-0">
    <label for="id" class="form-label">Id</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id') ? old('id')  : $tipo_comida->id }}" required class="form-control"  tabindex= "1">
  </div>
  
  <div class="form-row">

  <div class="form-group col-md-4">
    <label for="imagen" class="form-label">Imagen</label>
    <input class="form-control" id="imagen" name="imagen" type="text" placeholder="" value="{{ old('imagen') ? old('imagen')  : $Publicaciones->imagen}}" required class="form-control"  tabindex= "2">
  </div>

  <div class="form-row">  
    <div class="form-group col-md-10">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input class="form-control" id="descripcion" name="descripcion" type="text" placeholder="" value="{{ old('descripcion') ? old('descripcion')  : $tipo_comida->descripcion}}" required class="form-control"  tabindex= "3">
  </div>

  <div class="row">
      <div class="col-12">
        <a href="/Tipo_comida" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
        <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>
      </div>
  </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop