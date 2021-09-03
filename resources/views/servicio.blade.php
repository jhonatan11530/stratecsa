@extends('layouts.plantilla-sitio')

@section('content')

    <section class="page-title" style="background-image:url(images/background/2.jpg)">

        <div class="auto-container">

            <div class="container">

                 <h2>Nuestros servicios</h2>

                <div class="text">Contamos con múltiples servicios que te ayudarán a la solución <br>de tus problemas IT y al cumplimiento de tus metas.

                </div>

                <div class="big-letter">Stra<span>tec</span>sa

                </div>

            </div>

        </div>

    </section>

    <!-- What Services We Offer -->

        <div id="rs-services" class="rs-services">

            <div class="container">

                <div class="sec-title" style="justify-content: center;">

                    <h2>Que servicios ofrecemos?</h2>

                    <h4 class="subtitle">Do you want to improve the online visibility of your brand and to your website?</h4>                              

                </div>

            </div>

            <div class="container">

                <div class="row services-wrap">

                    <div class="col-md-5 col-sm-12 text-right service-col-left">

                        <div class="services-item">

                            <div class="services-desc">

                                <h2 class="services-title"><a href="service-details.html">Web Analytics</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>

                            </div>                               

                            <div class="glyph-icon flaticon-chart"></div>

                        </div>

                        <div class="services-item">

                            <div class="services-desc">

                                <h2 class="services-title"><a href="service-details.html">Pay-Per-Click</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>

                            </div>

                            <div class="services-icon">

                                <div class="glyph-icon flaticon-tap"></div>

                            </div>

                        </div>

                        <div class="services-item">

                            <div class="services-desc">

                                <h2 class="services-title"><a href="service-details.html">SEO Services</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>

                            </div>

                            <div class="glyph-icon flaticon-seo-label"></div>

                        </div>

                    </div>

                    <div class="col-md-2 col-sm-12 text-center service-col-center">

                        <img src="{{URL::asset('images/services/seo-professional.png')}}" alt="Portfolio Image" />

                    </div>

                    <div class="col-md-5 col-sm-12 right-icon service-col-right">

                        <div class="services-item">

                            <div class="glyph-icon flaticon-settings"></div>

                            <div class="services-desc">

                                <h2 class="services-title"><a href="service-details.html">SEO Link BUilding</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>

                            </div>

                        </div>

                        <div class="services-item">

                            <div class="glyph-icon flaticon-technology"></div>

                            <div class="services-desc">

                                <h2 class="services-title"><a href="service-details.html">Site Mapping</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>

                            </div>

                        </div>

                        <div class="services-item">

                            <div class="glyph-icon flaticon-rocket-ship"></div>

                            <div class="services-desc">

                                <h2 class="services-title"><a href="service-details.html">Site Auditing</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>

                            </div>

                        </div>

                    </div>   

                </div>

            </div>

        </div>

        <!-- Services End -->

  

@endsection