@extends('layouts.plantillabase')

@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="">Blog</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear Post</li>

</ol>
<br>
    <h2>Nuevo Post</h2>
@stop

@section('css')

@endsection

@section('content')



    <form action="postadd/" method="POST" onsubmit="return checkSubmit();">
        @csrf

  
        <div class="card">
            <h5 class="card-header h5">Encabezado</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <label for="" class="form-label">Estatus</label>
                        <select name="estatus" id="estatus" class="form-control">
                            <option value="0">Seleccione un estatus</option>
                            <option value="1">Pendiente</option>
                            <option value="2">Publicado</option>
                        </select>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-4">
                        <label for="" class="form-label">Titulo</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" tabindex="1" required>
                    </div>
        
                    <div class="col-lg-4">
                        <label for="" class="form-label">Tema</label>
                        <select name="tema" id="tema" class="form-control">
                                    <option value="0">Seleccione un tema</option>
                                @foreach ($temas as $tema)
                                    <option value="{{$tema['id'] }}" >{{$tema['Nombre']}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
        
        
                <div class="mb-3 ">
                    <label for="" class="form-label">Contenido</label>
                    <textarea id="contenido" name="contenido" class="form-control" tabindex="1" rows="15" required></textarea>
                </div>
        
                <div class="mb-3 float-right">
                <a href="/Blog/posts" class="btn btn-danger" tabindex="5">Cancelar</a>
                <button type="submit" id="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </div>

            </div>
        </div>
        
        

    </form>


    <script>
        
            function checkSubmit() {
        document.getElementById("submit").value = "Enviando...";
        document.getElementById("submit").disabled = true;
        Swal.fire('Exito!', 'Registro guardado', 'success');
        return true;
            }

            
    </script>
   
    


@endsection


