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
             font-size: 25px !important;
         }
         .rs-services .sec-title
         h3:after
         {
             top:6.3rem;
         }
     }

</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/software2.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>@lang('messages.layer5')</h2>
                <div class="text">@lang('messages.software_mensaje')
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
                        <img src="{{ URL::asset('images/servicios/desarrollo.jpg') }}" alt="" />
                    </div>
                </center>
                </div>                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="full">
                            @lang('messages.software_mensaje2')
                        </div>
                
                    </div>
            </div>
    </section>
    <!-- end section -->
     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br>@lang('messages.software_beneficios')</h3>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.software_beneficios2')
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.software_beneficios3')
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.software_beneficios4')
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center service-col-center">
                        <img src="{{URL::asset('images/services/servicios-04.png')}}" alt="Portfolio Image" />
                    </div>
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                @lang('messages.software_beneficios5')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                @lang('messages.software_beneficios6')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                                @lang('messages.software_beneficios7')
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    <!-- Services End -->
    <section id="brand" style="button-align:right">
    <div class="container">
      <div class="row">
        <div id="seg" class="main-brandv1 owl-carousel">
          <div class="item">
            <div class="brand-itemv1">
              <a href="https://adminisp.net" target="_blank"><img src="{{ URL::asset('images/m-01.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="https://make1email.com" target="_blank"><img src="{{ URL::asset('images/m-02.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="https://yosoyhosting.com" target="_blank"><img src="{{ URL::asset('images/m-03.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="https://wenki.co" target="_blank"><img src="{{ URL::asset('images/m-04.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="https://medicalcare.com.co" target="_blank"><img src="{{ URL::asset('images/m-05.png') }}" alt=""></a> 
            </div>
          </div>
        </div>
      </div>
      <!-- End off row -->
    </div>
    <!-- End off container -->
    </section>

@section('scripts') 

<script src="{{URL::asset('js/jquery.fancybox.js')}}"></script>
<script src="{{URL::asset('js/owl.js')}}"></script>
<script src="{{URL::asset('js/appear.js')}}"></script>
<script src="{{URL::asset('js/wow.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>

@endsection 
@endsection