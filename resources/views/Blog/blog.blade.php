@extends('layouts.plantillahome')

@section('title', 'Turing')
<!-- para un contenido mas amplio -->
@section('content')
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>TURING-IA</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		
	</head>
	<body class="light-version">
	
  <!-- Start breadcumb Area -->
  <div class="page-areablog">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                    <div class="bread-inner">
                        <div class="section-headline white-headline">
                            <h2>Blog </h2>
                        </div>
                        <ul class="breadcrumb-bg">
                        
                            <li>Los grandes conocimientos engendran las grandes dudas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!--Blog Area Start-->
<div class="blog-area area-padding">
    <div class="container">
        <div class="row">
            <div class="blog-sidebar-right">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    @foreach ($publicaciones as $publicacion)
                    <div class="row">
                        
                        <div class="blog-left-content">

                            
                            <!-- Start single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="image-scale" href="blog-sidebar.html#">
 <img alt="" src="img/blog/{{$publicacion->url_image}}">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                       <div class="blog-title">
                                           <div class="blog-meta">
                                                <span class="date-type">
                                                   {{$publicacion->created_at->format('m-d');}}
                                                </span>
                                            </div>
                                            <a href="blog-sidebar.html#">
                                                
                                                <h4>{{$publicacion->Titulo}}</h4>
                                                
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <p>{{$publicacion->Contenido}}</p>
                                            <a class="blog-btn" href="blog-sidebar.html#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- End single blog -->
                            
                        </div>
                    </div>
                    @endforeach
                    
                        {{ $publicaciones->links()}}
                    
                </div>
                <!-- End single blog -->
                <!-- Start Right Sidebar blog -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="left-head-blog">
                        <div class="left-blog-page">
                            <!-- search option start -->
                            <form action="blog-sidebar.html#">
                                <div class="blog-search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="left-blog-page">
                            <div class="left-blog">
                                <h4>Temas</h4>
                                <ul>
                                    @foreach ($temas as $tema)
                                    <li><a href="blog-sidebar.html#">{{$tema->Nombre}}</a></li>
                                 
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                       
                        </div>
               
                    </div>
                </div>
                <!-- End Right Sidebar -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
		
	</body>
</html>

@endsection
