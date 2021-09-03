@extends('layouts.plantilla-sitio')
@section('styles')
  <style type="text/css">
    .kc-title-wrap.left.dark .kc_title {
      text-align: left;
      padding: 10px 0;
    }
    .kc-title-wrap .title-wrapper .kc_title {
      margin: 0;
    }
    .kc-title-wrap.dark .kc_title {
      color: #42a5f5;
      text-align: center;
      text-transform: uppercase;
      font-weight: 700;
    }
    .padding-top-50 {
      padding-top: 50px !important;
    }
    .section-contact textarea, .section-contact input:not(.btn), .section-contact select {
      width: 100%;
      max-width: 100%;
      background: #fafafa;
      border: none;
      margin: 0 0 30px;
      padding: 10px 30px;
      font-size: 16px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
      -ms-border-radius: 50px;
      -o-border-radius: 50px;
      -webkit-transition: all 0.3s ease-in-out 0s;
      -o-transition: all 0.3s ease-in-out 0s;
      transition: all 0.3s ease-in-out 0s;
      font-style: italic;
      height: auto;
      color: #797979;
    }
    .btn_submit button:hover {
      background: #338ed8;
      transition: .3s all ease-in-out;
    }
    .btn_submit button {
      background: #42a5f5;
      margin-top: -1rem;
      color: #ffffff;
      border: none;
      padding: 10px 55px;
      margin: 0 auto;
      text-align: center;
      display: block;
      border-radius: 4px;
      transition: .3s all ease-in-out;
    }
    footer .footer_logo ul li a {
      padding: 0 !important;
    }
    iframe{
      height: -webkit-fill-available !important;
    }
    @media only screen and (max-width: 480px){
      h2.tamañotitulo{
        font-size: 40px !important;
      }
      h3.tamaño1{
        font-size:25px !important;
      }
      h3.kc_title{
        font-size:15px !important;
      }
    }
  </style>
@endsection
@section('content')
  <section class="page-title" style="background-image:url(images/pricing-table-header-bg.jpg)">
    <div class="auto-container">
      <div class="container">
        <h2 class="tamañotitulo">@lang('messages.contactenos')</h2>
        <div class="text">@lang('messages.mensaje_contactenos2')</div>
        <div class="big-letter">Stra<span>tec</span>sa</div>
      </div>
    </div>
  </section>
  <!-- Map And Address Area____________________ -->
  <div class="mapAddress">
    <div class="container clear_fix">
      <div class="google_map float_left">
        <h3 style="font-weight: 700;color: #292a2e; margin-bottom: 1rem;" class="tamaño1">{{strtoupper(__('messages.nuestra'))}} <span class="text-azulCorp">{{strtoupper(__('messages.locacion'))}} </span></h3>
        <div id="googleMap" style="height:400px; width:100%;"></div>
      </div> 
      <!-- End of .google_map -->
      <div class="contactUs_address float_right">
        <h3 style="font-weight: 700;color: #292a2e;" class="tamaño1"></h3>
        <p>@lang('messages.mensaje_ubicacion')</p>
        <div class="single_address clear_fix">
          <div class="icon p_color_bg border_round float_left">
            <i class="fa fa-map-marker"></i>
          </div>
          <div class="text float_left">
            <h6>@lang('messages.ubicacion')</h6>
            <span>@lang('messages.dir')</span>
          </div>
        </div> 
        <!-- End of .single_address -->
        <div class="single_address clear_fix">
          <div class="icon p_color_bg border_round float_left"><i class="fa fa-phone" aria-hidden="true"></i></div>
          <div class="text float_left">
            <h6>@lang('messages.lineas_telefonica')</h6>
            <span>01 8000 180028 - (57) 2 395 95 95 -</p> 315 472 5104</span>
          </div>
        </div> <!-- End of .single_address -->
        <div class="single_address clear_fix">
          <div class="icon p_color_bg border_round float_left"><i class="fa fa-envelope"></i></div>
          <div class="text float_left">
            <h6>Email</h6>
            <span>info@stratecsa.com</span>
          </div>
        </div> 
        <!-- End of .single_address -->
      </div> 
      <!-- End of .contactUs_address -->
    </div> 
    <!-- End of .container -->
  </div> 
  <!-- End of .mapAddress -->
  <section class="" style="background-color: white; margin-top: -10rem; padding-top:3rem;">
    <div class="get-in-touch-centent container" >
      <div class="row">
        <div class="col-sm-7">
          <div class="kc-elm kc-css-839835 kc-title-wrap  left dark">
            <div class="title-wrapper">
            <center>
              <h3 class="kc_title">@lang('messages.envianos_mensaje')</h3>
            </center>
            </div>
          </div>
          <div class="kc-elm kc-css-477184 kc_text_block">
            <p>@lang('messages.mensaje_enviar')</p>
          </div>
          <!-- //title -->
          <div class="contact-form-6 padding-top-50">
            <form action="/email/contacto" method="post">
              {{ csrf_field() }}
              <div class="section-contact">
                <div class="row contant-inner">
                  <div class="col-md-12">
                    <span class="wpcf7-form-control-wrap your-name">
                      <input type="text" name="name" required placeholder="Nombre" class="require">
                    </span>
                  </div>
                  <div class="col-md-12">
                    <span class="wpcf7-form-control-wrap number-339">
                      <input type="text" name="telefono" required placeholder="Teléfono" class="require">
                    </span>
                  </div>
                  <div class="col-md-12">
                    <span class="wpcf7-form-control-wrap your-email">
                      <input type="email" name="email" required placeholder="Correo electrónico" class="require" data-valid="email" data-error="Email should be valid.">
                    </span>
                  </div>
                  <div class="col-md-12">
                    <span class="wpcf7-form-control-wrap insterted-plan">
                      <select name="departamento" required class="form-control formu">
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
                    </span>
                  </div> 
                  @if(!empty($id))
                    <input type="hidden" name="id_contacto" value="{{$id}}"> 
                  @endif
                  <div class="col-md-12">
                    <span class="wpcf7-form-control-wrap your-message">
                      <textarea type="text" id="form10" class="md-textarea form-control" rows="3" name="mensaje" required placeholder="Escriba su mensaje (*)"></textarea>
                    </span>
                  </div>
                </div>
                <center><div class="g-recaptcha" data-sitekey="6Lf0iZkUAAAAABOKQYBbai14dw0L25JBmF6lUHVb"></div></center>
                <div class="response"></div>
                <div id="error-g"></div>
                <div class="btn_submit">
                  
                  <button type="submit" class="submitForm" form-type="contact">@lang('messages.enviar_mensaje')</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- //col-sm-7 -->
        <div class="col-sm-4 pull-right">
          <div class="kc-elm kc-css-439636 kc_col-sm-5 kc_column_inner kc_col-sm-5 margin-top-60">
            <div class="kc_wrapper kc-col-inner-container">
              <div class="kc_single_image">
                <figure><img src="{{ URL::asset('images/contacto.png') }}" alt=""></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@section('scripts')
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdP4giOMpbNB4BpHqBIAZz_ydA9Bf1I9A&callback=initMap" async defer></script>
  <script>
    var user_lat, user_lng;
    var map;

    function initMap() {
      map = new google.maps.Map(document.getElementById('googleMap'), {
        center: {
          lat: 3.468923699999999,
          lng: -76.52660430000003
        },
        zoom: 14,
        scrollwheel: false
      });
      var marker = new google.maps.Marker({
        position: {
          lat: 3.468923699999999,
          lng: -76.52660430000003
        },
        map: map,
        title: 'Hello World!'
      });
    }
  </script>
@endsection
@endsection