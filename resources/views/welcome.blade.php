@extends('layouts.plantilla-sitio')
@section('styles')
  <!-- owl stylesheets -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style2.css')}}">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css')}}">
  <style type="text/css">
    .padding_layout_2_small {
      padding-top: 35px;
      padding-bottom: 35px;
    }
    .full {
      width: 100%;
      float: left;
      margin: 0;
      padding: 0;
    }
    .brand_logo_slider .item {
      text-align: center;
      display: flex;
      height: 95px;
      justify-content: center;
      align-items: center;
    }
    .brand_logo_slider .item img {
      width: auto;
    }
    footer .footer_logo ul li a {
      padding: 8px !important;
    }
    .item:not(.no-padding):not(.no-height) {
      display: block;
      width: 100%;
      height: 200px;
    }
    .item:not(.no-height) img {
      height: 100%;
      width: 100%;
    }
    .brand-itemv1 {
      height: 150px !important;
    }
  </style>
@endsection()
@section('content')
  <section id="homev2" class="homev2">
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line hv2-slider" data-ride="carousel" data-interval="10000" >
      <!-- Wrapper For Slides -->
      <div class="carousel-inner" role="listbox">
        <!-- Third Slide -->
        <div class="item active no-height">
          <!-- Slide Background -->
          <img src="assets/images/slide-bg-01.jpg" alt="SeoPress Slider" />
          <div class="bs-slider-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="slide-text slide_style_left m-top-20">
                  <h2 class="text-white" data-animation="animated fadeInUp">{{ __('messages.layer1') }}</h2>
                  <p class="text-white m-top-20" data-animation="animated fadeInLeft">{{ __('messages.layer2') }} </p>
                  <a class="btn btn-primary btn-round m-top-20" data-animation="animated fadeInRight" href="/internet-dedicado">{{ __('messages.conoce_mas') }}</a>
                </div>
                </div>
                <div class="col-md-6 col-sm-12 homev2-slid-img hidden-sm hidden-xs" data-animation="animated zoomIn">
                <img class="slide_style_right" src="{{ URL::asset('images/icons/slider/int.png') }}" alt="Bootstrap Touch Slider"/ style="margin-left: 12rem;">
              </div>
            </div>
          </div>
        </div>
        <!-- End of Slide -->
        <!-- Second Slide -->
        <div class="item no-height">
          <!-- Slide Background -->
          <img src="assets/images/slide-bg-02.jpg" alt="SeoPress Slider" />
          <div class="bs-slider-overlay"></div>
          <div class="container">
            <div class="row">
              <!-- Slide Text Layer -->
              <div class="col-md-12 col-sm-12">
                <div class="slide-text slide_style_center">
                  <h1 class="text-white" data-animation="animated fadeInUp">{{ __('messages.layer3') }}</h1>
                  <p class="text-white m-top-20" data-animation="animated fadeInLeft">{{ __('messages.layer4') }}<br>{{ __('messages.layer4_1') }}</p>
                  <a class="btn btn-default btn-round m-top-20" data-animation="animated fadeInDown" href="/enlace-datos">{{ __('messages.conoce_mas') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Slide -->
        <!-- Third Slide -->
        <div class="item no-height">
          <!-- Slide Background -->
          <img src="{{ URL::asset('images/icons/slider/desarrollo_slder.jpg') }}" alt="SeoPress Slider" />
          <div class="bs-slider-overlay"></div>
          <div class="container">
            <div class="row">
              <!-- Slide Text Layer -->
              <div class="col-md-6 col-sm-12">
                <div class="slide-text slide_style_left">
                  <h1 class="text-white" data-animation="animated fadeInUp">{{ __('messages.layer5') }}</h1>
                  <p class="text-white m-top-20" data-animation="animated fadeInLeft">{{ __('messages.layer6') }}<br>{{ __('messages.layer6_1') }}</p>
                  <a class="btn btn-default btn-round m-top-20" data-animation="animated fadeInDown" href="/software">{{ __('messages.conoce_mas') }}</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 homev2-slid-img hidden-sm hidden-xs" data-animation="animated zoomInRight">
                <img class="slide_style_right" src="assets/images/homev2-slid-01.png" alt="Bootstrap Touch Slider"/>
              </div>
            </div>
          </div>
        </div>
        <!-- Third Slide -->
        <div class="item no-height">
          <!-- Slide Background -->
          <img src="assets/images/slide-bg-10.jpg" alt="SeoPress Slider" />
          <div class="bs-slider-overlay"></div>
          <div class="container">
            <div class="row">
              <!-- Slide Text Layer -->
              <div class="col-md-5 col-sm-12 homev2-slid-img hidden-sm hidden-xs m-top-80" data-animation="animated zoomInUp">
                <img class="slide_style_right" src="{{ URL::asset('images/icons/slider/mesa.png') }}" alt="Bootstrap Touch Slider"/>
              </div>
              <div class="col-md-7 col-sm-12">
                <div class="slide-text slide_style_left">
                  <h1 class="text-white" data-animation="animated fadeInUp">{{ __('messages.soporte_tecnico') }}</h1>
                  <p class="text-white m-top-20" data-animation="animated fadeInLeft">
                    {{ __('messages.mensaje_soporte_tecnico') }}
                  </p>
                  <div class="row" data-animation="animated fadeInDown">
                    <div class="col-sm-6">
                      <ul class="text-white m-top-10">
                        <li><i class="fa fa-check text-white m-r-5"></i> {{ __('messages.ingenieros_especializados') }} </li>
                        <li><i class="fa fa-check text-white m-r-5"></i>{{ __('messages.soporte_siempre') }} </li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="text-white m-top-10">
                        <li><i class="fa fa-check text-white m-r-5"></i>{{ __('messages.equipos_sofisticados') }} </li>
                        <li><i class="fa fa-check text-white m-r-5"></i>{{ __('messages.atencion_inmediata') }} </li>
                        <a class="btn btn-default btn-round m-top-20" data-animation="animated fadeInDown" href="/outsourcing-tic">{{ __('messages.conoce_mas') }}</a>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Slide -->
      </div>
      <!-- End of Wrapper For Slides -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- carousel indicators -->
            <div class="carousel-indicators text-center carousel-indicatores-homev2" style="padding-top: 10px; padding-bottom: 10px;">
              <div data-target="#bootstrap-touch-slider" data-slide-to="0" class="active indicatior-item text-center"> 
                <div class="v2-slid-item-icon">
                  <i class="fa fa-globe"></i>
                  <span class="badge">1</span>
                </div>
                <div class="v2-slid-item-content text-left hidden-sm hidden-xs">
                  <h5 class="m-top-30">{{ __('messages.internet_dedicado') }}</h5>
                </div>
              </div>
              <div data-target="#bootstrap-touch-slider" data-slide-to="1" class="indicatior-item text-center">
                <div class="v2-slid-item-icon">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge">2</span>
                </div>
                <div class="v2-slid-item-content text-left hidden-sm hidden-xs">
                  <h5 class="m-top-30">{{ __('messages.enlace_datos') }}</h5>
                </div>
              </div>
              <div data-target="#bootstrap-touch-slider" data-slide-to="2" class="indicatior-item text-center">
                <div class="v2-slid-item-icon">
                  <i class="fa fa-laptop"></i>
                  <span class="badge">3</span>
                </div>
                <div class="v2-slid-item-content text-left hidden-sm hidden-xs">
                  <h5 class="m-top-30">{{ __('messages.software_medida') }}</h5>
                </div>
              </div>
              <div data-target="#bootstrap-touch-slider" data-slide-to="3" class="indicatior-item text-center">
                <div class="v2-slid-item-icon">
                  <i class="fa fa-life-ring"></i>
                  <span class="badge">4</span>
                </div>
                <div class="v2-slid-item-content text-left hidden-sm hidden-xs">
                  <h5 class="m-top-30">{{ __('messages.mesa_ayuda') }}</h5> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  <!-- End  bootstrap-touch-slider Slider -->
  </section>
  <!-- End off homev1 section -->
  <!--Conten home-->
  <section class="wellcome-section" id="about" style="background-color: white;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="image-holder">
            <center>
              <img src="{{URL::asset('images/background/robot.gif')}}" style="width: 70%;" class="robot">
            </center>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="image-content">
            <div class="section-title">
              <h3><b>{{ __('messages.welcome_to') }} </b><span style="color: #009cda;">Stratecsa</span></h3>
              <p>{{ __('messages.mensaje_bienvenida') }}</p>
            </div>
            <div class="row">
              <div class="cloumn col-md-6 col-sm-12 col-xs-12">
                <div class="item no-height">
                  <div class="icon-box">
                    <figure>
                      <a href="/cobertura"><img src="img/about-1.png" alt=""></a>
                    </figure>
                  </div>
                  <h6>{{ __('messages.cobertura') }}</h6>
                  <p>{{ __('messages.mensaje_cobertura') }}</p>
                </div>
              </div>
              <div class="cloumn col-md-6 col-sm-12 col-xs-12">
                <div class="item no-height">
                  <div class="icon-box">
                    <figure>
                      <a href="/" target="_blank"><img src="img/about-2.png" alt=""></a>
                    </figure>
                  </div>
                  <h6>{{ __('messages.pago_linea') }}</h6>
                  <p>{{ __('messages.mensaje_pago') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div>
              </div>
              <div class="cloumn col-md-6 col-sm-12 col-xs-12">
                <div class="item no-height">
                  <div class="icon-box">
                    <figure>
                      <a href="/herramientas"><img src="img/about-3.png" alt=""></a>
                    </figure>
                  </div>
                  <h6>{{ __('messages.atencion_cliente') }}</h6>
                  <p>{{ __('messages.mensaje_atencion') }}</p>
                </div>
              </div>
              <div class="cloumn col-md-6 col-sm-12 col-xs-12">
                <div class="item no-height">
                  <div class="icon-box">
                    <figure>
                      <a href="https://soporte.stratecsa.com" target="_blank"><img src="img/about-4.png" alt=""></a>
                    </figure>
                  </div>
                  <h6>{{ __('messages.soporte') }}</h6>
                  <p>{{ __('messages.mensaje_soporte') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Counter UP Section Start-->
  <section class="counterUp_wrapper__block padding ptb-xs-40" style="margin-top: -7rem; padding-top: 45px; padding-bottom: 45px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-bottom: 4%;">
          <h2 style="text-align: center;">{{ __('messages.aliados') }}  <strong>{{ __('messages.perfecto') }}</strong> {{ __('messages.mensaje_cumplimiento') }}</h2>
        </div>
        <div class="col-md-12" style="margin-bottom: 2%;">
          <div class="counter_wrap__block text-center">
            <div class="row mt-xs-30">
              <div class="col-md-4">
                <div class="single-counterup">
                  <i class="fa fa-globe"></i>
                  <span class="counter" data-count="110"><b style="display: block;">{{ __('messages.linea_nacional') }}</b> 01 8000 180028</span>
                </div>
              </div>
              <div class="col-md-4 mt-xs-30">
                <div class="single-counterup">
                  <i class="fa fa-phone"></i>
                  <span class="counter" data-count="45"><b style="display: block;">{{ __('messages.telefono') }}</b> +57 2 395 95 95</span>
                </div>
              </div>
              <div class="col-md-4 mt-xs-30">
                <div class="single-counterup">
                  <i class="fa fa-mobile"></i>
                  <span class="counter" data-count="90"><b style="display: block;">{{ __('messages.celular') }}</b> 315 472 51 04</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="text-align: center;">
          <a href="/contacto" class="boxed_btn__block bnt btn-text mt-xs-30">{{ __('messages.celular') }}</a>
        </div>
      </div>
    </div>
  </section>
  <!--Counter UP Section End-->
  <!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        WHY CHOOSE US    
  -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-->
  <div class="all-plan-included parallax-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="hero-text text-center">
              <div class="heading-line"></div>
            <h1>{{ strtoupper(__('messages.nuestros')) }} <span class="text-azulCorp">{{ strtoupper(__('messages.servicios')) }}</span></h1>
          </div>
        </div>
        <div class="col-xs-12">
        <div class="col-lg-4 col-md-4">
          <a class="col-xl-12 col-sm-12" href="/internet-dedicado" style="cursor: pointer;">
            <div class="block">
              <div class="cloud-icon-box-2  cloud-icon-left">
                  <div class="icon-content"><i class="fa fa-globe"></i></div>
                <div class="cloud-icon-content">
                  <h3 class="b-title">{{ __('messages.internet_dedicado') }}</h3>
                  <p style="color: #797979;">{{ __('messages.mensaje_dedicado') }}</p>
                </div>
              </div>
            </div>
          </a>
          <a class="col-xl-12 col-sm-12" href="/enlace-datos" style="cursor: pointer;">
            <div class="block">
              <div class="cloud-icon-box-2  cloud-icon-left">
                <div class="icon-content"><i class="fa fa-folder-open-o"></i></div>
                <div class="cloud-icon-content">
                  <h3 class="b-title">{{ __('messages.enlace_datos') }}</h3>
                  <p style="color: #797979;">{{ __('messages.mensaje_enlace') }}</p>
                </div>
              </div>
            </div>
          </a>
          <a class="col-xl-12 col-sm-12" href="/pbx" style="cursor: pointer;">
            <div class="block">
              <div class="cloud-icon-box-2  cloud-icon-left">
                <div class="icon-content"><i class="fa fa-volume-control-phone"></i></div>
                <div class="cloud-icon-content">
                  <h3 class="b-title">IP PBX</h3>
                  <p style="color: #797979;">{{ __('messages.mensaje_ipbx') }}</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a class="col-xl-12 col-sm-12" href="https://www.stratecsa.com/security-cloud" style="cursor: pointer;">
            <div class="block">
              <div class="cloud-icon-box-2  cloud-icon-left">
                <div class="icon-content"><i class="fa fa-cloud"></i></div>
                <div class="cloud-icon-content">
                  <h3 class="b-title">Security Cloud</h3>
                  <p style="color: #797979;">{{ __('messages.mensaje_security') }}</p>
                </div>
              </div>
            </div>
          </a>
          <a class="col-xl-12 col-sm-12" href="/colocation" style="cursor: pointer;">
            <div class="block">
              <div class="cloud-icon-box-2  cloud-icon-left">
                <div class="icon-content"><i class="fa fa-location-arrow"></i></div>
                <div class="cloud-icon-content">
                  <h3 class="b-title">Colocation</h3>
                  <p style="color: #797979;">{{ __('messages.mensaje_colocation') }}</p>
                </div>
              </div>
            </div>
          </a>
          <a class="col-xl-12 col-sm-12" href="/servidor-dedicado" style="cursor: pointer;">
            <div class="block">
              <div class="cloud-icon-box-2  cloud-icon-left">
                <div class="icon-content"><i class="fa fa-shield"></i></div>
                <div class="cloud-icon-content">
                  <h3 class="b-title">{{ __('messages.servidor_dedicado') }}</h3>
                  <p style="color: #797979;">{{ __('messages.mensaje_servidor_dedicado') }}</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8" style="text-align: center;">
          <a href="/servicios" class="btn btn-info btn-round m-top-30 m-bottom-30" style="background-color: #009cda; text-align: center; padding-left: unset; padding-right: unset;">{{ __('messages.ver_mas') }}</a> 
        </div>
      </div>
    </div>
  </div>
  {{--<section id="pricing-2">
    <div class="container">
      <div class="pricing-inner">
        <div class="title common text-center">
          <h2>{{ __('messages.dejanos_mensaje') }}</h2>
          <p>{{ __('messages.mensaje_dejanos') }}</p>
        </div>
        <div class="main text-center">
          <div class="slider-main">
            <div class="slider-bg">
              <form id="formcontact" class="form-home">
                <div class="col-sm-5 col-sm-offset-1">
                  <div class="form-group">
                    <label>Nombre *</label>
                    <input type="text" name="name" class="form-control formu" required="required" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Asunto </label>
                    <select name="asunto" class="form-control formu">
                      <option value="" selected="">Seleccione...</option>
                      <option value="Internet_Dedicado">Internet Dedicado</option>
                      <option value="Internet_Banda_Ancha">Internet Banda Ancha</option>
                      <option value="Enlace_de_Datos">Enlace de Datos</option>
                      <option value="IP_PBX">IP PBX</option>
                      <option value="IP_Call_Center">IP Call Center</option>
                      <option value="Streaming_de_Audio_y_Video">Streaming de Audio y Video</option>
                      <option value="Seguridad_Digital">Seguridad Digital</option>
                      <option value="Security_Cloud">Security Cloud</option>
                      <option value="Colocation">Colocation</option>
                      <option value="Servidor_Dedicado">Servidor Dedicado</option>
                      <option value="Cloud_Server">Cloud Server</option>
                      <option value="Cloud_Backup">Cloud Backup</option>
                      <option value="EmailPro">EmailPro</option>
                      <option value="MessengerPro">MessengerPro</option>
                      <option value="Desarrollo_Software">Desarrollo Software</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-control formu" required="required" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Telefono </label>
                    <input type="number" name="telefono" class="form-control formu" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" name="direccion" class="form-control formu" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-5">                          
                  <div class="form-group">
                    <label>Departamento </label>
                    <select name="departamento" class="form-control formu">
                      <option value="" selected="">Seleccione...</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Antioquia">Antioquia</option>
                      <option value="Arauca">Arauca</option>
                      <option value="Atlántico">Atlántico</option>
                      <option value="Bogotá">Bogotá</option>
                      <option value="Bolivar">Bolivar</option>
                      <option value="Boyacá">Boyacá</option>
                      <option value="Caldas">Caldas</option>
                      <option value="Caquetá">Caquetá</option>
                      <option value="Casanare">Casanare</option>
                      <option value="Cauca">Cauca</option>
                      <option value="Cesar">Cesar</option>
                      <option value="Chocó">Chocó</option>
                      <option value="Córdoba">Córdoba</option>
                      <option value="Cundinamarca">Cundinamarca</option>
                      <option value="Guainía">Guainía</option>
                      <option value="Guaviare">Guaviare</option>
                      <option value="Huila">Huila</option>
                      <option value="La_Guajira">La Guajira</option>
                      <option value="Magdalena">Magdalena</option>
                      <option value="Meta">Meta</option>
                      <option value="Nariño">Nariño</option>
                      <option value="Norte_de_Santander">Norte de Santander</option>
                      <option value="Putumayo">Putumayo</option>
                      <option value="Quindío">Quindío</option>
                      <option value="Risaralda">Risaralda</option>
                      <option value="San_Andrés_y_Providencia">San Andrés y Providencia</option>
                      <option value="Santander">Santander</option>
                      <option value="Sucre">Sucre</option>
                      <option value="Tolima">Tolima</option>
                      <option value="Valle_del_Cauca">Valle del Cauca</option>
                      <option value="Vaupés">Vaupés</option>
                      <option value="Vichada">Vichada</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Mensaje *</label>
                    <textarea name="message" id="message" required="required" class="form-control formu" rows="9" style="height: 262px;"></textarea>
                    <input type="hidden" name="dest" value="info@stratecsa.com">
                    <input type="hidden" name="to" value="contacto">
                  </div>                          
                </div>      
                <div class="row" align="center" id="btnCont">
                  <button class="btn btn-primary btn-lg" type="submit" onclick="ga('send', 'event', 'Formulario', 'Clic');">
                    Enviar
                  </button>                           
                </div>                                      
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>--}}
  <section class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="contact-wrapper">
            <h3><span>{{ __('messages.mensaje_ofertas') }}<span></span></h3>
            <form action="/suscribirse" method="post" class="signupForm">
              {{  csrf_field() }}
              <div class="form-wrapper">
                <div class="row">
                  <div class="col-xs-9">
                    <input class="searchBar" name="correo"  required="" placeholder="Correo Electrónico">
                  </div>
                  <div class="col-xs-3 hidden-xs">
                    <button type="submit" class="subscribeBtn btn-primary">{{ __('messages.suscribete_ahora') }}</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-sm-5 hidden-xs">
          <div class="caption text-right wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
            <img src="{{ URL::asset('images/girl.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Partner Logo _________________________ -->
  <!-- section -->
  {{--<section id="client">
    <div class="container">
      <div class="client-inner">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="owl-carousel brand_logo_slider owl-theme">
                <div class="item">
                  <img src="images/marcas-o1.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/marcas-o2.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/marcas-o3.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/marcas-o4.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/marcas-o5.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/marcas-o1.png" alt="#" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>--}}
  <!-- end section -->
  <section id="brand" class="">
    <div class="container">
      <div class="row">
        <div id="seg" class="main-brandv1 owl-carousel">
          <!-- <div class="item">
            <div class="brand-itemv1">
              <a href="#!"><img src="{{ URL::asset('images/quince.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="#!"><img src="{{ URL::asset('images/itil.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="#!"><img src="{{ URL::asset('images/cobertura.png') }}" alt=""></a> 
            </div>
          </div>
          <div class="item">
            <div class="brand-itemv1">
              <a href="#!"><img src="{{ URL::asset('images/datacenter.png') }}" alt=""></a> 
            </div>
          </div> -->
        </div>
      </div>
      <!-- End off row -->
    </div>
    <!-- End off container -->
  </section>
@section('scripts')
  <script src="{{ URL::asset('js/owl.carousel.js')}}"></script>
  <script src="{{ URL::asset('js/menumaker.js')}}"></script>
  <script src="{{ URL::asset('js/custom.js')}}"></script>
@endsection    
@endsection


            
        




