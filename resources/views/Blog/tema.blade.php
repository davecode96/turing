@extends('layouts.plantillabase')


@section('content')
 

    <a href="temas/temaadd" class="btn btn-primary">Crear Tema</a>  

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($temas as $tema)
                <tr>
                    <td>{{$tema->ID}}</td>
                    <td>{{$tema->Nombre}}</td>
                    <td>{{$tema->Descripcion}}</td>
                   
                    <td>
                        {{-- <form action="{{ route ('blogs.destroy', $tema->id)}}" method="POST"> 
                        <a class="btn btn-info" href="/blogs/{{ $tema->id}}/edit">Editar</a>
                            @csrf
                            @method('DELETE')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @stop


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Temas</h1>
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