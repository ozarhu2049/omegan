@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center mt-4">Vista de datos</h1>
@stop

@section('content')
<a href="cliente/create" class="btn btn-success">CREAR</a>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Comentario</th>
      <th scope="row">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
      <td>{{$cliente->codigo}}</td>
      <td>{{$cliente->nombre}}</td>
      <td>{{$cliente->apellidos}}</td>
      <td>{{$cliente->correo}}</td>   
      <td>{{$cliente->descripcion}}</td>  
      <th scope="row">
      <form action="{{ route('cliente.destroy',$cliente->id) }}" method="POST">
          <a href="/cliente/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
         </form>
      </th>   
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hola!'); </script>
@stop
