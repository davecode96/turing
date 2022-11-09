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
      <div class="page-areacontacto">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <div class="bread-inner">
                            <div class="section-headline white-headline">
                                <h2>Contactanos</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcumb Area -->
    <!-- Start map Area -->
    <div class="map-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start Map -->
                    <div class="map-main">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3374932397796!2d-99.17364388468387!3d19.397818646817598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff7769001035%3A0x8908d745e6168858!2sTuring%20-%20Inteligencia%20Artificial!5e0!3m2!1ses!2smx!4v1667596811169!5m2!1ses!2smx" style="width:100%;height:450px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- End Map -->
                </div>
            </div>
        </div>
    </div>
   

    <div class="contact-page area-padding">
        <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-head text-center">
                        <h3> <span class="color">Contactanos</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-head">
                        <h3>Medios de contacto</h3>
                        <p>Déjanos tus datos y nosotros nos pondremos en contacto.</p>
                        <div class="contact-icon">
                            <div class="single-contact">
                                

                                <a href="tel:+527225336638"><i class="fa fa-phone"></i><span>+52 (722) 533-6638</span></a>
                                <a href="mailto:contacto@turing-ia.com"><i class="fa fa-envelope"></i><span>contacto@turing-ia.com</span></a>
                                <a href=""><i class="fa fa-envelope"></i><span>Lunes a Viernes 7 a.m. - 7 p.m. UTC-6</span></a>
                                <a href=""><i class="fa fa-map"></i><span>Av. Insurgentes Sur 601,Nápoles, Benito Juárez, 03810 Ciudad de México, CDMX</span></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div class="row">
                            <form  class="contact-form" action="Contactanos/" method="POST" onsubmit="return checkSubmit();">
                                @csrf
                          
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" name="email" id="email" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="email form-control" id="tel" name="tel" placeholder="Numero de telefono" required data-error="Ingrese un numero telefonico">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="email form-control" id="puesto" name="puesto" placeholder="Puesto (Opional)">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="email form-control" id="empresa" name="empresa" placeholder="Empresa (Opcional)">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Asunto" required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="contenido" name="contenido" rows="7" placeholder="Escriba aqui su mensaje" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="contact-btn">Enviar</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                                </div>   
                            </form>  
                        </div>
                    </div>
                </div>
               
                <!-- End contact Form -->
            </div>
        </div>
    </div>
		
	</body>
</html>

@endsection


<script>
        
    function checkSubmit() {
document.getElementById("submit").value = "Enviando...";
document.getElementById("submit").disabled = true;
Swal.fire('Exito!', 'Nos contactaremos', 'success');
return true;
    }

    
</script>