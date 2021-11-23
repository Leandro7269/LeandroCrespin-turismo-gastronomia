@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Edita tú tipo de comida</h1>
@stop
@section('content')


<form action="{{route('Tipo_comida.update',$tipo_comida->id)}}" method="POST" > 
@csrf
@method('PUT')
<div class="modal-body">

  <div class="form-row">
    
    <div class="form-group col-md-6">
    <label for="" class="form-label">Id</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id') ? old('id')  : $tipo_comida->id }}" required class="form-control"  tabindex= "1">
  </div>
  
  <div class="form-row">

  <div class="form-group col-md-6">
    <label for="" class="form-label">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="" value="{{ old('nombre') ? old('nombre')  : $tipo_comida->nombre}}" required class="form-control"  tabindex= "2">
  </div>

  <div class="form-row">  
    <div class="form-group col-md-6">
    <label for="" class="form-label">Descripcion</label>
    <input class="form-control" id="descripcion" name="descripcion" type="text" placeholder="" value="{{ old('descripcion') ? old('descripcion')  : $tipo_comida->descripcion}}" required class="form-control"  tabindex= "3">
  </div>

  
  <a href="/Tipo_comida" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop