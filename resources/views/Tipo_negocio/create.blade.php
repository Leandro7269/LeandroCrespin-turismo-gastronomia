@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Registra tú tipo de negocio</h1>
@stop
@section('content')



<form action="{{route('tipo_negocio.store')}}" method="POST" > 
@csrf
<div class="modal-body">

  <div class="form-row">
    
    <div class="form-group col-md-4">
    <div class="table-responsive">
    <label for="id" class="form-label">ID</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="" value="{{ old('id')}}" required />
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-7">
    <label for="tipo_negocio">Tipo de negocio</label>
    <select id="tipo_negocio" name="tipo_negocio" value="{{ old('tipo_negocio')}}" required class="form-control" tabindex= " 2">
        <option selected value="Ninguno">Ninguno</option>
        <option selected value="Restaurantes">Restaurantes</option>
        <option selected value="Lomiterias">Lomiterias</option>
        <option selected value="Hamburgueserias">Hamburgueserias</option>
        <option selected value="Bares">Bares</option>
        <option selected value="Copetines">Copetines</option>
        <option selected value="Comedor">Comedor</option>
        <option selected value="Pizzeria">Pizzeria</option>
        <option selected value="Restaurantes">Restaurantes</option>
    </select>
    </div>
  </div>

  
  <a href="/tipo_negocio" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>
@endsection



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop