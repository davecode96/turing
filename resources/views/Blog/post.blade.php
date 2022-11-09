@extends('layouts.plantillabase')



@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">posts</li>

</ol>
@stop


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')
<div class="card">
    <h5 class="card-header h5">Lista de Post</h5>
    <div class="card-body">

        <a href="posts/postadd" class="btn btn-primary mb-3">Crear Post</a>  
        
        <table id="dtPost" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Tema</th>
                    <th WIDTH="50%" scope="col">Contenido</th>
                    <th WIDTH="50%" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->Titulo}}</td>
                        <td>{{$post->IDTema}}</td>
                        <td WIDTH="50%">{{$post->Contenido}}</td>
                        <td>
                            <form action=" posts/{{ $post->id}}" method="POST">
                        
                            <a class="btn btn-info" href="posts/{{ $post->id}}/postedit">Editar</a>
                                @csrf
                                @method('DELETE')

                            <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    @section ('js')

    <script>
    $(document).ready(function () {
            $('#dtPost').DataTable();
        });

    </script>
    
     
    @endsection
@stop



