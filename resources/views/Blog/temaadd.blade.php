@extends('layouts.plantillabase')


@section('content')


<form action="temaadd/" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1" required>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="1" required>
    </div>


    <a href="/Blog/temas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>


@endsection

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Crear Tema</h2>
@stop

{{-- @section('content')
    <p>Seccion principal del Blog.</p>
@stop --}}

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop