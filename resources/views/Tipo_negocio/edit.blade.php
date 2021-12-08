@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Editar tú negocio</h1>
@stop
@section('content')


<form action="{{route('tipo_negocio.update',$tipo_negocio->id)}}" method="POST" > 
@csrf
@method('PUT')
<div class="modal-body">

  <div class="form-row">
    
    <div class="form-group col-md-1">
    <label for="id" class="form-label">ID</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id') ? old('id')  : $tipo_negocio->id }}" required class="form-control"  tabindex= "1">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-11">
    <label for="tipo_negocio" class="form-label">Tipo de negocio</label>
    <input class="form-control" id="tipo_negocio" name="tipo_negocio" type="text" placeholder="" value="{{ old('tipo_negocio') ? old('tipo_negocio')  : $tipo_negocio->tipo_negocio}}" required class="form-control"  tabindex= "2">
  </div>
    
  
  <a href="/tipo_negocio" class="btn btn-primary" placeholder="" tabindex="">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop