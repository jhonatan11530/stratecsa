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
    .service-style-1 img {
        width: 100%;
    }
    .modal .modal-backdrop.in {
        opacity: 0 !important;
    }
    .modal {
        background: #212121;
    }
    .modal.fade.in {
        opacity: 1;
    }
    .entes {
        background-color: #009cda;
        color: #fff;
        padding: 5px;
        font-size: 24px;
        margin-bottom: 2rem;
    }
    .modal-title {
        font-size: 27px;
    }
    button {
        cursor: pointer;
    }
    a {
        cursor: pointer;
    }
    footer .footer_logo ul li a {
        padding: 0 !important;
    }
</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(images/background/normat.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>Normatividad</h2>
                <div class="text">Contamos con múltiples servicios que te ayudarán a la solución <br>de tus problemas IT y al cumplimiento de tus metas.
                </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>
    <!--Case Studies section-->
    <section id="work" class="work sections rs-services container-fluid" style="padding-top: 2rem; margin-top: 3rem; background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-title text-center">
                        <h3 style="font-weight: 700;color: #292a2e; font-size: 30px; margin-bottom: 1rem;">Normatividad <span class="text-azulCorp">Stratecsa</span></h3>                       
                        <div class="separator3"></div>
                        <p class="text-mega m-top-10">Contamos con múltiples servicios que te ayudarán a la solución de tus problemas IT y al cumplimiento de tus metas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5rem;">
                <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#myModal').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/resoluicones.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Resoluciones</h4>
                            <p>Mayor productividad para tu negocio.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#internet-sano').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/internet.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Internet sano</h4>
                            <p>Comunicación en línea ahorre costos y tiempo.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="https://www.mintic.gov.co/portal/604/w3-propertyvalue-7616.html" target="_blank" ><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/gobierno.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Gobierno en línea</h4>
                            <p>Facilita las comunicaciones de tu compañía.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#datos-personales').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/tratamiento.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Tratamiento de datos personales</h4>
                            <p>Software a la medida.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#entes').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/entes..png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Entes reguladores</h4>
                            <p>Proteja de forma eficaz su empresa.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="/seguridad-en-la-web"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/seguridad.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Seguridad en la web</h4>
                            <p>Protección eficiente para tu empresa.</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/normatividad/politicas.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Políticas de uso aceptable</h4>
                            <p>Aloje sus datos en un espacio seguro y confiable.</p>
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


<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title" style="text-align: center;">RESOLUCIONES</h2>
        </div>          
        <!-- Modal body -->
        <div class="modal-body" style="padding: 2rem; text-align: center;">
          <div class="row">
              <div class="col-md-6">
                  <img src="{{ URL::asset('images/icons/normatividad/resolucion1.png') }}">
              </div>
              <div class="col-md-6">
                  <img src="{{ URL::asset('images/icons/normatividad/resolucion2.png') }}">
              </div>

              <div class="col-md-6">
                <a href="/resolucion-5111" title="" class="btn btn-primary">Consultar</a>
              </div>
              <div class="col-md-6">
                <a class="btn btn-primary" href="/ley-1341-de-2009">Consultar</a>
              </div>
          </div> 
        </div>      

      </div>
    </div>
  </div>  
</div>

<!--  Modal internet sano -->
  <div class="modal fade" id="internet-sano">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">INTERNET SANO</h3>
        </div>    
        <!-- Modal body -->
        <div class="modal-body" style="padding: 3rem;">
          <div class="row">
            <p>Nuestra Compañía se acoge a las disposiciones el Ministerio de Comunicaciones sobre Internet Sano (Ley 679 de 2001 y del Decreto 1524 de 2004), campaña por medio de la cual se pretende prevenir, bloquear, combatir y denunciar la explotación, alojamiento, uso, publicitación, difusión de imágenes, textos, documentos, archivos audiovisuales, y cualquier uso indebido de los medios de comunicación.</p><p>La ley 679, expedida en desarrollo del Artículo 44 de la Constitución, pretende dictar medidas preventivas y sanciones para quienes exploten y/o abusen sexualmente de los menores de edad, para así ayudar que tengan un desarrollo integral y sano. Si desea conocer el texto completo de la Ley 679 &nbsp;visite este link: <strong><a href="https://mailtrack.io/trace/link/1a6f94eaf69e7fee1f6decde45491100166c8869?url=http%3A%2F%2Fwww.icbf.gov.co%2Fcargues%2Favance%2Fdocs%2Fley_0679_2001.htm&amp;signature=19fab2626268c090">http://www.icbf.gov.co/cargues/avance/docs/ley_0679_2001.htm</a></strong></p><p>En los siguientes lugares de Internet se pueden realizar las denuncias relacionadas con sitios y contenidos de pornografía de menores de edad y páginas electrónicas en las que se ofrezcan servicios sexuales con niños:</p><p><strong>Ministerio de Comunicaciones</strong></p><p>Dignidad Infantil<br>Teléfono: 01800 09 12667<br>Página Web: <a href="https://mailtrack.io/trace/link/83d81d12547b035eddbc6c3633a6d81c7c819ecf?url=http%3A%2F%2Fwww.mintic.gov.co%2F&amp;signature=fd1b236b5306ba5f">www.mintic.gov.co</a></p><p><strong>Fiscalía General de la Nación</strong></p><p>Teléfono <a href="tel:01%20800%200912280">01 800 0912280</a><br>Correo Electrónico: <a href="mailto:contacto@fiscalia.gov.co">contacto@fiscalia.gov.co</a><br>Página Web: <a href="https://mailtrack.io/trace/link/0cff54b7c78163024a3aeaa87cacde46aa8f10f9?url=http%3A%2F%2Fwww.axesat.com%2Fcolombia%2Finternet-sano%2Fwww.fiscalia.gov.co&amp;signature=24760dce8f98b865">www.fiscalia.gov.co</a></p><p><strong>Dirección Central de Policía Judicial – Dijín</strong></p><p>Grupo Investigativo Delitos Informáticos<br>Teléfonos: PBX: 426 6900 Ext. 6301, 6302. Directo: 426 6300<br>Correo Electrónico: <a href="mailto:adelinfo@dijin.policia.gov.co">adelinfo@dijin.policia.gov.co</a></p><p><strong>Instituto Colombiano de Bienestar Familiar</strong></p><p>Teléfonos: 01 8000 918080 ó (1) 660 5520, (1) 660 5530, (1) 660 5540<br>Página Web: <a href="https://mailtrack.io/trace/link/f374db29039480ea22cf36db8307880fe79c459d?url=http%3A%2F%2Fwww.icbf.gov.co&amp;signature=870c145cc0e3572f">www.icbf.gov.co</a></p><h4>Recomendaciones de Seguridad</h4><p>El control parental nos permite tener políticas en la navegación a internet, de esta forma se controla el contenido que se quiere ver como se muestra en el siguiente video:</p><p>Configurar Equipos. (2010, 9 de Marzo). Control Parental: Navegación en Internet para niños [Archivo de video]. Recuperado de:<a href="https://www.youtube.com/watch?v=Fp5TiacQHcg" target="_blank">https://www.youtube.com/watch?v=Fp5TiacQHcg</a></p><p>Es importante dejar claro que existen diversas herramientas para complementar las recomendaciones que se dan a continuación. Microsoft nos brinda una opción para realizar el control parental, el cual permite tener una cuenta (online) y aplicar dichos filtros en diferentes dispositivos, para lo cual se puede validar el siguiente link donde están los pasos de instalación y uso:</p><p><a href="http://windows.microsoft.com/es-ar/windows/set-parental-controls#1TC=windows-7" target="_blank">http://windows.microsoft.com/es-ar/windows/set-parental-controls#1TC=windows-7</a></p><p>O el siguiente complemento para instalarse en Firefox y permitir tener control en el acceso:</p><p><a href="https://addons.mozilla.org/es/firefox/addon/blocksite/?src=search" target="_blank">https://addons.mozilla.org/es/firefox/addon/blocksite/?src=search</a></p><div class="clear"></div>              
          </div> 
        </div>      
      </div>
    </div>
  </div>  
</div>


<!-- The Modal tratamiento datos personales -->
  <div class="modal fade" id="datos-personales">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" style="text-align: center;">TRATAMIENTO DATOS PERSONALES</h3>
        </div>          
        <!-- Modal body -->
        <div class="modal-body" style="padding: 2rem;  text-align: center;">
          <div class="row">
              <p>Stratecsa está comprometida con mejorar las condiciones de trabajo y seguridad de todos los niveles de nuestra organización; trabajadores, contratistas y conductores, que se encuentran expuestos a un riesgo vial, realizando las actividades bajo los parámetros de prevención de accidentes, inteligencia vial y conducción defensiva, mediante la implementación del plan estratégico de seguridad vial que permitan la gestión, control e intervención de los riesgos fundamentado en la participación y compromiso de todo el personal en el autocuidado.</p>

              <p>Como organización estamos enfocados en generar al personal una actitud de seguridad vial como algo inherente y así reducir el índice de accidentalidad, por medio de capacitaciones sensibilizaciones equipos de seguimiento medición y control de vehículos, planes de mantenimiento a vehículos, políticas complementarias de control y el apoyo de la dirección en la asignación de recursos para la planificación ejecución y control del sistema y de todo el personal en el cumplimiento de metas, objetivos y cumplimiento de requisitos legales aplicables y así como los demás que nuestra empresa suscriba relacionados con la seguridad vial</p>
          </div> 
        </div>      

      </div>
    </div>
  </div>  
</div>



<!-- The Modalentes reguladores -->
  <div class="modal fade" id="entes">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" style="text-align: center;">ENTES REGULADORES</h3>
        </div>          
        <!-- Modal body -->
        <div class="modal-body" style="padding: 2rem;  text-align: center;">
          <div class="row">
              <div class="col-md-12">
                <p style=" text-align: center;"><img class="aligncenter wp-image-483 size-full" src="{{  URL::asset('images/icons/normatividad/entes-modal.png') }}" alt="ente-reguladores-img" width="344" height="130" srcset="{{  URL::asset('images/icons/normatividad/entes-modal.png') }}" sizes="(max-width: 344px) 100vw, 344px"></p>
                <h2 class="entes"  style="text-align: center;">COMISIÓN DE REGULACIÓN DE COMUNICACIONES:</h2><h4 style="text-align: center;">Línea Gratuita Nacional: 01 8000 919 278</h4><h4 style="text-align: center;"><a href="https://www.crcom.gov.co/es/pagina/inicio" target="_blank">www.crcom.gov.co</a></h4><p>&nbsp;</p><h2 class="entes" style="text-align: center;">SUPERINTENDENCIA DE INDUSTRIA Y COMERCIO:</h2><h4 style="text-align: center;">Carrera 13 No. 27 – 00, Pisos. 1, 3, 4, 5, 6, 7 y 10. Bogotá D.C.</h4><h4 style="text-align: center;">Horario de Atención: Lunes a Viernes de 8:00 a.m. a 4:30 p.m.</h4><h4 style="text-align: center;">Conmutador: (57 1) 587 00 00</h4><h4 style="text-align: center;">Fax: (57 1) 587 0284</h4><h4 style="text-align: center;">Contac Center: (57 1) 592 0400</h4><h4 style="text-align: center;">Línea Gratuita Nacional: 01 8000 910 165</h4><h4 style="text-align: center;">Correo: contactenos@sic.gov.co</h4><h4 style="text-align: center;"><a href="http://www.sic.gov.co" target="_blank">www.sic.gov.co</a></h4>

             </div>

          </div> 
        </div>      

      </div>
    </div>
  </div>  
</div>



@endsection
@section('scripts')
    <script>
        function openModal(){
            $('#myModal').modal('show')
        }
    </script>
@endsection