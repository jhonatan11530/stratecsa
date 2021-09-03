@extends('layouts.plantilla-sitio')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        /* @media (min-width: 1200px){
            .container {
                width: 100%;
            }
        } */
        .col-md-6.col-sm-6.wow.fadeInDown.animated.animated {
            margin-bottom: 1.5rem;
        }
        .row.clearfix.container-fluid {
            margin-bottom: 6rem;
        }
        .col-md-6.col-sm-6.wow.fadeInDown {
            margin-bottom: 1.5rem;
        }
        footer .footer_logo ul li a {
            padding: 0 !important;
        }
        @media only screen  and (max-width: 480px){
            h2.tamañotitulo{
                font-size: 40px !important;
            }
            h3.tamaño{
                font-size: 25px !important;
            }
        }
        h3{
            font-size: 20px !important;
        }
    </style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(images/background/cobertura.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2 class="tamañotitulo">{{ ucfirst(strtolower(__('messages.cobertura'))) }}</h2>
                <div class="text"> {{ __('messages.cobertura_1') }} <br> {{ __('messages.cobertura_2') }}
                </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>  
    <!--Testimonial Section Two-->
    <section class="container testimonial-section-two">
        <div class="auto-container">
            <div class="col-md-12">
                <div class="head-title text-center">
                    <h3 class="tamaño" style="font-weight: 700;color: #292a2e; margin-bottom: 1rem;">{{strtoupper(__('messages.nuestra')) }} <span class="text-azulCorp">{{ strtoupper(__('messages.cobertura')) }}</span></h3>                        
                    <div class="separator3"></div>
                    <p class="text-mega m-top-10" style="margin-bottom: 4rem; text-align: justify;"><strong>STRATECSA </strong>{{ __('messages.cobertura_3') }}
                    </p>
                </div>
            </div>
            <div class="row clearfix container-fluid">                
               <!--Image Column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="image" style="max-width: 100%;">
                        <img src="{{URL::asset('images/mapa_web.png')}}" alt="" />
                    </div>
                </div> 
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep1">Antioquia</h3>   
                                {{-- <ul class="list-unstyled" id="lstdep1" style="display: none;">
                                    <li>
                                        Abriaqui
                                    </li>
                                    <li>
                                        Anza
                                    </li>
                                    <li>
                                        Amalfi
                                    </li>
                                    <li>
                                        Briceño
                                    </li>
                                    <li>
                                        Buritica
                                    </li>
                                    <li>
                                        Campamento
                                    </li>
                                    <li>
                                        Caramanta
                                    </li>
                                    <li>
                                        Cocorna
                                    </li>
                                    <li>
                                        Montebello
                                    </li>
                                    <li>
                                        Puerto Trifunfo
                                    </li>
                                    <li>
                                        Sabanalarga
                                    </li>
                                    <li>
                                        San Francisco
                                    </li>
                                    <li>
                                        Yondo
                                    </li>
                                    <li>
                                        Granada
                                    </li>
                                    <li>
                                        Murindo
                                    </li>
                                    <li>
                                        Peque
                                    </li>
                                    <li>
                                        Abejorral
                                    </li>
                                    <li>
                                        Anori
                                    </li>
                                    <li>
                                        Argelia
                                    </li>
                                    <li>
                                        Belmira
                                    </li>
                                    <li>
                                        Concepción
                                    </li>
                                    <li>
                                        Ituango
                                    </li>
                                    <li>
                                        Nariño
                                    </li>
                                    <li>
                                        La Unión
                                    </li>
                                    <li>
                                        Nechi
                                    </li>
                                    <li>
                                        Retiro
                                    </li>
                                    <li>
                                        San Andres
                                    </li>
                                    <li>
                                        San Jose de la Montaña
                                    </li>
                                    <li>
                                        San Luis
                                    </li>
                                    <li>
                                        San Vicente
                                    </li>
                                    <li>
                                        Titiribi
                                    </li>
                                    <li>
                                        Toledo
                                    </li>
                                    <li>
                                        Sonson
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep2">Arauca</h3>
                                {{-- <ul class="list-unstyled" id="lstdep2" style="display: none;">
                                    <li>
                                        Arauca
                                    </li>
                                    <li>
                                        Arauquita
                                    </li>
                                    <li>
                                        Fortul
                                    </li>
                                    <li>
                                        Puerto Rondon
                                    </li>
                                    <li>
                                        Saravena
                                    </li>
                                    <li>
                                        Tame
                                    </li>
                                </ul>--}}
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep28">Atlántico</h3>
                                {{-- <ul class="list-unstyled" id="lstdep28" style="display: none;">
                                    <li>
                                        Barranquilla
                                    </li>
                                </ul> --}}
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep3">Bolivar</h3> 
                                {{-- <ul class="list-unstyled" id="lstdep3" style="display: none;">
                                    <li>Cartagena</li>
                                    <li>El Carmen de Bolivar</li>
                                    <li>
                                        Achi
                                    </li>
                                    <li>
                                        Arenal
                                    </li>
                                    <li>
                                        Arroyohondo
                                    </li>
                                    <li>
                                        Altos del Rosario
                                    </li>
                                    <li>
                                        Arjona
                                    </li>
                                    <li>
                                        Barranco de Loba
                                    </li>
                                    <li>
                                        Calamar
                                    </li>
                                    <li>
                                        Cantagallo
                                    </li>
                                    <li>
                                        Cicuco
                                    </li>
                                    <li>
                                        Clemencia
                                    </li>
                                    <li>
                                        Cordoba
                                    </li>
                                    <li>
                                        El Guamo
                                    </li>
                                    <li>
                                        El Peñon
                                    </li>
                                    <li>
                                        Hatillo de Loba
                                    </li>
                                    <li>
                                        Mahates
                                    </li>
                                    <li>
                                        Mahates - Malagana 
                                    </li>
                                    <li>
                                        Magangue
                                    </li>
                                    <li>
                                        Margarita
                                    </li>
                                    <li>
                                        Maria la Baja
                                    </li>
                                    <li>
                                        Montecristo
                                    </li>
                                    <li>
                                        Morales
                                    </li>
                                    <li>
                                        Norosi
                                    </li>
                                    <li>
                                        Mompos
                                    </li>
                                    <li>
                                        Pinillos
                                    </li>
                                    <li>
                                        Regidor
                                    </li>
                                    <li>
                                        Rio Viejo
                                    </li>
                                    <li>
                                        San Cristobal
                                    </li>
                                    <li>
                                        San Estanislao
                                    </li>
                                    <li>
                                        San Fernando
                                    </li>
                                    <li>
                                        San Jacinto
                                    </li>
                                    <li>
                                        San Jacinto del Cauca
                                    </li>
                                    <li>San Juan Nepomuceno</li>
                                    <li>San Martin de Loba</li>
                                    <li>
                                        San Pablo
                                    </li>
                                    <li>
                                        Santa Catalina
                                    </li>
                                    <li>Santa Rosa</li>
                                    <li>
                                        Santa Rosa del Sur
                                    </li>
                                    <li>
                                        Simiti
                                    </li>
                                    <li>
                                        Soplaviento
                                    </li>
                                    <li>
                                        Santa Rosa
                                    </li>
                                    <li>
                                        Talaigua Nuevo
                                    </li>
                                    <li>
                                        Tiquisio
                                    </li>
                                    <li>Turbaco</li>
                                    <li>
                                        Turbana
                                    </li>
                                    <li>
                                        Villanueva
                                    </li>
                                    <li>
                                        Zambrano
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep4">Boyacá</h3>
                                {{-- <ul class="list-unstyled" id="lstdep4" style="display: none;">
                                    <li>Tunja</li>
                                    <li>
                                        Soraca
                                    </li>
                                    <li>
                                        Cubara
                                    </li>
                                    <li>
                                        Aquitania
                                    </li>
                                    <li>
                                        Almeida
                                    </li>
                                    <li>
                                        Aracabuco
                                    </li>
                                    <li>
                                        Belén
                                    </li>
                                    <li>
                                        Berbeo
                                    </li>
                                    <li>
                                        Beteitiva
                                    </li>
                                    <li>
                                        Boyacá
                                    </li>
                                    <li>
                                        Briceño
                                    </li>
                                    <li>
                                        Buenavista
                                    </li>
                                    <li>
                                        Busbanza
                                    </li>
                                    <li>
                                        Cerinza
                                    </li>
                                    <li>
                                        Chinavita
                                    </li>
                                    <li>
                                        Caldas
                                    </li>
                                    <li>
                                        Chiquinquirá
                                    </li>
                                    <li>
                                        Campohermoso
                                    </li>
                                    <li>
                                        Gachantiva
                                    </li>
                                    <li>
                                        Boavita
                                    </li>
                                    <li>
                                        Chiquiza
                                    </li>
                                    <li>
                                        Chitaraque
                                    </li>
                                    <li>
                                        Chivata
                                    </li>
                                    <li>
                                        Cienega
                                    </li>
                                    <li>
                                        Combita
                                    </li>
                                    <li>
                                        Corrales
                                    </li>
                                    <li>
                                        Coper
                                    </li>
                                    <li>
                                        Covarachia
                                    </li>
                                    <li>
                                        Cucaita
                                    </li>
                                    <li>
                                        Cuitiva
                                    </li>
                                    <li>Duitama</li>
                                    <li>
                                        Rondon
                                    </li>
                                    <li>
                                        El Espino
                                    </li>
                                    <li>
                                        El Cocuy
                                    </li>
                                    <li>
                                        Garagoa
                                    </li>
                                    <li>
                                        Guacamayas
                                    </li>
                                    <li>
                                        Firavitoba
                                    </li>
                                    <li>
                                        Floresta
                                    </li>
                                    <li>
                                        Chiscas
                                    </li>
                                    <li>
                                        Chita
                                    </li>
                                    <li>
                                        Guateque
                                    </li>
                                    <li>
                                        Guayata
                                    </li>
                                    <li>Guican</li>
                                    <li>
                                        Jericó
                                    </li>
                                    <li>
                                        Iza
                                    </li>
                                    <li>
                                        La Victoria
                                    </li>
                                    <li>
                                        La Capilla
                                    </li>
                                    <li>
                                        La Uvita
                                    </li>
                                    <li>
                                        Labranzagrande
                                    </li>
                                    <li>
                                        Macanal
                                    </li>
                                    <li>
                                        Maripi
                                    </li>
                                    <li>
                                        Mongui
                                    </li>
                                    <li>
                                        Moniquira
                                    </li>
                                    <li>
                                        Miraflores
                                    </li>
                                    <li>
                                        Motavita
                                    </li>
                                    <li>
                                        Nobsa
                                    </li>
                                    <li>
                                        Muzo
                                    </li>
                                    <li>
                                        Nuevo Colon
                                    </li>
                                    <li>
                                        Oicata
                                    </li>
                                    <li>
                                        Gameza
                                    </li>
                                    <li>
                                        Guican
                                    </li>
                                    <li>
                                        Otanche
                                    </li>
                                    <li>
                                        Pachavita
                                    </li>
                                    <li>
                                        Paez
                                    </li>
                                    <li>Paipa</li>
                                    <li>
                                        Chivor
                                    </li>
                                    <li>
                                        Jenesano
                                    </li>
                                    <li>
                                        Pajarito
                                    </li>
                                    <li>
                                        Samaca
                                    </li>
                                    <li>
                                        Panqueba
                                    </li>
                                    <li>
                                        Pauna
                                    </li>
                                    <li>
                                        Paya
                                    </li>
                                    <li>
                                        Puerto Boyacá
                                    </li>
                                    <li>
                                        Paz de Río
                                    </li>
                                    <li>
                                        Pesca
                                    </li>
                                    <li>
                                        Pisba
                                    </li>
                                    <li>
                                        Quipama
                                    </li>
                                    <li>
                                        Raquira
                                    </li>
                                    <li>
                                        Ramiriqui
                                    </li>
                                    <li>Sachica</li>
                                    <li>
                                        Soata
                                    </li>
                                    <li>
                                        Saboya
                                    </li>
                                    <li>
                                        Tibana
                                    </li>
                                    <li>
                                        San Eduardo
                                    </li>
                                    <li>
                                        San Jose de Pare
                                    </li>
                                    <li>
                                        San Luis de Gaceno
                                    </li>
                                    <li>
                                        San Miguel de Sema
                                    </li>
                                    <li>
                                        Zetaquira
                                    </li>
                                    <li>
                                        San Pablo de Borbur
                                    </li>
                                    <li>
                                        Santa Maria
                                    </li>
                                    <li>
                                        Mongua
                                    </li>
                                    <li>
                                        Santa Rosa de Viterbo
                                    </li>
                                    <li>
                                        Santana
                                    </li>
                                    <li>
                                        Sativasur
                                    </li>
                                    <li>
                                        Santa Sofia
                                    </li>
                                    <li>
                                        Siachoque
                                    </li>
                                    <li>
                                        Sora
                                    </li>
                                    <li>
                                        Socha
                                    </li>
                                    <li>
                                        Sogamoso
                                    </li>
                                    <li>
                                        Somondoco
                                    </li>
                                    <li>
                                        Sotaquira
                                    </li>
                                    <li>
                                        Susacon
                                    </li>
                                    <li>
                                        Sutamarchan
                                    </li>
                                    <li>
                                        Tasco
                                    </li>
                                    <li>
                                        Sutatenza
                                    </li>
                                    <li>
                                        Tibasosa
                                    </li>
                                    <li>
                                        Tinjaca
                                    </li>
                                    <li>
                                        Tipacoque
                                    </li>
                                    <li>
                                        Toca
                                    </li>
                                    <li>
                                        San Mateo
                                    </li>
                                    <li>
                                        Topaga
                                    </li>
                                    <li>
                                        Sativanorte
                                    </li>
                                    <li>
                                        Tenza
                                    </li>
                                    <li>
                                        Socota
                                    </li>
                                    <li>
                                        Tota
                                    </li>
                                    <li>
                                        Tunungua
                                    </li>
                                    <li>
                                        Turmeque
                                    </li>
                                    <li>
                                        Tuta
                                    </li>
                                    <li>
                                        Tutaza
                                    </li>
                                    <li>
                                        Togui
                                    </li>
                                    <li>
                                        Umbita
                                    </li>
                                    <li>
                                        Villa de Leyva
                                    </li>
                                    <li>
                                        Ventaquemada
                                    </li>
                                    <li>
                                        Viracacha
                                    </li>
                                </ul> --}}
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep5">Caldas</h3>      
                                {{-- <ul class="list-unstyled" id="lstdep5" style="display: none;">
                                    <li>Manizales</li>
                                    <li>
                                        Aguadas
                                    </li>
                                    <li>Chinchina</li>
                                    <li>
                                        Anserma
                                    </li>
                                    <li>
                                        Filadelfia
                                    </li>
                                    <li>
                                        La Merced
                                    </li>
                                    <li>
                                        Marmato
                                    </li>
                                    <li>
                                        Aranzazu
                                    </li>
                                    <li>
                                        Belalcázar
                                    </li>
                                    <li>
                                        Norcasia
                                    </li>
                                    <li>
                                        Pacora
                                    </li>
                                    <li>
                                        Palestina
                                    </li>
                                    <li>La Dorada</li>
                                    <li>
                                        Marquetalia
                                    </li>
                                    <li>Neira</li>
                                    <li>
                                        Salamina
                                    </li>
                                    <li>
                                        Samana
                                    </li>
                                    <li>
                                        Manzanares
                                    </li>
                                    <li>
                                        Marulanda
                                    </li>
                                    <li>
                                        Victoria
                                    </li>
                                    <li>
                                        Pensilvania
                                    </li>
                                    <li>
                                        Riosucio
                                    </li>
                                    <li>
                                        Risaralda
                                    </li>
                                    <li>
                                        San José
                                    </li>
                                    <li>Supia</li>
                                    <li>Villamaria</li>
                                    <li>
                                        Viterbo
                                    </li>
                                </ul> --}}
                            </div>                      
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep6">Caquetá</h3> 
                                {{-- <ul class="list-unstyled" id="lstdep6" style="display: none;">
                                    <li>
                                        Albania
                                    </li>
                                    <li>
                                        Belén de los Andaquíes
                                    </li>
                                    <li>
                                        Cartagena del Chaira
                                    </li>
                                    <li>
                                        Curillo
                                    </li>
                                    <li>
                                        El Doncello
                                    </li>
                                    <li>
                                        El Paujil
                                    </li>
                                    <li>
                                        Florencia
                                    </li>
                                    <li>
                                        La Montañita
                                    </li>
                                    <li>
                                        Milán
                                    </li>
                                    <li>
                                        Morelia
                                    </li>
                                    <li>
                                        Puerto Rico
                                    </li>
                                    <li>
                                        San José del Fragua
                                    </li>
                                    <li>
                                        San Vicente del Caguán
                                    </li>
                                    <li>
                                        Solano
                                    </li>
                                    <li>
                                        Solita
                                    </li>
                                    <li>
                                        Valparaiso
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep7">Casanare</h3>    
                                {{-- <ul class="list-unstyled" id="lstdep7" style="display: none;">
                                    <li>Aguazul</li>
                                    <li>
                                        Chameza
                                    </li>
                                    <li>
                                        Hato Corozal
                                    </li>
                                    <li>
                                        Yopal
                                    </li>
                                    <li>
                                        La Salina
                                    </li>
                                    <li>
                                        Mani
                                    </li>
                                    <li>
                                        Nunchia
                                    </li>
                                    <li>
                                        Paz de Ariporo
                                    </li>
                                    <li>
                                        Orocue
                                    </li>
                                    <li>
                                        Pore
                                    </li>
                                    <li>
                                        Recetor
                                    </li>
                                    <li>
                                        Sabanalarga
                                    </li>
                                    <li>
                                        Sacama
                                    </li>
                                    <li>
                                        San Luis de Palenque
                                    </li>
                                    <li>
                                        Tamara
                                    </li>
                                    <li>
                                        Tauramena
                                    </li>
                                    <li>
                                        Trinidad
                                    </li>
                                    <li>Villanueva</li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep8">Cauca</h3>
                                {{-- <ul class="list-unstyled" id="lstdep8" style="display: none;">
                                    <li>
                                        Almaguer        
                                    </li>
                                    <li>
                                        Argelia
                                    </li>
                                    <li>
                                        Balboa
                                    </li>
                                    <li>
                                        Bolivar
                                    </li>
                                    <li>
                                        Florencia
                                    </li>
                                    <li>
                                        Buenos Aires
                                    </li>
                                    <li>
                                        Cajibio
                                    </li>
                                    <li>
                                        Caldono
                                    </li>
                                    <li>
                                        Caloto
                                    </li>
                                    <li>
                                        Corinto
                                    </li>
                                    <li>
                                        El Tambo
                                    </li>
                                    <li>
                                        Guachene
                                    </li>
                                    <li>
                                        Guapi
                                    </li>
                                    <li>
                                        Inzá
                                    </li>
                                    <li>
                                        Jambaló
                                    </li>
                                    <li>
                                        La Sierra
                                    </li>
                                    <li>
                                        La Soledad
                                    </li>
                                    <li>
                                        La Vega
                                    </li>
                                    <li>
                                        Lopez
                                    </li>
                                    <li>
                                        Mercaderes
                                    </li>
                                    <li>
                                        Miranda
                                    </li>
                                    <li>
                                        Morales
                                    </li>
                                    <li>
                                        Padilla
                                    </li>
                                    <li>
                                        Páez
                                    </li>
                                    <li>Patía</li>
                                    <li>
                                        Piamonte
                                    </li>
                                    <li>
                                        Piendamó
                                    </li>
                                    <li>Popayán</li>
                                    <li>Puerto Tejada</li>
                                    <li>
                                        Puracé
                                    </li>
                                    <li>
                                        Rosas
                                    </li>
                                    <li>
                                        San Sebastiaán
                                    </li>
                                    <li>
                                        Santa Rosa
                                    </li>
                                    <li>
                                        Santander de Quilichao
                                    </li>
                                    <li>
                                        Silvia
                                    </li>
                                    <li>
                                        Sotará
                                    </li>
                                    <li>
                                        Suarez
                                    </li>
                                    <li>
                                        Sucre
                                    </li>
                                    <li>
                                        Timbío
                                    </li>
                                    <li>
                                        Timbiqui
                                    </li>
                                    <li>
                                        Toribio
                                    </li>
                                    <li>
                                        Totoró
                                    </li>
                                    <li>
                                        Villa Rica
                                    </li>
                                </ul> --}}
                            </div>                              
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep9">Cesar</h3>
                                {{-- <ul class="list-unstyled" id="lstdep9" style="display: none;">
                                    <li>
                                        Agustin Codazzi 
                                    </li>
                                    <li>
                                        Astrea
                                    </li>
                                    <li>
                                        Bosconia
                                    </li>
                                    <li>
                                        Chiriguana
                                    </li>
                                    <li>
                                        Chimichagua
                                    </li>
                                    <li>
                                        El Paso
                                    </li>
                                    <li>
                                        Gamarra
                                    </li>
                                    <li>
                                        Gonzalez
                                    </li>
                                    <li>
                                        La Gloria
                                    </li>
                                    <li>
                                        La Jagua de Ibirico
                                    </li>
                                    <li>
                                        Becerril
                                    </li>
                                    <li>
                                        Pailitas
                                    </li>
                                    <li>
                                        Pueblo Bello
                                    </li>
                                    <li>
                                        Rio de Oro
                                    </li>
                                    <li>
                                        La Paz
                                    </li>
                                    <li>
                                        Manaure
                                    </li>
                                    <li>
                                        San Martín
                                    </li>
                                    <li>
                                        San Diego
                                    </li>
                                    <li>
                                        Tamalameque
                                    </li>
                                </ul> --}}
                            </div>                              
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep10">Chocó</h3>
                                {{-- <ul class="list-unstyled" id="lstdep10" style="display: none;">
                                    <li>
                                        Atrato  
                                    </li>
                                    <li>
                                        Bagado
                                    </li>
                                    <li>
                                        Carmen del Darién
                                    </li>
                                    <li>
                                        Certegui
                                    </li>
                                    <li>
                                        Condoto
                                    </li>
                                    <li>
                                        El Canton del San Pablo
                                    </li>
                                    <li>
                                        El Carmen de Atrato
                                    </li>
                                    <li>
                                        Istmina
                                    </li>
                                    <li>
                                        Lloro
                                    </li>
                                    <li>
                                        Medio Baudo
                                    </li>
                                    <li>
                                        Medio San Juan
                                    </li>
                                    <li>
                                        Novita
                                    </li>
                                    <li>
                                        Quibdó
                                    </li>
                                    <li>
                                        Río Iró
                                    </li>
                                    <li>
                                        Río Quito   
                                    </li>
                                    <li>
                                        Riosucio
                                    </li>
                                    <li>
                                        Tado
                                    </li>
                                    <li>
                                        Unión Panamericana
                                    </li>
                                    <li>
                                        San Jose del Palmar
                                    </li>
                                </ul> --}}
                            </div>                              
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep11">Córdoba</h3>    
                                {{-- <ul class="list-unstyled" id="lstdep11" style="display: none;">
                                    <li>
                                        Ayapel
                                    </li>
                                    <li>
                                        Buenavista
                                    </li>
                                    <li>
                                        Chima
                                    </li>
                                    <li>
                                        Cotorra
                                    </li>
                                    <li>
                                        Moñitos
                                    </li>
                                    <li>
                                        Canalete
                                    </li>
                                    <li>
                                        Puerto Libertador
                                    </li>
                                    <li>
                                        San Bernardo del Viento
                                    </li>
                                    <li>
                                        San Carlos
                                    </li>
                                    <li>
                                        Los Córdobas
                                    </li>
                                    <li>
                                        Momil
                                    </li>
                                    <li>
                                        San Jode de Ure
                                    </li>
                                    <li>
                                        Puerto Escondido
                                    </li>
                                    <li>
                                        Purisima
                                    </li>
                                    <li>
                                        Tuchin
                                    </li>
                                    <li>
                                        Valencia
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep12">Cundinamarca</h3>   
                                {{-- <ul class="list-unstyled" id="lstdep12" style="display: none;">
                                    <li>
                                        Arbelaez    
                                    </li>
                                    <li>
                                        Albán
                                    </li>
                                    <li>
                                        Agua de Dios
                                    </li>
                                    <li>
                                        Bojaca
                                    </li>
                                    <li>Caqueza</li>
                                    <li>Chía</li>
                                    <li>
                                        Chipaque
                                    </li>
                                    <li>Choconta</li>
                                    <li>
                                        Cachipay
                                    </li>
                                    <li>Cogua</li>
                                    <li>Cota</li>
                                    <li>
                                        El Colegio
                                    </li>
                                    <li>
                                        El Rosal
                                    </li>
                                    <li>
                                        Fosca
                                    </li>
                                    <li>Funza</li>
                                    <li>
                                        Fuquene
                                    </li>
                                    <li>Fusagasugá</li>
                                    <li>
                                        Gachancipa
                                    </li>
                                    <li>
                                        Gacheta
                                    </li>
                                    <li>Girardot</li>
                                    <li>Guasca</li>
                                    <li>
                                        Anapoima
                                    </li>
                                    <li>
                                        Carmen de Carupa
                                    </li>
                                    <li>
                                        Fomeque
                                    </li>
                                    <li>
                                        Choachi
                                    </li>
                                    <li>
                                        Gama
                                    </li>
                                    <li>
                                        Guayabetal
                                    </li>
                                    <li>
                                        Anolaima
                                    </li>
                                    <li>
                                        Gutierrez
                                    </li>
                                    <li>
                                        Junín
                                    </li>
                                    <li>La Calera</li>
                                    <li>La Mesa</li>
                                    <li>
                                        La Palma
                                    </li>
                                    <li>
                                        Apulo
                                    </li>
                                    <li>
                                        Machetá
                                    </li>
                                    <li>Madrid</li>
                                    <li>
                                        Medina
                                    </li>
                                    <li>Mosquera</li>
                                    <li>
                                        Beltrán
                                    </li>
                                    <li>
                                        Bituima
                                    </li>
                                    <li>
                                        Cabrera
                                    </li>
                                    <li>
                                        Cucunuba
                                    </li>
                                    <li>
                                        Caparrapi
                                    </li>
                                    <li>
                                        El Peñón
                                    </li>
                                    <li>
                                        Pacho
                                    </li>
                                    <li>Paratebueno</li>
                                    <li>Puerto Salgar</li>
                                    <li>
                                        Gachala 
                                    </li>
                                    <li>
                                        Granada
                                    </li>
                                    <li>
                                        Guachetá
                                    </li>
                                    <li>
                                        La Peña
                                    </li>
                                    <li>
                                        Chaguani
                                    </li>
                                    <li>
                                        Lenguazaque
                                    </li>
                                    <li>
                                        Paime
                                    </li>
                                    <li>Sibaté</li>
                                    <li>Silvania</li>
                                    <li>Soacha</li>
                                    <li>Sopo</li>
                                    <li>
                                        Guatavita
                                    </li>
                                    <li>
                                        Quetame
                                    </li>
                                    <li>
                                        San Cayetano
                                    </li>
                                    <li>
                                        San Francisco
                                    </li>
                                    <li>
                                        Subachoque
                                    </li>
                                    <li>
                                        Manta
                                    </li>
                                    <li>
                                        Villagomez
                                    </li>
                                    <li>
                                        Viota
                                    </li>
                                    <li>
                                        Yacopi
                                    </li>
                                    <li>
                                        Guaduas
                                    </li>
                                    <li>
                                        San Antonio del Tequendama
                                    </li>
                                    <li>
                                        Gutaqui
                                    </li>
                                    <li>
                                        San Bernardo
                                    </li>
                                    <li>
                                        Guayabal de Siquima
                                    </li>
                                    <li>
                                        Jerusalén
                                    </li>
                                    <li>
                                        La Vega
                                    </li>
                                    <li>
                                        Nariño
                                    </li>
                                    <li>
                                        Nemocon
                                    </li>
                                    <li>
                                        Nilo
                                    </li>
                                    <li>
                                        Nimaima
                                    </li>
                                    <li>
                                        Nocaima
                                    </li>
                                    <li>Tabio</li>
                                    <li>
                                        Villapinzon
                                    </li>
                                    <li>
                                        Puli
                                    </li>
                                    <li>
                                        Quebradanegra
                                    </li>
                                    <li>
                                        Ricaurte
                                    </li>
                                    <li>
                                        San Juan de Río Seco
                                    </li>
                                    <li>
                                        Suesca
                                    </li>
                                    <li>
                                        Pandi
                                    </li>
                                    <li>
                                        Pasca
                                    </li>
                                    <li>
                                        Quipile
                                    </li>
                                    <li>
                                        Supata
                                    </li>
                                    <li>
                                        Susa
                                    </li>
                                    <li>
                                        Sutatausa
                                    </li>
                                    <li>
                                        Tausa
                                    </li>
                                    <li>
                                        Sasaima
                                    </li>
                                    <li>
                                        Topaipi
                                    </li>
                                    <li>
                                        Sesquile
                                    </li>
                                    <li>
                                        Simijaca
                                    </li>
                                    <li>
                                        Tibacuy
                                    </li>
                                    <li>
                                        Tena
                                    </li>
                                    <li>
                                        Ubala
                                    </li>
                                    <li>
                                        Tocaima
                                    </li>
                                    <li>
                                        Utica
                                    </li>
                                    <li>
                                        Vergara
                                    </li>
                                    <li>
                                        Viani
                                    </li>
                                    <li>Tenjo</li>
                                    <li>Tocancipa</li>
                                    <li>Villa de San Diego de Ubaté</li>
                                    <li>
                                        Tibirita
                                    </li>
                                    <li>
                                        Ubaque
                                    </li>
                                    <li>
                                        Une
                                    </li>
                                    <li>
                                        Venecia
                                    </li>
                                    <li>Villeta</li>
                                    <li>
                                        Zipacón
                                    </li>
                                    <li>Zipaquirá</li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep13">Guaviare</h3>   
                                {{-- <ul class="list-unstyled" id="lstdep13" style="display: none;">
                                    <li>
                                        Calamar
                                    </li>
                                    <li>
                                        El Retorno
                                    </li>
                                    <li>
                                        San Jose del Guaviare
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep14">Huila</h3>  
                                {{-- <ul class="list-unstyled" id="lstdep14" style="display: none;">
                                    <li>
                                        Acevedo 
                                    </li>
                                    <li>
                                        Agrado
                                    </li>
                                    <li>
                                        Aipe
                                    </li>
                                    <li>
                                        Algeciras
                                    </li>
                                    <li>
                                        Altamira
                                    </li>
                                    <li>
                                        Baraya
                                    </li>
                                    <li>
                                        Colombia
                                    </li>
                                    <li>
                                        Elias
                                    </li>
                                    <li>
                                        Gigante
                                    </li>
                                    <li>
                                        Guadalupe
                                    </li>
                                    <li>
                                        Hobo
                                    </li>
                                    <li>
                                        Iquira
                                    </li>
                                    <li>
                                        Isnos
                                    </li>
                                    <li>
                                        La Argentina
                                    </li>
                                    <li>
                                        La Plata
                                    </li>
                                    <li>
                                        Nataga
                                    </li>
                                    <li>
                                        Oporapa
                                    </li>
                                    <li>
                                        Paicol
                                    </li>
                                    <li>
                                        Palermo
                                    </li>
                                    <li>
                                        Palestina
                                    </li>
                                    <li>
                                        Pital
                                    </li>
                                    <li>
                                        Rivera
                                    </li>
                                    <li>
                                        Saladoblanco
                                    </li>
                                    <li>
                                        San Agustin
                                    </li>
                                    <li>
                                        Santa Maria
                                    </li>
                                    <li>
                                        Suaza
                                    </li>
                                    <li>
                                        Tarqui
                                    </li>
                                    <li>
                                        Tello
                                    </li>
                                    <li>
                                        Teruel
                                    </li>
                                    <li>
                                        Tesalia
                                    </li>
                                    <li>
                                        Timana
                                    </li>
                                    <li>
                                        Villavieja
                                    </li>
                                    <li>
                                        Yaguara
                                    </li>
                                    <li>
                                        Neiva
                                    </li>
                                    <li>
                                        Campoalegre
                                    </li>
                                    <li>
                                        Garzón
                                    </li>
                                    <li>Pitalito</li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep15">La Guajira</h3> 
                                {{-- <ul class="list-unstyled" id="lstdep15" style="display: none;">
                                    <li>
                                        El Molino
                                    </li>
                                    <li>
                                        Fonseca
                                    </li>
                                    <li>
                                        Albania
                                    </li>
                                    <li>
                                        Barrancas
                                    </li>
                                    <li>
                                        Distraccion
                                    </li>
                                    <li>
                                        Hatonuevo
                                    </li>
                                    <li>
                                        Manaure
                                    </li>
                                    <li>
                                        Dibulla
                                    </li>
                                    <li>
                                        La Jagua del Pilar
                                    </li>
                                    <li>
                                        San Juan del Cesar
                                    </li>
                                    <li>
                                        Urumita
                                    </li>
                                    <li>
                                        Uribia
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep16">Magdalena</h3>  
                                {{-- <ul class="list-unstyled" id="lstdep16" style="display: none;">
                                    <li>
                                        Algarrobo
                                    </li>
                                    <li>
                                        Chivolo
                                    </li>
                                    <li>
                                        Cerro San Antonio
                                    </li>
                                    <li>
                                        Concordia
                                    </li>
                                    <li>
                                        El Piñon
                                    </li>
                                    <li>
                                        Guamal
                                    </li>
                                    <li>
                                        Aracataa
                                    </li>
                                    <li>
                                        Nueva Granada
                                    </li>
                                    <li>
                                        Pedraza
                                    </li>
                                    <li>
                                        Pivijay
                                    </li>
                                    <li>
                                        El Reten
                                    </li>
                                    <li>
                                        Remolino
                                    </li>
                                    <li>
                                        Salamina
                                    </li>
                                    <li>
                                        Sabanas de San Angel
                                    </li>
                                    <li>
                                        Pijiño del Carmen
                                    </li>
                                    <li>
                                        Puebloviejo
                                    </li>
                                    <li>
                                        Sitionuevo
                                    </li>
                                    <li>
                                        San Sebastian de Buenavista
                                    </li>
                                    <li>
                                        San Zenon
                                    </li>
                                    <li>
                                        Santa Ana
                                    </li>
                                    <li>
                                        Santa Barbara de Pinto
                                    </li>
                                    <li>
                                        Tenerife
                                    </li>
                                    <li>
                                        Zona Bananera
                                    </li>
                                    <li>
                                        Zapayan
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep17">Meta</h3>
                                {{-- <ul class="list-unstyled" id="lstdep17" style="display: none;">
                                    <li>Villavicencio</li>
                                    <li>
                                        Acacias     
                                    </li>
                                    <li>
                                        Cabuyaro
                                    </li>
                                    <li>
                                        El Calvario 
                                    </li>
                                    <li>
                                        Cubarral
                                    </li>
                                    <li>
                                        El Castillo
                                    </li>
                                    <li>
                                        Mapiripan
                                    </li>
                                    <li>
                                        Castilla la Nueva
                                    </li>
                                    <li>
                                        El Dorado
                                    </li>
                                    <li>
                                        Puerto Gaitan
                                    </li>
                                    <li>
                                        Puerto Concordia
                                    </li>
                                    <li>
                                        Puerto Lleras
                                    </li>
                                    <li>
                                        Puerto Lopez
                                    </li>
                                    <li>
                                        Puerto Rico
                                    </li>
                                    <li>
                                        Restrepo
                                    </li>
                                    <li>
                                        Fuente de Oro
                                    </li>
                                    <li>
                                        Granada
                                    </li>
                                    <li>
                                        Guamal
                                    </li>
                                    <li>
                                        San Carlos de Guaroa
                                    </li>
                                    <li>
                                        Lejanias
                                    </li>
                                    <li>
                                        Mesetas
                                    </li>
                                    <li>
                                        San Juanito
                                    </li>
                                    <li>
                                        San Juan de Arama
                                    </li>
                                    <li>
                                        San Martin
                                    </li>
                                    <li>
                                        Vistahermosa
                                    </li>
                                </ul>--}}
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep18">Nariño</h3>     
                                {{-- <ul class="list-unstyled" id="lstdep18" style="display: none;">
                                    <li>Pasto</li>
                                    <li>
                                        Cuaspud
                                    </li>
                                    <li>
                                        Ancuya
                                    </li>
                                    <li>
                                        Barbacoas
                                    </li>
                                    <li>
                                        Alban
                                    </li>
                                    <li>
                                        Cumbitara
                                    </li>
                                    <li>
                                        Aldana
                                    </li>
                                    <li>
                                        Cumbal
                                    </li>
                                    <li>
                                        El Rosario
                                    </li>
                                    <li>
                                        Funes
                                    </li>
                                    <li>
                                        Guachucal
                                    </li>
                                    <li>
                                        Guaitarilla
                                    </li>
                                    <li>
                                        La Llanada
                                    </li>
                                    <li>Ipiales</li>
                                    <li>
                                        Llorente
                                    </li>
                                    <li>
                                        Los Andes
                                    </li>
                                    <li>
                                        Magui
                                    </li>
                                    <li>
                                        Leiva
                                    </li>
                                    <li>
                                        Arboleda
                                    </li>
                                    <li>
                                        Mallama
                                    </li>
                                    <li>
                                        Belen
                                    </li>
                                    <li>
                                        Buesaco
                                    </li>
                                    <li>
                                        Chachagui
                                    </li>
                                    <li>
                                        Colon
                                    </li>
                                    <li>
                                        Consaca
                                    </li>
                                    <li>
                                        Contadero
                                    </li>
                                    <li>
                                        Cordoba
                                    </li>
                                    <li>
                                        El Peñol
                                    </li>
                                    <li>
                                        Potosi
                                    </li>
                                    <li>
                                        Policarpa
                                    </li>
                                    <li>
                                        El Tablon de Gomez
                                    </li>
                                    <li>
                                        El Tambo
                                    </li>
                                    <li>
                                        Roberto Payan
                                    </li>
                                    <li>
                                        Gualmatan
                                    </li>
                                    <li>
                                        Ricaurte
                                    </li>
                                    <li>
                                        Imues
                                    </li>
                                    <li>
                                        La Cruz
                                    </li>
                                    <li>
                                        La Florida
                                    </li>
                                    <li>
                                        La Union
                                    </li>
                                    <li>
                                        Iles
                                    </li>
                                    <li>
                                        Nariño
                                    </li>
                                    <li>
                                        Linares
                                    </li>
                                    <li>
                                        Ospina
                                    </li>
                                    <li>
                                        Providencia
                                    </li>
                                    <li>
                                        Santacruz
                                    </li>
                                    <li>
                                        Sapuyes
                                    </li>
                                    <li>
                                        Puerres
                                    </li>
                                    <li>
                                        Pupiales
                                    </li>
                                    <li>
                                        San Bernardo 
                                    </li>
                                    <li>
                                        San Lorenzo
                                    </li>
                                    <li>
                                        San Pablo
                                    </li>
                                    <li>
                                        Samaniego
                                    </li>
                                    <li>
                                        San Pedro de Cartago
                                    </li>
                                    <li>
                                        Sandona
                                    </li>
                                    <li>
                                        El Charco
                                    </li>
                                    <li>
                                        Francisco Pizarro
                                    </li>
                                    <li>
                                        La Tola
                                    </li>
                                    <li>
                                        Mosquera
                                    </li>
                                    <li>
                                        Tangua
                                    </li>
                                    <li>
                                        Olaya Herrera
                                    </li>
                                    <li>
                                        Santa Barbara
                                    </li>
                                    <li>
                                        Taminango
                                    </li>
                                    <li>
                                        Tumaco
                                    </li>
                                    <li>
                                        Tuquerres
                                    </li>
                                    <li>
                                        Yacuanquer
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep20">Putumayo</h3>   
                                {{-- <ul class="list-unstyled" id="lstdep20" style="display: none;">
                                    <li>
                                        Colon   
                                    </li>
                                    <li>
                                        San Francisco
                                    </li>
                                    <li>
                                        Santiago
                                    </li>
                                    <li>
                                        Sibundoy
                                    </li>
                                    <li>
                                        Mocoa
                                    </li>
                                    <li>
                                        Orito
                                    </li>
                                    <li>
                                        Puerto Asis
                                    </li>
                                    <li>
                                        Puerto Caicedo
                                    </li>
                                    <li>
                                        Puerto Guzman
                                    </li>
                                    <li>
                                        San Miguel
                                    </li>
                                    <li>
                                        Valle del Guamuez   
                                    </li>
                                    <li>
                                        Villagarzon
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep19">Santander</h3>     
                                {{-- <ul class="list-unstyled" id="lstdep19" style="display: none;">
                                    <li>
                                        Cachira
                                    </li>
                                    <li>
                                        Convencion
                                    </li>
                                    <li>
                                        El Carmen
                                    </li>
                                    <li>
                                        Gramalote
                                    </li>
                                    <li>
                                        Hacari
                                    </li>
                                    <li>
                                        La Esperanza
                                    </li>
                                    <li>
                                        La Playa
                                    </li>
                                    <li>
                                        Arboledas
                                    </li>
                                    <li>
                                        Mutiscua
                                    </li>
                                    <li>
                                        Bochalema
                                    </li>
                                    <li>
                                        Bucarasica
                                    </li>
                                    <li>
                                        Cacota
                                    </li>
                                    <li>
                                        Durania
                                    </li>
                                    <li>
                                        Chinacota
                                    </li>
                                    <li>
                                        Chitaga
                                    </li>
                                    <li>
                                        Cucutilla
                                    </li>
                                    <li>
                                        Pamplona
                                    </li>
                                    <li>
                                        El Zulia
                                    </li>
                                    <li>
                                        Herran
                                    </li>
                                    <li>
                                        Labateca
                                    </li>
                                    <li>
                                        San Calixto
                                    </li>
                                    <li>
                                        Pamplonita
                                    </li>
                                    <li>
                                        Puerto Santander
                                    </li>
                                    <li>
                                        El Tarra
                                    </li>
                                    <li>
                                        Ragonvalia
                                    </li>
                                    <li>
                                        Lourdes
                                    </li>
                                    <li>
                                        Salazar
                                    </li>
                                    <li>
                                        San Cayetano
                                    </li>
                                    <li>
                                        Santiago
                                    </li>
                                    <li>
                                        Silos
                                    </li>
                                    <li>
                                        Tibu
                                    </li>
                                    <li>
                                        Teorama
                                    </li>
                                    <li>
                                        Villa Caro
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>                      
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep21">Quindio</h3>    
                                {{-- <ul class="list-unstyled" id="lstdep21" style="display: none;">
                                    <li>
                                        Buenavista
                                    </li>
                                    <li>
                                        Cordoba
                                    </li>
                                    <li>
                                        Salento
                                    </li>
                                    <li>
                                        Genova
                                    </li>
                                    <li>
                                        Pijao
                                    </li>
                                </ul> --}}
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep22">Risaralda</h3>      
                                {{-- <ul class="list-unstyled" id="lstdep22" style="display: none;">
                                    <li>Pereira</li>
                                    <li>
                                        Belen de Umbria
                                    </li>
                                    <li>Dosquebradas</li>
                                    <li>
                                        Guatica
                                    </li>
                                    <li>
                                        Pueblo Rico
                                    </li>
                                    <li>
                                        La Celia
                                    </li>
                                    <li>La Virginia</li>
                                    <li>Marsella</li>
                                    <li>
                                        Quinchia
                                    </li>
                                    <li>
                                        Santuario
                                    </li>
                                    <li>
                                        Apia
                                    </li>
                                    <li>
                                        Balboa
                                    </li>
                                    <li>
                                        Mistrato
                                    </li>       
                                    <li>Santa Rosa de Cabal</li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep23">N. de Santander</h3>  
                                {{-- <ul class="list-unstyled" id="lstdep23" style="display: none;">
                                    <li>Barbosa</li>
                                    <li>Barrancabermeja</li>
                                    <li>Bucaramanga</li>
                                    <li>
                                        Aratoca
                                    </li>
                                    <li>
                                        Contratacion
                                    </li>
                                    <li>
                                        Galan
                                    </li>
                                    <li>
                                        Malaga
                                    </li>
                                    <li>
                                        San Andres
                                    </li>
                                    <li>
                                        San Vicente de Chucuri
                                    </li>
                                    <li>Floridablanca</li>
                                    <li>
                                        Velez
                                    </li>
                                    <li>
                                        Vetas
                                    </li>
                                    <li>
                                        Zapatoca
                                    </li>
                                    <li>
                                        Aguada
                                    </li>
                                    <li>
                                        Cabrera
                                    </li>
                                    <li>
                                        Charala
                                    </li>
                                    <li>Giron</li>
                                    <li>
                                        Barichara
                                    </li>
                                    <li>
                                        California
                                    </li>
                                    <li>
                                        Cepita
                                    </li>
                                    <li>
                                        Cimitarra
                                    </li>
                                    <li>
                                        Bolivar
                                    </li>
                                    <li>
                                        Albania
                                    </li>
                                    <li>
                                        Confines
                                    </li>
                                    <li>
                                        Coromoro
                                    </li>
                                    <li>
                                        Curiti
                                    </li>
                                    <li>
                                        El Guacamayo
                                    </li>
                                    <li>
                                        Enciso
                                    </li>
                                    <li>Piedecuesta</li>
                                    <li>
                                        Capitanejo
                                    </li>
                                    <li>
                                        Guapota
                                    </li>
                                    <li>
                                        Carcasi
                                    </li>
                                    <li>
                                        Charta
                                    </li>
                                    <li>
                                        Chima
                                    </li>
                                    <li>
                                        Concepcion
                                    </li>
                                    <li>
                                        Guepsa
                                    </li>
                                    <li>
                                        Hato
                                    </li>
                                    <li>
                                        Jordan
                                    </li>
                                    <li>
                                        Lebrija
                                    </li>
                                    <li>
                                        La Paz
                                    </li>
                                    <li>
                                        Landazuri
                                    </li>
                                    <li>
                                        Los Santos
                                    </li>
                                    <li>
                                        Matanza
                                    </li>
                                    <li>
                                        Molagavita
                                    </li>
                                    <li>
                                        Mogotes
                                    </li>
                                    <li>
                                        El Carmen de Chucuri
                                    </li>
                                    <li>
                                        Oiba
                                    </li>
                                    <li>Socorro</li>
                                    <li>
                                        Encino
                                    </li>
                                    <li>
                                        Cerrito
                                    </li>
                                    <li>
                                        Chipata
                                    </li>
                                    <li>
                                        Palmar
                                    </li>
                                    <li>
                                        Palmas del Socorro
                                    </li>
                                    <li>
                                        Puerto Parra
                                    </li>
                                    <li>
                                        El Peñon
                                    </li>
                                    <li>
                                        Puerto Wilches
                                    </li>
                                    <li>
                                        Florian
                                    </li>
                                    <li>
                                        Gambita
                                    </li>
                                    <li>
                                        Guavata
                                    </li>
                                    <li>
                                        Jesus Maria
                                    </li>
                                    <li>
                                        San Benito
                                    </li>
                                    <li>
                                        La Belleza
                                    </li>
                                    <li>
                                        San Gil
                                    </li>
                                    <li>
                                        Macaravita
                                    </li>
                                    <li>
                                        San Joaquin
                                    </li>
                                    <li>
                                        Puente Nacional
                                    </li>
                                    <li>
                                        Santa Helena del Opon
                                    </li>
                                    <li>
                                        Simacota
                                    </li>
                                    <li>
                                        Betulia
                                    </li>
                                    <li>
                                        Surata
                                    </li>
                                    <li>
                                        El Playon
                                    </li>
                                    <li>
                                        Onzaga
                                    </li>
                                    <li>
                                        Paramo
                                    </li>
                                    <li>
                                        Guaca
                                    </li>
                                    <li>
                                        Guadalupe
                                    </li>
                                    <li>
                                        Ocamonte
                                    </li>
                                    <li>
                                        Pinchote
                                    </li>
                                    <li>
                                        Rionegro
                                    </li>
                                    <li>
                                        San Jose de Miranda
                                    </li>
                                    <li>
                                        San Miguel
                                    </li>
                                    <li>
                                        Santa Barbara
                                    </li>
                                    <li>
                                        Suaita
                                    </li>
                                    <li>
                                        Sucre
                                    </li>
                                    <li>
                                        Tona
                                    </li>
                                    <li>
                                        Villanueva
                                    </li>
                                    <li>
                                        Valle de San Jose
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep24">Sucre</h3>  
                                {{-- <ul class="list-unstyled" id="lstdep24" style="display: none;">
                                    <li>
                                        Buenavista
                                    </li>
                                    <li>
                                        Caimito
                                    </li>
                                    <li>
                                        El Roble
                                    </li>
                                    <li>
                                        Galeras
                                    </li>
                                    <li>
                                        Guaranda
                                    </li>
                                    <li>
                                        Majagual
                                    </li>
                                    <li>
                                        Chalan
                                    </li>
                                    <li>
                                        Coloso
                                    </li>
                                    <li>
                                        Los Palmitos
                                    </li>
                                    <li>
                                        San Benito Abad
                                    </li>
                                    <li>
                                        La Union
                                    </li>
                                    <li>
                                        San Juan de Betulia
                                    </li>
                                    <li>
                                        San Marcos
                                    </li>
                                    <li>
                                        San Pedro
                                    </li>
                                    <li>
                                        Ovejas
                                    </li>
                                    <li>
                                        Palmito
                                    </li>
                                    <li>
                                        Sucre
                                    </li>
                                    <li>
                                        Toluviejo
                                    </li>
                                    <li>
                                        Since
                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep25">Tolima</h3>     
                                {{-- <ul class="list-unstyled" id="lstdep25" style="display: none;">
                                    <li>
                                        Anzoategui
                                    </li>
                                    <li>
                                        Armero
                                    </li>
                                    <li>
                                        Alpujarra
                                    </li>
                                    <li>
                                        Falan
                                    </li>
                                    <li>
                                        Ambalema
                                    </li>
                                    <li>
                                        Fresno
                                    </li>
                                    <li>
                                        Ataco
                                    </li>
                                    <li>Ibague</li>
                                    <li>Cajamarca</li>
                                    <li>Chaparral</li>
                                    <li>Espinal</li>
                                    <li>
                                        Coyaima
                                    </li>
                                    <li>
                                        Cunday
                                    </li>
                                    <li>
                                        Carmen de Apicala
                                    </li>
                                    <li>
                                        Coello
                                    </li>
                                    <li>
                                        Piedras
                                    </li>
                                    <li>
                                        Dolores
                                    </li>
                                    <li>
                                        Flandes
                                    </li>
                                    <li>
                                        Ortega
                                    </li>
                                    <li>
                                        Prado
                                    </li>
                                    <li>Guamo</li>
                                    <li>Honda</li>
                                    <li>Libano</li>
                                    <li>
                                        San Antonio
                                    </li>
                                    <li>
                                        Planadas
                                    </li>
                                    <li>
                                        Rioblanco
                                    </li>
                                    <li>
                                        Roncesvalles
                                    </li>
                                    <li>
                                        San Luis
                                    </li>
                                    <li>
                                        Suarez
                                    </li>
                                    <li>
                                        Alvarado
                                    </li>
                                    <li>
                                        Casabianca
                                    </li>
                                    <li>
                                        Herveo
                                    </li>
                                    <li>
                                        Venadillo
                                    </li>
                                    <li>
                                        Icononzo
                                    </li>
                                    <li>
                                        Valle de San Juan
                                    </li>
                                    <li>
                                        Lerida
                                    </li>
                                    <li>
                                        Villahermosa
                                    </li>
                                    <li>
                                        Murillo
                                    </li>
                                    <li>Mariquita</li>
                                    <li>Melgar</li>
                                    <li>Natagaima</li>
                                    <li>
                                        Palocabildo
                                    </li>
                                    <li>
                                        Villarrica
                                    </li>
                                    <li>
                                        Rovira
                                    </li>
                                    <li>
                                        Santa Isabel
                                    </li>
                                    <li>Purificacion</li>
                                    <li>Saldaña</li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep26">Valle</h3>    
                                {{-- <ul class="list-unstyled" id="lstdep26" style="display: none;">
                                    <li>Cali</li>
                                    <li>Alcala</li>
                                    <li>Andalucia</li>
                                    <li>Buenaventura</li>
                                    <li>
                                        Zarzal  
                                    </li>
                                    <li>
                                        Argelia
                                    </li>
                                    <li>
                                        Ansermanuevo
                                    </li>
                                    <li>
                                        Calima
                                    </li>
                                    <li>Bugalagrande</li>
                                    <li>Caicedonia</li>
                                    <li>El Cerrito</li>
                                    <li>
                                        Cartago
                                    </li>
                                    <li>
                                        Bolivar
                                    </li>
                                    <li>
                                        Dagua
                                    </li>
                                    <li>
                                        El Aguila
                                    </li>
                                    <li>
                                        El Dovio    
                                    </li>
                                    <li>
                                        Guadalajara de Buga
                                    </li>
                                    <li>
                                        La Cumbre
                                    </li>
                                    <li>Florida</li>
                                    <li>Ginebra</li>
                                    <li>Guacari</li>
                                    <li>Jamundi</li>
                                    <li>
                                        Restrepo
                                    </li>
                                    <li>
                                        Ulloa
                                    </li>
                                    <li>La Union</li>
                                    <li>La Victoria</li>
                                    <li>Obando</li>
                                    <li>
                                        Versalles
                                    </li>
                                    <li>
                                        El Cairo
                                    </li>
                                    <li>Palmira</li>
                                    <li>Riofrio</li>
                                    <li>Roldanillo</li>
                                    <li>San Pedro</li>
                                    <li>Sevilla</li>
                                    <li>Toro</li>
                                    <li>Trujillo</li>
                                    <li>Tulua</li>
                                    <li>Vijes</li>
                                    <li>Yotoco</li>
                                    <li>Yumbo</li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="margin-bottom: 0px !important;">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{Url::asset('images/image.jpeg')}}">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <h3 id="dep27">Vichada</h3>
                                {{-- <ul class="list-unstyled" id="lstdep27" style="display: none;">
                                    <li>
                                        Cumaribo
                                    </li>
                                    <li>
                                        El Viento
                                    </li>
                                    <li>
                                        La 14
                                    </li>
                                    <li>
                                        La Primavera
                                    </li>
                                    <li>
                                        Santa Rosalia
                                    </li>
                                    <li>
                                        Tres Matas
                                    </li>
                                </ul>--}}
                            </div>  
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
   

@section('scripts') 
    <script src="{{URL::asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{URL::asset('js/appear.js')}}"></script>
    <script src="{{URL::asset('js/script.js')}}"></script>
    <script type="text/javascript">
            
        $(document).on('click','[id*=dep]',function(){
            // console.log(this);
            // console.log($(this).attr('id'));
            var id = $(this).attr('id');
            $('#lst'+id).toggle('slow');
        });
    </script>

@endsection 
@endsection