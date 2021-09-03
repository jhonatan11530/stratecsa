@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

    footer .footer_logo ul li a 
     {
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
 <section class="page-title" style="background-image:url(images/background/C_Backup.jpg)">
        <div class="auto-container">
            <div class="container">
                @lang('messages.cloud_backup')
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>  
    <!--Testimonial Section Two-->
    <section class="container sidebar-enlaceDatos testimonial-section-two"{{--  style=" background-color: #f7f7f7;  background-image:url(images/background/pattern-14.png)" --}}>
        <div class="auto-container">
            <div class="row clearfix">                
               <!--Image Column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                <center>
                    <div class="image" style="max-width: 90%;">
                        <img src="{{ URL::asset('images/servicios/cloud_back.jpg') }}" alt="" />
                    </div>
                </center>
                </div>                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        @lang('messages.cloud_backup_mensaje')
                        </div>
                
                    </div>
            </div>
    </section>
    <!-- end section -->
     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br>@lang('messages.cloud_backup_beneficios')</span></h3>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.cloud_backup_beneficios2')
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.cloud_backup_beneficios3')
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.cloud_backup_beneficios4')
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center service-col-center">
                        <img src="{{URL::asset('images/services/servicios-11.png')}}" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                @lang('messages.cloud_backup_beneficios5')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                @lang('messages.cloud_backup_beneficios6')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                                @lang('messages.cloud_backup_beneficios7')
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