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


    .centrado {
        text-align: center;

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
</style>
@endsection
@section('content')
<section class="page-title" style="background-image:url(../../images/background/fibra-optica1.jpg)">
    <div class="auto-container">
        <div class="container">
            <h2>Fibra Óptica</h2>
            <div class="text"> Invertir en infraestructura hace a las<br>empresas más ágiles en sus procesos.
            </div>
            <div class="big-letter">Stra<span>tec</span>sa
            </div>
        </div>
    </div>
</section>
<!--Testimonial Section Two-->

<!-- end section -->
<section id="work" class="work sections container-fluid" style="padding-top: 2rem; margin-top: 3rem; background-color: #f8f9fa;">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="head-title text-center">

                    <h3 style="font-weight: 700;color: #292a2e; font-size: 30px; margin-bottom: 1rem;">Categoría <span class="text-azulCorp">{{$nombre}}</span></h3>
                    <div class="separator3"></div>

                    <p class="text-mega m-top-10">Contamos con múltiples insumos que te ayudarán a la solución de tus problemas de infraestructura y al cumplimiento de tus metas.

                    </p>

                </div>

            </div>

        </div>

        @foreach($productos as $key => $val)

            <div class="col-lg-4 col-sm-6">

                <a href="#!" descripcion="{{$val->caracteristicas}}" id="car">

                    <div class="service-style-2">

                        <div class="service-img">

                            <img src="https://soporte.stratecsa.com/{{$val->imagen}}" alt="" class="img-fluid">

                        </div>

                        <div class="service-content">

                            <h4>{{$val->nombre}}</h4>

                            <p>{{$val->nombre_cat}}</p>

                            <a href="/contacto" class="btn btn-info btn-round m-top-30 ">Envianos un correo.</a>
                        </div>

                    </div>

                </a>

            </div>
        
        @endforeach

        <!-- End off row -->

    </div>

    <!-- End off container -->
    <div class="modal fade" id="descrip">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" style="text-align: center;">CARACTERÍSTICAS</h3>
        </div>          
        <!-- Modal body -->
        <div class="modal-body" style="padding: 2rem;  text-align: center;">
          <div class="row">
              <div class="col-md-12">
                <h4 id="caracteristicas" style=" text-align: center;"></h4><br>
                

             </div>

          </div> 
        </div>      

      </div>
    </div>
  </div>  
</section>

<!-- What Services We Offer -->

<!-- Services End -->

@section('scripts')

<script src="{{URL::asset('js/jquery.fancybox.js')}}"></script>
<script src="{{URL::asset('js/owl.js')}}"></script>
<script src="{{URL::asset('js/appear.js')}}"></script>
<script src="{{URL::asset('js/wow.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
<script >
$(document).ready(function(){
    $(document).on('click','[id=car]',function(){
        console.log(this)
       var descripcion=$(this).attr('descripcion')
       $('#caracteristicas').html(descripcion)
       $('#descrip').modal('show')
    })
})
</script>
@endsection
@endsection