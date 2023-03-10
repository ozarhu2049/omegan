@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center mt-4">Vista de edición</h1>
<p>
@stop

@section('content')
<form action="/cliente/{{$cliente->id}}" method="POST">
    @csrf    
    @method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Código cliente</label>
  <input type="text" class="form-control" id="codigo" name="codigo" value="{{$cliente->codigo}}">
</div>

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellidos</label>
  <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$cliente->apellidos}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Correo</label>
  <input type="email" class="form-control" id="correo" placeholder="name@example.com" name="correo" value="{{$cliente->correo}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Comentario</label>
  <textarea class="form-control" id="descripcion" rows="3" name="descripcion">{{$cliente->descripcion}}</textarea>
</div>
<a href="/cliente" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop