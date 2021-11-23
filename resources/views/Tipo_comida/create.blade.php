@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Registra tú tipo de comida</h1>
@stop
@section('content')



<form action="{{route('Tipo_comida.store')}}" method="POST" > 
@csrf
<div class="modal-body">
  
  <div class="form-row">

    <div class="form-group col-md-6">
    <label for="" class="form-label">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="" value="{{ old('nombre')}}" required />
  </div>

    
    <div class="form-group col-md-4">
    <label for="descripcion">Descripción</label>
    <br>
    <textarea name="descripcion" value="{{ old('descripcion')}}" ></textarea>
    </div>
  </div>

  
  <a href="/Tipo_comida" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>
@endsection



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop