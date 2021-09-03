@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
     footer .footer_logo ul li a {
        padding: 0 !important;
        }

</style>
@endsection
@section('content')
 <section class="page-title" style="background-image:url(images/background/streaming.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>Streaming de Audio y Video</h2>
                <div class="text">Transmisión 100% de alta calidad en tiempo real.
              </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>  
    <!--Testimonial Section Two-->
    <section class="container sidebar-enlaceDatos testimonial-section-two" {{-- style=" background-color: #f7f7f7;  background-image:url(images/background/pattern-14.png)" --}}>
        <div class="auto-container">
            <div class="row clearfix">                
               <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image" style="max-width: 90%;">
                        <img src="{{ URL::asset('images/servicios/streaming.jpg') }}" alt="" />
                    </div>
                </div>                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="full">
                            <div class="main_heading">
                                <h2>Streaming  <span>Stratecsa</span></h2>
                             </div>
                             <p style="text-align: justify;">Las soluciones de video basado en red IP te ofrecen toda una serie de beneficio y funcionalidades avanzadas que no pueden proporcionar las soluciones de video análogas.</p>
                            
                            <p style="text-align: justify;"><b>Caracteristicas:</b></p>
                             
                             <ul class="list_style_1 list-style--yr">
                                <li><i class="fa fa-check"></i>Emisión de eventos en directo y retrasmitidos.</li>
                                 <li><i class="fa fa-check"></i>Webcast en vivo o por demanda de seminarios, charlas o reuniones.</li>
                                 <li><i class="fa fa-check"></i>Demostraciones de productos, capacitación a  sucursales.</li>
                                 <li><i class="fa fa-check"></i>Educación a Distancia, capacitaciones a grupos o sucursales de trabajo.</li>              
                             </ul>                            
                            </div>
                            
{{--                         <div class="big-letter">S</div>
 --}}                   </div>
                            <a href="/cotizar/streaming" class="btn btn-info btn-round m-top-30">Solicitar información</a>
                        </div>
                
                    </div>
            </div>
    </section>
    <!-- end section -->
     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br>Beneficios del Streaming</h3>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a>No existen las distancias.</a></h2>
                                <p>Contarás con accesibilidad remota a tus videos.</p>
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a>Alta calidad de imagen.</a></h2>
                                <p>La mejor calidad de imagen con Streaming Stratecsa.</p>
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                <h2 class="services-title"><a>Gestión de eventos</a></h2>
                                <p>Tús eventos pueden ser compartidos y visualizados por miles de personas.</p>
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center service-col-center">
                        <img src="{{URL::asset('images/services/servicios-05.png')}}" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a>Capacidades de vídeo inteligente.</a></h2>
                                <p>Video inteligente para mejor servicio.</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a>Integración sencilla.</a></h2>
                                <p>Integración sencilla en las herramientas de tú negocio.</p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                                <h2 class="services-title"><a>Disponibilidad.</a></h2>
                                <p>Si así lo configuramos, podemos ofrecer contenido tanto en directo como en diferido, pudiendo satisfacer las necesidades de todo el público, que podrá vernos cuando lo necesite y sin presiones.</p>
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