@extends('layouts.plantilla-sitio')
@section('styles')
<style type="text/css">
    .feature-area{
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}
.feature-left, .feature-right{
    box-sizing: border-box;
    display: inline-block;
    float: left;
    height: auto;
    overflow: hidden;
    width: 50%;
}
.feature-left a {
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    display: block;
    height: 562px;
    width: 100%;
}

footer .footer_logo ul li a {
   padding: 0 !important;
}

.panel-body p {
    color: #888888;
    font-family: "Poppins",sans-serif;
    font-size: 14px;
    margin-bottom: 35px;
    padding: 0 0 0 30px;
}
.panel {
    background-color: transparent;
}
.panel-body {
  padding: 0 15px;
}
.feature-right h4, .feature-right h2{
    font-family: 'Ubuntu', sans-serif;
    font-weight: 700;
    font-size: 20px;
    color: #898989;
    text-transform: capitalize;
}
.feature-right h2{
    font-size: 30px;
    color: #6b6b6b;
    padding-bottom: 35px;
}

.feature-right {
    padding: 2rem;
}

.feature-right ul {
    padding: 2rem;
    margin-top: -1rem;
    padding-top: 0rem;
}
.checkout-step h5 {
    background: #4fc2c7 none repeat scroll 0 0;
    color: #ffffff;
    font-family: "Montserrat",sans-serif;
    font-size: 18px;
}
.panel-default > .panel-heading {
    background-color: inherit;
    border-color: inherit;
    color: #333333;
}
.panel-default {
    border-color: transparent;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: transparent;
}
.panel {
    box-shadow: inherit;
}
.panel-heading {
    border-bottom: inherit;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
#accordion{position: relative}
#accordion:before {
    border-left: 1px dashed #4fc2c7;
    content: "";
    height: 95%;
    left: 15px;
    position: absolute;
    top: 2px;
}
.panel-group .panel + .panel {
  margin-top: 0px;
}
.panel-heading {
  padding-top: 0px;
}
.checkout-step span.no:before {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 50%;
    content: "";
    height: 40px;
    position: absolute;
    right: -3px;
    top: 0;
    width: 40px;
    z-index: -1;
}
.checkout-step span.no:after {
    background: #14b1bb none repeat scroll 0 0;
    border-radius: 50%;
    bottom: 0;
    content: "";
    height: 40px;
    left: 0;
    position: absolute;
    top: 0;
    width: 40px;
    z-index: -1;
}
.checkout-step span.no {
    color: #ffffff;
    display: inline-table;
    font-family: "Ubuntu",sans-serif;
    font-size: 20px;
    font-weight: 700;
    height: 40px;
    line-height: 38px;
    position: relative;
    text-align: center;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    vertical-align: middle;
    width: 40px;
    z-index: 9;
}
.boxed-layout .feature-right.pull-right.ptb-100.pl-100.pr-100 {
    padding-right: 50px;
}


</style>
@endsection
@section('content')
<section class="page-title" style="background-image:url(images/background/22.jpg)" style="margin-bottom: 4rem;">
        <div class="auto-container">
            <div class="container">
                <h2>Preguntas frecuentes</h2>
                <div class="text">Contamos con multiples servicios que te ayudarán a la solución <br>de tus problemas IT y al cumplimiento de tus metas.
                </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>

      <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br>Preguntas <span style="color: #059ada;"> frecuentes</span></h3>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Reducción de costos</a></h2>
                                <p>Reduce los costos por los servicios de TI</p>
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Facilidad de gestión</a></h2>
                                <p>Optimiza sus costos y el retorno de su inversión.</p>
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                 <h2 class="services-title"><a href="service-details.html">Seguimiento profesional de incidentes.</a></h2>
                                <p>En  Stratecsa contamos con herramientas para el seguimiento profesional de incidentes.</p>
                                
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center service-col-center">
                        <img src="{{URL::asset('images/services/servicios-13.png')}}" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Soporte a tiempo</a></h2>
                                <p>Nuestro equipo estará disponible para ti siempre que lo necesites.</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Asistencia multicanal inmediata</a></h2>
                                <p>Tendrás varios medios de contacto a disposición del usuario hace que sea más fácil para él pedir soporte ya que cada cliente tiene un medio de comunicación preferido:.</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                               <h2 class="services-title"><a href="service-details.html">Mayores ganancias</a></h2>
                                <p>Cuando una empresa tiene una mesa de ayuda inadecuada, ésto genera la insatisfacción del cliente.</p>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    <!-- Services End -->

@endsection