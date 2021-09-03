@extends('layouts.plantilla-sitio')
@section('styles')
<style type="text/css">


.service-style-2 {
    text-align: center;
    margin-bottom: 40px;
    padding: 50px 40px 40px 40px;
    -webkit-box-shadow: 0px 5px 35px 0px rgba(148, 146, 245, 0.15);
    box-shadow: 0px 5px 35px 0px rgba(148, 146, 245, 0.15);
}
.service-content h4 {
    margin-bottom: 10px;
    margin: 0px;
    font-weight: 700;
    color: #000;
      font-size: 17px;
    line-height: 28px;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
.service-style-2 .service-img {
    width: 80px;
    height: 80px;
    display: block;
    margin: 0 auto;
}

.service-content p {
 
    color: #797979;
}

footer .footer_logo ul li a {
   padding: 0 !important;
}


.service-style-1 img{

    width: 100%;
}
.modal .modal-backdrop.in {
    opacity: 0 !important;
}

iframe{
    width: 100% !important;
    height: 600px !important;
}
</style>

@endsection
@section('content')
    <section class="page-title" style="background-image:url(images/inner-banner/servicios.jpeg)">
        <div class="auto-container">
            <div class="container">
                 <h2>Normatividad</h2>
                <div class="text">Contamos con múltiples servicios que te ayudarán a la solución <br>de tus problemas IT y al cumplimiento de tus metas.
                </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <div class="row">
                <div class="col-md-12">
                    <div class="head-title text-center" style="margin-bottom: 2rem;">
                        <h3 style="font-weight: 700;color: #292a2e; font-size: 30px; margin-bottom: 1rem;">Seguridad en la<span class="text-azulCorp"> web</span></h3>                        
                        <div class="separator3"></div>
                        <p class="text-mega m-top-10">Contamos con múltiples servicios que te ayudarán a la solución de tus problemas IT y al cumplimiento de tus metas.
                        </p>
                    </div>
                </div>
            </div>
        <div class="col-md-12">
            <iframe  src="https://www.mc.net.co/wp-content/plugins/pdfjs-viewer-shortcode/pdfjs/web/viewer.php?file=https://www.mc.net.co/wp-content/uploads/2018/03/Resolucion5111.pdf&amp;download=false&amp;print=false&amp;openfile=false"></iframe>        
        </div>
    </div>
@endsection