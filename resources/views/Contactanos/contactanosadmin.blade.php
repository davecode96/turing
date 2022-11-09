@extends('layouts.plantillabase')



@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contactanos</li>

</ol>
@stop


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')
<div class="card">
    <h5 class="card-header h5">Lista de usuarios contactanos</h5>
    <div class="card-body">

      
        
        <table id="dtPost" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tel</th>
                    <th WIDTH="50%" scope="col">Contenido</th>
                    <th WIDTH="50%" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactanoss as $contactanos)
                    <tr>
                        <td>{{$contactanos->id}}</td>
                        <td>{{$contactanos->Nombre}}</td>
                        <td>{{$contactanos->Email}}</td>
                        <td>{{$contactanos->Tel}}</td>
                        <td WIDTH="50%">{{$contactanos->Contenido}}</td>
                        <td>
                            {{-- <form action=" contactanoss/{{ $contactanos->id}}" method="POST">
                        
                            <a class="btn btn-info" href="contactanoss/{{ $contactanos->id}}/postedit">Editar</a>
                                @csrf
                                @method('DELETE')

                            <button type="submit" class="btn btn-danger">Borrar</button> --}}
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



