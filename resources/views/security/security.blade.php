@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
 <section class="page-title" style="background-image:url(images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>Seguridad Digital</h2>
                <div class="text">Los servicios de seguridad Permite a las organizaciones detectar y <br>
                    responder frente a distintos tipos de amenazas, Elimine las amenazas.
              </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>  
    <!--Testimonial Section Two-->
    <section class="container sidebar-enlaceDatos testimonial-section-two" style=" background-color: #f7f7f7;  background-image:url(images/background/pattern-14.png)">
        <div class="auto-container">
            <div class="row clearfix">                
               <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image" style="max-width: 90%;">
                        <img src="http://themazine.com/html/spin/HTML-preview/images/home/14.jpg" alt="" />
                    </div>
                </div>                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="full">
                            <div class="main_heading">
                                <h2>Seguridad <span>Digital</span></h2>
                             </div>
                             <p style="text-align: justify;">En Stratecsa Security diseñamos estrategias de seguridad basados en una evaluación de tus requerimientos. Identificamos tus posibles amenazas y las medidas necesarias para contrarrestarlas.</p>
                            <p style="text-align: justify;">El entorno empresarial actual tiene que conectar sus redes internas con clientes, proveedores, socios, empleados remotos e Internet; esto conlleva nuevas amenazas para la seguridad: hackers malintencionados, delincuentes y espías informáticos que roban los activos corporativos, la propiedad intelectual y provocan fallos en los sistemas.</p>
                            <p style="text-align: justify;">Nuestros Ingenieros pueden ayudarte asegurar su red mediante soluciones y servicios especializados como:</p>
                             
                             <ul class="list_style_1 list-style--yr">
                                <li><i class="fa fa-check"></i>Asignación de Políticas de seguridad en la Red LAN.</li>
                                 <li><i class="fa fa-check"></i> Autenticación de usuarios vía 802.1x.</li>
                                 <li><i class="fa fa-check"></i>Análisis y Monitoreo de Trafico LAN/WAN.</li> 
                                 <li><i class="fa fa-check"></i>Aseguramiento de switches, routers, APs, etc.</li>
                                 <li><i class="fa fa-check"></i> IPSec / SSL Virtual Private Network (VPN)</li>
                                 <li><i class="fa fa-check"></i>Antivirus, Antispam</li>                
                             </ul>                            
                            </div>
                            
{{--                         <div class="big-letter">S</div>
 --}}                   </div>
                            <a href="/cotizar/security" class="btn btn-info btn-round m-top-30">Solicitar información</a>
                        </div>
                
                    </div>
            </div>
    </section>
    <!-- end section -->
     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br>Beneficios de Seguridad Digital</h3><br><br><br>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Mayor Productividad</a></h2>
                                <p>Rastrear transacciones y actividades de una empresa.</p>
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Seguridad</a></h2>
                                <p>Hace que tu labor sea mucha más fácil de realizar.</p>
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Menor Inversion</a></h2>
                                <p>Disminuir el costo de mano de obra.</p>
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center service-col-center">
                        <img src="{{URL::asset('images/services/seo-professional.png')}}" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Red Dedicado Veloz</a></h2>
                                <p>Disminuye la cantidad de tiempo dedicado a ciertas actividades, ahora tendrá más tiempo para a hacer crecer su empresa.</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">IPs múltiples</a></h2>
                                <p> Podrás generar tantas IPs como necesites y eliminarlas cuando lo desees.</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a href="service-details.html">Estabilidad</a></h2>
                                <p>Tendrás el ancho de banda que requieres, sin que ningún fallo de la red arruine tu trabajo o el de tu equipo</p>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    <!-- Services End -->

@section('scripts') 

<script src="{{URL::asset('js/jquery.fancybox.js')}}"></script>
<script src="{{URL::asset('js/owl.js')}}"></script>
<script src="{{URL::asset('js/appear.js')}}"></script>
<script src="{{URL::asset('js/wow.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>

@endsection 
@endsection