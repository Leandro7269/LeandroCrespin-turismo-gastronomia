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
    
    <div class="form-group col-md-6">
    <label for="" class="form-label">Id</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id') ? old('id')  : $tipo_negocio->id }}" required class="form-control"  tabindex= "1">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="" class="form-label">Descripcion</label>
    <input class="form-control" id="descripcion" name="descripcion" type="text" placeholder="" value="{{ old('descripcion') ? old('descripcion')  : $tipo_negocio->descripcion}}" required class="form-control"  tabindex= "2">
  </div>
    
  
  <a href="/tipo_negocio" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop