@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <section class="page-title" style="background-image:url(../../images/background/fibra-optica1.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>@lang('messages.fibra_optica')</h2>
                <div class="text"> @lang('messages.mensaje_fibra_optica')
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
                        <img src="{{ URL::asset('images/servicios/fibra-optica2.jpg') }}" alt="" />
                    </div>
                </center>
                </div>                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="full">
                            <div class="main_heading">
                                <h2 class="tamaño">@lang('messages.fibra_optica2')</h2>
                             </div>
                             @lang('messages.fibra_optica_mensaje')
                        </div>
                
                    </div>
            </div>
    </section>
    <!-- end section -->
    

     <!-- What Services We Offer -->
        <div id="rs-services" class="rs-services container-fluid ">
            <div class="container">
                 <div class="sec-title">
                        <h3 class="text-center"><small></small><br>@lang('messages.fibra_optica_beneficios')</h3>
                     </div>
                <div class="row services-wrap">
                    <div class="col-md-5 col-sm-12 text-right service-col-left">
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.fibra_optica_beneficios2')
                            </div>                               
                            <div class="glyph-icon flaticon-chart"></div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.fibra_optica_beneficios3')
                            </div>
                            <div class="services-icon">
                                <div class="glyph-icon flaticon-tap"></div>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="services-desc">
                                @lang('messages.fibra_optica_beneficios4')
                            </div>
                            <div class="glyph-icon flaticon-seo-label"></div>
                        </div>
                    </div>
                   
                    <div class="col-md-2 col-sm-12 text-center service-col-center" >
                        <img  style="margin-top: 90px" src="{{URL::asset('images/services/servicios-16.png')}}" alt="Portfolio Image" />
                    </div>
                    
                    <div class="col-md-5 col-sm-12 right-icon service-col-right">
                        <div class="services-item">
                            <div class="glyph-icon flaticon-settings"></div>
                            <div class="services-desc">
                                @lang('messages.fibra_optica_beneficios5')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-technology"></div>
                            <div class="services-desc">
                                @lang('messages.fibra_optica_beneficios6')
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="glyph-icon flaticon-rocket-ship"></div>
                            <div class="services-desc">
                                @lang('messages.fibra_optica_beneficios7')
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