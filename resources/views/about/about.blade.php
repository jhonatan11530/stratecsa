@extends('layouts.plantilla-sitio')
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{url('css/style2.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/style-about.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/modal-video.min.css')}}">
  <style type="text/css">
    .features{
      background: url(http://upai.themeebit.com/images/1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      padding: 45px 0 0;
      background-attachment: fixed;
      position: relative;    
      z-index: 2;
    }
    span.fa.fa-play {
      color: white;
      font-size: 5rem;
      margin: 1rem;
      cursor: pointer;
    }
    .case-section .image-column .image .play-btn .play-inner {
      position: relative;
      padding-left: 70px;
      padding-top: 5px;
    }
    footer .footer_logo ul li a {
      padding: 0 !important;
    }
    .image .play-btn {
      position: absolute;
      right: 13rem;
      bottom: 16rem;
      padding: 8px 20px;
      display: inline-block;
      /* background-color: #009cda; */
      -moz-box-shadow: 0px 4px 12px rgba(0,0,0,0.20);
      -ms-box-shadow: 0px 4px 12px rgba(0,0,0,0.20);
      -o-box-shadow: 0px 4px 12px rgba(0,0,0,0.20);
      -webkit-box-shadow: 0px 4px 12px rgba(0,0,0,0.20);
      box-shadow: 0px 4px 12px rgba(0,0,0,0.20);
    }
    .business-video-icon-hv2 {
      position: absolute;
      width: 100%;
      left: 0;
      top: 0;
      text-align: center;
      padding: 80px 10px;
    }
    .features::after,.counter_area::after{
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background: rgba(39, 52, 61, 0.85);
    }
    .feature_image i{
      color: #fff;
      font-size: 35px;
      display: inline-block;
    }
    .feature_info h4{
      color: #009cda;
      font-size: 24px;
      text-transform: uppercase;
      font-weight: 700;
      margin: 9px 0 19px;
    }
    .feature_info p{
      color: #fff;
      font-size: 16px;
      line-height: 26px;
      margin-bottom: 8rem;
    }
    .single_feature{
      text-align: center;
    }
    .single_feature:hover .feature_image i{
      transform: rotate(30deg);
      color: #42c37a;
    }
    .title_style h2::before, .title_style h2::after {
      position: absolute;
      content: "";
      bottom: 0;
    }
    :after, :before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    .title_style h2::after {
      background: #021a26;
      width: 120px;
      height: 1px;
      left: 0;
      bottom: 2px;
      z-index: 1;
    }
    .title_style h2::before, .title_style h2::after {
      position: absolute;
      content: "";
      bottom: 0;
    }
    .progress_area {
      margin-top: 152px;
    }
    a.btn1, .btn1 {
      display: inline-block;
      color: #fff;
      background: #009cda;
      text-transform: capitalize;
      font-size: 16px;
      line-height: 50px;
      height: 50px;
      border: 0;
      padding: 0 29px;
      font-weight: 600;
      z-index: 2;
      position: relative;
    }
    .abt_info h4, .progress_area_title h4 {
      color: #27343d;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 18px;
    }
    :after, :before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    .item:not(.no-padding) {
      display: block;
      width: 100%;
      height: 200px;
    }
    .item img {
      height: 100%;
      width: 100%;
    }
    .brand-itemv1 {
      height: 150px !important;
    }
    @media only screen and (max-width: 480px){
      h2.tamañotitulo{
        font-size: 40px !important;
      }
    }
  </style>
@endsection   
@section('content')
	<section class="page-title" style="background-image:url(images/background/2.jpg)" style="margin-bottom: 4rem;">
    <div class="auto-container">
      <div class="container">
        <h2 class="tamañotitulo">@lang('messages.acerca_nosotros')</h2>
        <div class="text">@lang('messages.mensaje_contactenos')</div>
        <div class="big-letter">Stra<span>tec</span>sa</div>
      </div>
    </div>
	</section>
	<section class="sidebar-enlaceDatos testimonial-section-two" style=" background-color: #f7f7f7;  background-image:url(images/background/pattern-14.png)">
    <div class="auto-container">
      <div class="row clearfix">                
        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12 hidden-xs">
          <div class="image business-video" style="max-width: 100%; margin-top: -3rem;">
            <img src="{{url('images/video_img_2.png')}}" alt="" />
            <div class="play-btn">
              <div class="play-inner">
                <a class="js-modal-btn" data-video-id="-1_AA1GebKs?autoplay=0">
                  <span class="fa fa-play"></span><h3></h3>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--Content Column-->
        <div class="content-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column">
            <div class="full" style="margin-top: 3rem;">
              <div class="main_heading">
                <h2>@lang('messages.welcome_to')<span>Stratecsa</span></h2>
              </div>
                   @lang('messages.bienvenida')                       
            </div>        
            {{--<div class="big-letter">S</div>--}}                  
          </div>
        </div>                
      </div>
    </div>
  </section>
  <section class="features jarallax">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="single_feature">
						<div class="feature_image">
							<i class="icofont icofont-globe-alt"></i>
						</div>
						<div class="feature_info">
							<h4>@lang('messages.mision')</h4>
							<p style="text-align: justify;">@lang('messages.mensaje_mision')</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6" style="text-align: justify;">
					<div class="single_feature">
						<div class="feature_image">
							<i class="icofont icofont-briefcase"></i>	
						</div>
						<div class="feature_info">
							<h4>@lang('messages.vision')</h4>
							<p style="text-align: justify;">@lang('messages.mensaje_vision')</p>
						</div>
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
                  <img src="images/br1.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/br2.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/br3.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/br4.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/br5.png" alt="#" />
                </div>
                <div class="item">
                  <img src="images/br6.png" alt="#" />
                </div>                      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
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
  <script src="{{ url('js/owl.carousel.js')}}"></script>
  <script src="{{ url('js/menumaker.js')}}"></script>
  <script src="{{ url('js/custom.js')}}"></script>
  <script src="{{url('js/modal-video.min.js')}}"></script>
  <script src="{{url('js/jquery-modal-video.min.js')}}"></script>
  <script>
    $(".js-modal-btn").modalVideo();
  </script>
@endsection
@endsection

