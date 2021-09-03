@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
     footer .footer_logo ul li a {
        padding: 0 !important;
        }
    @media only screen and (max-width: 480px)
    {
        h2.tamaño
        {
            font-size: 30px !important;
        }
        .rs-services .sec-title 
         h3:after 
        {    
            top: 6.3rem;
        }
    }
  
</style>
@endsection
@section('content')
 <section class="page-title" style="background-image:url(images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                 <h2>@lang('messages.internet_dedicado')</h2>
                <div style="text-align: justify;" class="text">@lang('messages.internet_dedicado_mensaje')
                </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>  
    <!--Testimonial Section Two-->
    <section class="container sidebar-enlaceDatos testimonial-section-two">
        <div class="auto-container">
            <div class="row clearfix">                
               <!--Image Column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                <center>
                    <div class="image" style="max-width: 90%;">
                        <img src="{{ URL::asset('images/servicios/internet_ded.jpg') }}" alt="" />
                    </div>
                </center>
                </div>                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="full">
                            <div class="main_heading">
                                <h2 class="tamaño">@lang('messages.internet_dedicado2')</span></h2>
                             </div>
                             @lang('messages.internet_dedicado_mensaje2')                          
                            </div>
                            
{{--                         <div class="big-letter">S</div>
 --}}                   </div>
                        <p style="text-align: justify;">@lang('messages.internet_dedicado_mensaje3')</p>
                            <a href="/cotizar/internet/dedicado" class="btn btn-info btn-round m-top-30">@lang('messages.solicitar_info')</a>
                        </div>
                
                    </div>
            </div>
    </section>
    <!-- end section -->
     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid " style="background-color: white !important; display: none;">
            <div class="container">
                <div class="sec-title">
                        <h3 class="text-center"><small></small><br>@lang('messages.internet_dedicado_mensaje4')</h3>
                        <!-- <span>Stratecsa Proveedor de servicios de Internet para tu necesidad</span> -->
                </div>
                <div class="row services-wrap">
                    <div class="row">
                        <div class="col-sm-12">
                            @lang('messages.internet_dedicado_mensaje5')

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Services End -->
     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br> @lang('messages.dedicado_beneficios')</h3>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.dedicado_beneficios_mensaje1')
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.dedicado_beneficios_mensaje2')
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.dedicado_beneficios_mensaje3')
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center service-col-center">
                        <img src="{{URL::asset('images/services/servicios_Mesa de trabajo 1.png')}}" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                @lang('messages.dedicado_beneficios_mensaje4')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                @lang('messages.dedicado_beneficios_mensaje5')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                                @lang('messages.dedicado_beneficios_mensaje6')
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