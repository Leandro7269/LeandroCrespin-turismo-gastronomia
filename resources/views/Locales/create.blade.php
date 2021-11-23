
@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Registra tú Local</h1>
@stop
@section('content')



<form action="{{route('locales.store')}}" method="POST" > 
@csrf
<div class="modal-body">

  <!--div class="form-row">
    
    <div class="form-group col-md-6">
    <label for="" class="form-label">Id</label>
    <input class="form-control" id="id" name="id" type="text" placeholder="Id" value="{{ old('id')}}" required />
  </div-->
  
  <div class="form-row">

    <div class="form-group col-md-6">
    <label for="" class="form-label">Nombre</label>
      <input id="nombre_local" class="form-control" type="text" placeholder="" name="nombre_local" value="{{ old('nombre_local')}}" />
  </div>

  <div class="form-group col-md-4">
      <label for="inputPassword4">Telefono</label>
      <input id="telefono" class="form-control" type="text" name="telefono" value="{{ old('telefono')}}" placeholder=""/>
    </div>
  </div> 


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input id="email" class="form-control" type="email" name="email" value="{{ old('email')}}" placeholder=""/>
  </div>

    <div class="form-group col-md-5">
      <label for="password" class="col-form-label">Tipo_negocio</label>
      <input id="tipo_negocio_id" class="form-control" type="tipo_negocio_id" name="tipo_negocio_id" value="{{ old('tipo_negocio_id')}}" placeholder=""/>
    </div>
  @foreach($tipo_comida as $tipo_comida)
    <div class="form-group col-md-5">
    <br>
    <label for="password" class="col-form-label">{{$tipo_comida->descripcion}}</label>
    <input type="checkbox" name={{$tipo_comida->id}} class="form-check-input" id="exampleCheck1">
    </div>    
    
@endforeach
  


  
  <a href="/locales" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>
@endsection



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop