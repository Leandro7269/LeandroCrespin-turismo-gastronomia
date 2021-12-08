@extends('layouts.plantillabase') 
@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Nueva publicacion</h1>
@stop
@section('content')



<form action="{{route('Publicaciones.store')}}" method="POST" encType="multipart/form-data"> 
@csrf
<div class="modal-body">
  
  <div class="form-row">

    <div class="form-group col-md-6">
    <label for="" class="form-label">Imagen</label>
    <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1" value="{{ old('imagen')}}" />
    
  </div>

    
    <div class="form-group col-md-4">
    <label for="descripcion">Descripción</label>
    <br>
    <textarea name="descripcion" value="{{ old('descripcion')}}" ></textarea>
    </div>
  </div>

  
  <a href="/publicaciones" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

</div>
</form>
@endsection



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop