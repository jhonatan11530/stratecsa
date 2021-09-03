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

    width: 90px;

    height: 90px;

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

@media only screen and (max-width: 480px){
    h2.tamañotitulo{
        font-size: 40px !important;
    }
    h3.tamaño{
        font-size: 25px !important;
    }
}

</style>



@endsection

@section('content')

    <section class="page-title" style="background-image:url(images/inner-banner/servicios.jpeg)">

        <div class="auto-container">

            <div class="container">

                 <h2 class="tamañotitulo">{{ __('messages.nuestros_servicios') }}</h2>

                <div class="text">{{ __('messages.mensaje_servicios') }}<br>{{ __('messages.mensaje_servicios2') }}

                </div>

                <div class="big-letter">Stra<span>tec</span>sa

                </div>

            </div>

        </div>

    </section>

    <!--Case Studies section-->

    <section id="work" class="work sections container-fluid" style="padding-top: 2rem; margin-top: 3rem; background-color: #f8f9fa;">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="head-title text-center">

                        <h3 class="tamaño" style="font-weight: 700;color: #292a2e; font-size: 30px; margin-bottom: 1rem;">{{ strtoupper(__('messages.nuestros')) }} <span class="text-azulCorp">{{ strtoupper(__('messages.servicios')) }}</span></h3>                        <div class="separator3"></div>

                        <p class="text-mega m-top-10">{{__('messages.mensaje_nuestros_servicios') }}

                        </p>

                    </div>

                </div>

            </div>

            <div class="row" style="margin-top: 5rem;">

                <div class="col-lg-4 col-sm-6">

                    <a href="/internet-dedicado"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/internet_ded.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{ ucwords(strtolower(__('messages.internet_dedicado'))) }}</h4>

                            <p>{{ __('messages.servicio_dedicado') }}</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/enlace-datos"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/enlace.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{ ucwords(strtolower(__('messages.enlace_datos'))) }}</h4>

                            <p>{{ __('messages.servicio_enlace') }}</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/fibra-optica"><div class="service-style-2">

                        <div class="service-img">

                            <img style="width: 50px; height:50px; margin-top:17px; " src="{{ URL::asset('images/icons/fibra-optica3.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{ ucwords(strtolower(__('messages.fibra_optica'))) }}</h4>

                            <p>{{__('messages.mensaje_fibra')}}<br>{{__('messages.mensaje_fibra2')}}</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/software"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/desarr.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{ ucwords(strtolower(__('messages.desarrollo_software'))) }}</h4>

                            <p>{{__('messages.layer5')}}.</p><br>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/pbx"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/ip.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{ ucwords(strtolower(__('messages.comunicaciones_unificadas'))) }}</h4>

                            <p>{{__('messages.mensaje_ipbx')}}</p>
                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/security-cloud"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/iconos-10.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>Security Cloud</h4>

                            <p>{{__('messages.mensaje_security')}}</p><br>

                        </div>

                    </div>

                    </a>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <a href="/colocation"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/colocation.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>Colocation</h4>

                            <p>{{__('messages.mensaje_colocation')}}.</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/servidor-dedicado"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/servidor.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{ ucwords(strtolower(__('messages.servidor_dedicado'))) }}</h4>

                            <p>{{__('messages.mensaje_servidor_dedicado')}}</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/cloud-server"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/iconos-11.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>Cloud Server</h4>

                            <p>{{__('messages.mensaje_cloud')}}</p>

                        </div>

                    </div>

                    </a>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <a href="/cloud-backup"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/cloud_backup.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>Cloud Backup</h4>

                            <p>{{__('messages.mensaje_backup')}}</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/correo-corporativo"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/correo.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{__('messages.correo_corporativo')}}</h4>

                            <p>{{__('messages.mensaje_corporativo')}}</p>

                        </div>

                    </div>

                    </a>

                </div>



                <div class="col-lg-4 col-sm-6">

                    <a href="/outsourcing-tic"><div class="service-style-2">

                        <div class="service-img">

                            <img src="{{ URL::asset('images/icons/outsourcing.png') }}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>Outsourcing TIC</h4>

                            <p>{{__('messages.mensaje_outsourcing')}}</p>

                        </div>

                    </div>

                    </a>

                </div>

                

            </div>

        <!-- End off row -->

        </div>

        <!-- End off container -->

    </section>


    <!-- End off studies section-->

@endsection