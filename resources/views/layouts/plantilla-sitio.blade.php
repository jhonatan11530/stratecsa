<!doctype html>
<html lang="en"> 
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TVZ5B95');</script>
    <!-- End Google Tag Manager -->
    <title>Stratecsa</title>
    <meta name="description" content="">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- Google fonts links-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Heebo:100,300,400,500,700,800,900|Nunito" rel="stylesheet">
    <!--For Plugins external css-->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap-touch-slider.css')}}">
    <!--Theme custom css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/colors/blue.css')}}"> --}}
    <!--Theme Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="{{URL::asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="//code.jivosite.com/widget.js" data-jv-id="9XNIpvYBjU" async></script>
    @php $time = date('H:i:s'); @endphp
    @yield('styles')
    <style type="text/css">
      .chatCopyright_3s, .logo_1D {
        display: none !important;
      }
      #logo{
        font-style: italic;
      }
      /* body{cursor: url("{{URL::asset('assets/christmas-tree-icon.png')}}"), auto} */
      .p .loadding-page {
        width: 100%;
        height: 100%;
        background: #0ea1dc;
        overflow: hidden;
        position: fixed;
        top: 0;
        z-index: 9999;
      }
      .p .cssload-box-loading {
        width: 49px;
        height: 49px;
        margin: auto;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }
      .p .cssload-box-loading:before {
        content: '';
        width: 49px;
        height: 5px;
        background: #000000;
        opacity: 0.1;
        position: absolute;
        top: 58px;
        left: 0;
        border-radius: 50%;
        animation: shadow 0.58s linear infinite;
        -o-animation: shadow 0.58s linear infinite;
        -ms-animation: shadow 0.58s linear infinite;
        -webkit-animation: shadow 0.58s linear infinite;
        -moz-animation: shadow 0.58s linear infinite;
      }
      .p .cssload-box-loading:after {
        content: '';
        width: 49px;
        height: 49px;
        background: #fff;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 3px;
        animation: cssload-animate 0.58s linear infinite;
        -o-animation: cssload-animate 0.58s linear infinite;
        -ms-animation: cssload-animate 0.58s linear infinite;
        -webkit-animation: cssload-animate 0.58s linear infinite;
        -moz-animation: cssload-animate 0.58s linear infinite;
      }
      span.counter {
        font-size: 28px;
      }
      button {
        outline: none;
        border: none !important;
      }
      @keyframes cssload-animate {
        17% {
          border-bottom-right-radius: 3px;
        }
        25% {
          transform: translateY(9px) rotate(22.5deg);
        }
        50% {
          transform: translateY(18px) scale(1, 0.9) rotate(45deg);
          border-bottom-right-radius: 39px;
        }
        75% {
          transform: translateY(9px) rotate(67.5deg);
        }
        100% {
          transform: translateY(0) rotate(90deg);
        }
      }
      @-o-keyframes cssload-animate {
        17% {
          border-bottom-right-radius: 3px;
        }
        25% {
          -o-transform: translateY(9px) rotate(22.5deg);
        }
        50% {
          -o-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
          border-bottom-right-radius: 39px;
        }
        75% {
          -o-transform: translateY(9px) rotate(67.5deg);
        }
        100% {
          -o-transform: translateY(0) rotate(90deg);
        }
      }
      @-ms-keyframes cssload-animate {
        17% {
          border-bottom-right-radius: 3px;
        }
        25% {
          -ms-transform: translateY(9px) rotate(22.5deg);
        }
        50% {
          -ms-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
          border-bottom-right-radius: 39px;
        }
        75% {
          -ms-transform: translateY(9px) rotate(67.5deg);
        }
        100% {
          -ms-transform: translateY(0) rotate(90deg);
        }
      }
      @-webkit-keyframes cssload-animate {
        17% {
          border-bottom-right-radius: 3px;
        }
        25% {
          -webkit-transform: translateY(9px) rotate(22.5deg);
        }
        50% {
          -webkit-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
          border-bottom-right-radius: 39px;
        }
        75% {
          -webkit-transform: translateY(9px) rotate(67.5deg);
        }
        100% {
          -webkit-transform: translateY(0) rotate(90deg);
        }
      }
      @-moz-keyframes cssload-animate {
        17% {
          border-bottom-right-radius: 3px;
        }
        25% {
          -moz-transform: translateY(9px) rotate(22.5deg);
        }
        50% {
          -moz-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
          border-bottom-right-radius: 39px;
        }
        75% {
          -moz-transform: translateY(9px) rotate(67.5deg);
        }
        100% {
          -moz-transform: translateY(0) rotate(90deg);
        }
      }
      @keyframes shadow {
        0%,
        100% {
          transform: scale(1, 1);
        }
        50% {
          transform: scale(1.2, 1);
        }
      }
      @-o-keyframes shadow {
        0%,
        100% {
          -o-transform: scale(1, 1);
        }
        50% {
          -o-transform: scale(1.2, 1);
        }
      }
      @-ms-keyframes shadow {
        0%,
        100% {
          -ms-transform: scale(1, 1);
        }
        50% {
          -ms-transform: scale(1.2, 1);
        }
      }
      @-webkit-keyframes shadow {
        0%,
        100% {
          -webkit-transform: scale(1, 1);
        }
        50% {
          -webkit-transform: scale(1.2, 1);
        }
      }
      @-moz-keyframes shadow {
        0%,
        100% {
          -moz-transform: scale(1, 1);
        }
        50% {
          -moz-transform: scale(1.2, 1);
        }
      }
      .owl-dots{
        display: none;
      }
      .productos {
        background-color: #929292;
        border-bottom-left-radius: 52px;
      }
      .productos ul {
        padding: 4px;
        text-align: end;
        font-size: 15.4px;
      }
      .productos li {
        color: #fff;
        display: inline;
      }
      .productos li a {
        color: #fff !important;
      }
      .productos li a:hover span {
        display: none;
      }
      .productos li a:hover img {
        /* width: 13%; */
        display: unset;
      }
      .productos li a img {
        width: 13%;
        display: none;
      }
      .productos li + li {
        border-left: 1px solid;
        padding-left: 5px;
        margin-left: 5px !important;
      }
      .attr-nav>ul>li.dropdown ul.dropdown-menu{
        left: -155px;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVZ5B95"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Preloader -->
    <div class="p" id="pre">
      <div class="preloader loadding-page">
        <div class="cssload-box-loading"></div>
      </div>
    </div>
    <!-- <div class="preloader loaderbox">
        <div id="cupcake" class="loaderbox">
          <span class="letter" id="logo">S</span>
          <span class="letter loaderbox" id="logo">T</span>
          <span class="letter loaderbox" id="logo">R</span>
          <span class="letter loaderbox" id="logo">A</span>
          <span class="letter loaderbox" id="logo">T</span>
          <span class="letter loaderbox" id="logo">E</span>
          <span class="letter loaderbox" id="logo">C</span>
          <span class="letter loaderbox" id="logo">S</span>
          <span class="letter loaderbox" id="logo">A</span>
          <div class="cupcakeCircle loaderbox" id="logo"><div class="cupcakeInner loaderbox"><div class="cupcakeCore loaderbox"></div></div></div>
        </div>
    </div> -->
    <!--End off Preloader -->
    <nav class="navbar homev2-menu navbar-default navbar-mobile bootsnav">
      {{-- <div class="col-md-4"></div> --}}
     
      <div class="container">
        <div class="row">
          <div class="nav-top clearfix">
            <div class="call-us-area text-center" style="padding: 25px 0px;">
              <div class="col-md-4">
                <a class="logo" href="/"><img src="{{ URL::asset('assets/images/logo15a.png') }}" alt="" style="width: 100%;"/></a>
              </div>
              <div class="col-md-8">
                <div class="col-sm-12 productos" style="margin-bottom: 19px; padding: 6px 0px; height: 40px; display: none;">
                  <ul>
                    <li><a target="_blank" href="https://elizza.co"><span>Streaming</span><img src="{{URL::asset('assets/img/a.png')}}"></a></li>
                    <li><a target="_blank" href="https://suite365.net"><span>Software Contable</span><img src="{{URL::asset('assets/img/c.png')}}"></a></li>
                    <li><a target="_blank" href="https://yosoyhosting.com"><span>Hosting y Dominios</span><img src="{{URL::asset('assets/img/b.png')}}"></a></li>
                    <li><a target="_blank" href="https://make1email.com"><span>Correos Masivos</span><img src="{{URL::asset('assets/img/d.png')}}"></a></li>
                    <li><a target="_blank" href="https://medicalcare.com.co"><span>Telemedicina</span><img src="{{URL::asset('assets/img/e.png')}}"></a></li>
                    <li><a target="_blank" href="https://tuagenda.co"><span>Agendamineto</span><img src="{{URL::asset('assets/img/f.png')}}"></a></li>
                  </ul>
                </div>
                <div class="col-sm-4 col-xs-12 text-left">
                  <div class="row">
                    <div class="col-sm-3">
                      <i class="fa fa-globe"></i>
                    </div>
                    <div id="pri" class="owl-carousel">
                      <div class="col-sm-9 item" style="height: unset !important">
                        <p class="top-info">
                          <span>{{ __('messages.linea_nacional') }}</span>
                          <br />01 8000 180028
                        </p>
                      </div>
                      <div class="col-sm-9 item" style="height: unset !important">
                        <p class="top-info">
                          <span>{{ __('messages.celular') }}</span>
                          <br />315 472 51 04
                        </p>
                      </div>
                      <div class="col-sm-9 item" style="height: unset !important">
                        <p class="top-info">
                          <span>{{ __('messages.telefono') }}</span>
                          <br />+57 2 395 95 95
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-left">
                  <div class="row">
                    <div class="col-sm-3">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="col-sm-9">
                      <p class="top-info">
                        <span>{{ __('messages.sede_principal2') }}</span>
                        <br />Cali - Colombia
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-left">
                  <div class="row">
                    <div class="col-sm-3">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-sm-9">
                      <p class="top-info">
                        <span>{{ __('messages.email') }}</span>
                        <br />info@stratecsa.com
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hv2-main-menu-bg"> 
        <!-- Start Top Search -->
        <div class="top-search">
          <div class="container">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
          </div>
        </div>
        <!-- End Top Search -->
        <div class="container"> 
          <div class="row">
            <div class="attr-nav">
              <ul>
                <li class=""><a href="http://stratecsa.com.co/" target="_blank"><i class="fa fa-user"></i><span style="margin-left: 9px;">Login</span></a></li>
                <li class="nav-item dropdown">
                   <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  {{ __('messages.language') }} : @if($_SESSION['language']=="es") <img src="/img/flags/flag-colombia.png" width="15"> @else <img src="/img/flags/flag-estados.png" width="15"> @endif  </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#" id="change_language" data-lang="es"> <img src="/img/flags/flag-colombia.png" width="15"> @lang('messages.spanish')</a></li>
                      <li><a class="dropdown-item" href="#" id="change_language" data-lang="en"> <img src="/img/flags/flag-estados.png" width="15"> @lang('messages.english') </a></li>
                    </ul>
                </li>
              </ul>
            </div>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
              </button>
              <!--<a class="navbar-brand hidden-md hidden-lg" href="#brand"><img src="assets/images/logov1.png" class="logo" alt=""></a>-->
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-left" data-in="fadeIn" data-out="fadeOut">
                <li><a href="/">{{ __('messages.inicio') }}</a></li>
                <li><a href="/servicios">{{ __('messages.productos_servicios') }}</a></li>
                <li><a href="/about">{{ __('messages.acerca_nosotros') }}</a></li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Compañia</a>
                  <ul class="dropdown-menu">
                    <li><a href="/about">Acerca de nosotros</a></li> 
                    <li><a href="/normatividad">Normatividad</a></li> 
                    <li><a href="/herramientas">Herramientas</a></li> 
                  </ul>
                </li> -->
                <li><a href="/cobertura">{{ __('messages.cobertura') }}</a></li>
                <li><a href="/contacto">{{ __('messages.contactenos') }}</a></li>
                
                <!-- <li><a href="#"> <select id="language" style="padding: 0 !important;margin-bottom: 0 !important;color: black !important;font: inherit;margin-top: -3px !important; background: transparent;border: none;">
                  <option value="es" @if($_SESSION['language']=="es") selected @endif>es</option>
                  <option value="en" @if($_SESSION['language']=="en") selected @endif>en</option>
                </select></a></li> -->
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        </div>
      </div>
    </nav> 
    <!-- End off Nav -->
    <div class="culmn">
      @yield('content')        
    </div>
    <!-- JS includes -->
    <footer>
      <div class="main_footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 footer_logo">
              <a href="https://www.stratecsa.com"><img src="{{ URL::asset('assets/images/logov1.png') }}" alt="logo" style=" width: 13rem; "></a>
              <p>{{ __('messages.mensaje_inicial') }} </p>
              <ul>
                <li><a href="https://www.facebook.com/Stratecsa%20/"  target="_blank" class="border_rou tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/stratecsa_ltda?lang=en" target="_blank"  class="border_rou tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://plus.google.com/101268607399422234507" target="_blank"  class="border_rou tran3s"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/company/stratecsa-ltda"  target="_blank" class="border_rou tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/stratecsa/" target="_blank"  class="border_rou tran3s"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <!-- End of .footer_logo -->
            <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12 quick_links">
              <h5>{{ __('messages.compania') }}</h5>
              <ul>
                <li><a href="/about" class="tran3s">{{ __('messages.acerca_nosotros') }}</a></li>
                <li><a href="/cobertura" class="tran3s">{{ __('messages.cobertura') }}</a></li>
                <li><a href="/terminos" class="tran3s">{{ __('messages.terminos') }}</a></li>
                <li><a href="/politicas" class="tran3s">{{ __('messages.politicas') }}</a></li>
                <li><a href="https://soporte.stratecsa.com/" target="_blank" class="tran3s">{{ __('messages.soporte') }}</a></li>
                <li><a href="/contacto" class="tran3s">{{ __('messages.contactenos') }}</a></li>
              </ul>
            </div>
            <!-- End of .quick_links -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 quick_links">
              <h5>{{ __('messages.productos') }}</h5>
              <ul>
                <li><a href="/internet-dedicado" class="tran3s">{{ __('messages.internet_dedicado') }}</a></li>
                <li><a href="/enlace-datos" class="tran3s">{{ __('messages.enlace_datos') }}</a></li>
                <li><a href="/pbx" class="tran3s">{{ __('messages.comunicaciones_unificadas') }}</a></li>
                <li><a href="/servidor-dedicado" class="tran3s">{{ __('messages.servidor_dedicado') }}</a></li>
                <li><a href="/software" class="tran3s">{{ __('messages.desarrollo_software') }}</a></li>
                <li><a href="/colocation" class="tran3s">{{ __('messages.colocation') }}</a></li>
              </ul>
            </div>
            <!-- End of .latest_twieets -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 subscribe_now">
              <h5>{{ __('messages.suscribete_ahora') }}</h5>
              <p>{{ __('messages.mensaje_oferta') }}</p>
              <form action="/suscribirse" method="post">
                {{  csrf_field() }}
                <input type="text" placeholder="Escribe tu correo">
                <button class="p_color_bg tran3s" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </form>
            </div>
            <!-- End of .subscribe_now -->
          </div>
          <!-- End of .row -->
        </div>
        <!-- End of .container -->
      </div>
      <!-- End of .main_footer -->
      <div class="bottom_footer">
        <div class="conatiner">
          <p>{{ __('messages.creado_por') }}<a href="https://www.stratecsa.com" target="_blank"> Stratecsa</a> 2020</p>
        </div>
        <!-- End of .container -->
      </div>
      <!-- End of .bottom_footer -->
    </footer>
    <script src="{{URL::asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/bootstrap.js')}}"></script>
    <script>
      setTimeout(function(){
        $('#pre').fadeOut('slow')
      },2000)
    </script>
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.touchSwipe.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootsnav.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{URL::asset('assets/js/jquery.formchimp.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js" type="text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77263549-1"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {{-- <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}
    
    
    @if(strtotime($time) <= strtotime('2020/01/06'))
      <script>
        // Numero de copos, recomendados entre 30 y 40
        var nieve_cantidad=200;
        // Colores de los copos se mostraran de forma aleatoria
        var nieve_colorr=new Array("#aaaacc","#ddddFF","#ccccDD")
        // Tipo de letra de los copos
        var nieve_tipo=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")
        // Valor o letra de los copos
        var nieve_letra="*"
        // velocidad de caida
        var nieve_velocidad=1.0;
        // tamaño mas grande de los copos
        var nieve_cantidadsize=30
        // tamaño mas pequeño de los copos
        var nieve_chico=8
        // 1 toda la pagina - 2 zona izquierda - 3 centro de pagina - 4 zona derecha
        var nieve_zona=1
        var nieve=new Array()
        var marginbottom
        var marginright
        var timer
        var i_nieve=0
        var x_mv=new Array();
        var crds=new Array();
        var lftrght=new Array();
        var browserinfos=navigator.userAgent
        var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
        var ns6=document.getElementById&&!document.all
        var opera=browserinfos.match(/Opera/)  
        var browserok=ie5||ns6||opera
        function aleatorio(range) {    
          rand=Math.floor(range*Math.random())
          return rand
        }
        function initnieve() {
          if (ie5 || opera) {
            marginbottom = document.body.clientHeight
            marginright = document.body.clientWidth
          } else if (ns6) {
            marginbottom = window.innerHeight
            marginright = window.innerWidth
          }
          var nievesizerange=nieve_cantidadsize-nieve_chico
          for (i=0;i<=nieve_cantidad;i++) {
            crds[i] = 0;                      
            lftrght[i] = Math.random()*15;        
            x_mv[i] = 0.03 + Math.random()/10;
            nieve[i]=document.getElementById("s"+i)
            nieve[i].style.fontFamily=nieve_tipo[aleatorio(nieve_tipo.length)]
            nieve[i].size=aleatorio(nievesizerange)+nieve_chico
            nieve[i].style.fontSize=nieve[i].size
            nieve[i].style.color=nieve_colorr[aleatorio(nieve_colorr.length)]
            nieve[i].sink=nieve_velocidad*nieve[i].size/5
            if (nieve_zona==1) {nieve[i].posx=aleatorio(marginright-nieve[i].size)}
            if (nieve_zona==2) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)}
            if (nieve_zona==3) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/4}
            if (nieve_zona==4) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/2}
            nieve[i].posy=aleatorio(2*marginbottom-marginbottom-2*nieve[i].size)
            nieve[i].style.left=nieve[i].posx + 'px';
            nieve[i].style.top=nieve[i].posy + 'px';
          }
          movenieve()
        }
        function movenieve() {
          for (i=0;i<=nieve_cantidad;i++) {
            crds[i] += x_mv[i];
            nieve[i].posy+=nieve[i].sink
            nieve[i].style.left=nieve[i].posx+lftrght[i]*Math.sin(crds[i]) + 'px';;
            nieve[i].style.top=nieve[i].posy + 'px';
            if (nieve[i].posy>=marginbottom-2*nieve[i].size || parseInt(nieve[i].style.left)>(marginright-3*lftrght[i])){
              if (nieve_zona==1) {nieve[i].posx=aleatorio(marginright-nieve[i].size)}
              if (nieve_zona==2) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)}
              if (nieve_zona==3) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/4}
              if (nieve_zona==4) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/2}
              nieve[i].posy=0
            }
          }
          var timer=setTimeout("movenieve()",50)
        }
        for (i=0;i<=nieve_cantidad;i++) {
          document.write("<span id='s"+i+"' style='z-index: 100000;position:fixed;top:-"+nieve_cantidadsize+"'>"+nieve_letra+"</span>")
        }
        if (browserok) {
          window.onload=initnieve
        }
      </script>
    @endif
    <script>

      $(document).on('click','#change_language',function(){
        var lang=$(this).attr('data-lang');
        $.ajax({
          url:'change-lang/'+lang,
          type:'get',
          success:function(data){
            location.reload()
          }
        })
      })

      toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }

      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-77263549-1');
      $('#pri').owlCarousel({
        loop:true,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
      })
      $('#seg').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:4
          }
        }
      })
      $('#ter').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:4
          }
        }
      })
      $(document).on('click','.hoverl_6R',function(){
          $(this).attr('id','ver')
      })
      $(document).on('click','.closeIcon_1U',function(){
        $('.hoverl_6R').removeAttr('id')
      })
      setTimeout(function () {
        if(!$('.hoverl_6R').attr('id')){
          $('.hoverl_6R').trigger('click')
        }
      }, 15000);
      function removeChat(){
        $('jdiv').remove()
        $('#jivo-iframe-container').remove()
      }
      @php
        if($time < date('H:i:s',strtotime('07:30:00')) || $time > date('H:i:s',strtotime('12:00:00')) && $time < date('H:i:s',strtotime('13:00:00')) || $time > date('H:i:s',strtotime('16:30:00'))){ 
      @endphp
        setInterval(removeChat, 1000)
      @php } @endphp
      @php 
        $hoy = getdate();
        if($hoy['weekday'] == 'Saturday' || $hoy['weekday'] == 'Sunday') { 
      @endphp
        setInterval(removeChat, 1000)
      @php } @endphp
    </script>
  @yield('scripts')
  </body>
</html>
