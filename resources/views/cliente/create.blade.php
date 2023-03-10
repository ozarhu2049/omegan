@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center mt-4">Formulario de cliente</h1>
<p>
@stop

@section('content')
@if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{Session::get('success')}}
        </div>
    @endif   

<form action="/cliente" method="POST" novalidate>
    @csrf
<div class="mb-3">
  <label for="" class="form-label">Código cliente</label>
  <input type="text" id="codigo" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo') }}">
  @error('codigo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" id="nombre" name="nombre">
  @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellidos</label>
  <input type="text" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}" id="apellidos" name="apellidos">
  @error('apellidos')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">Correo</label>
  <input type="email" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo') }}" id="correo" placeholder="name@example.com" name="correo">
  @error('correo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">Comentario</label>
  <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
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