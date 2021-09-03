
@extends('layouts.plantilla_mikrotik')

@include('Mikrotik.sistema.apimikrotik')
@include('Mikrotik.sistema.funciones')

<?php
$API = new routeros_api();
$API->debug = false;
?>


@section('content')

  <!-- Page-header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4></h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Data Table Extensions</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Button</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">HTML5 Data-Export</a>
            </li>
        </ul>
    </div>
</div>
<!-- Page-header end -->
<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        
    <div class="col-sm-12">
                        <!-- Google map search card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Google map search</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="">
                                            <form method="post" id="address-search">
                                                <!-- <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter address">
                                                    <span class="input-group-btn">
                                                    </span>
                                                </div> -->
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="gmap1 full-page-google-map">
                                            <div id="map" style='max-height:600px;height:1067px;'></div>
                                        </div>
                                        <!-- start -->
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="map-toolbar">
                                            <div class="row">
                                                <div class="col-xl-12 text-center location-mob-btn">
                                                    <!-- <div class="btn-group">
                                                        <button type="button" class="btn btn-danger" id="map-unzoom">-</button>
                                                        <button type="button" class="btn btn-danger" id="map-resetzoom">Reset</button>
                                                        <button type="button" class="btn btn-danger" id="map-zoom">+</button>
                                                    </div>
                                                    &nbsp;
                                                    <a href="#" class="btn btn-primary m-r-10" id="go-sthlm">Go to Stockholm</a>
                                                    <a href="#" class="btn btn-warning" id="go-bln">Go to Berlin</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                        <!-- Google map search card end -->
                    </div>
   
    </div>
</div>



@endsection  
 @section('scripts')
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdP4giOMpbNB4BpHqBIAZz_ydA9Bf1I9A&callback=initMap"></script>
    <script>

      // If you're adding a number of markers, you may want to drop them on the map
      // consecutively rather than all at once. This example shows how to use
      // window.setTimeout() to space your markers' animation.

      var desconectados = [
        <?php
          $API = new routeros_api();
          $API->debug = false;
          foreach ($routers as $key => $value) {
          if ($API->connect($value->ip_mk , $value->user_mk , $value->pass_mk, $value->puerto_mk)) { ?>
            {lat: <?php echo $value->latitud ?>, lng: -75.6376628},
        <?php }} ?>

      ];
    
      var markers = [];
      var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 3.441149, lng: -76.5615542}
        });
      }

     
      clearMarkers();
      for (var i = 0; i < desconectados.length; i++) {
        addMarkerWithTimeout(desconectados[i], i * 200);
      }
      // for (var i = 0; i < conectados.length; i++) {
      //   addMarkerWithTimeout(conectados[i], i * 200);
      // }
      var icon="https://probandito.top/img/router_verde.png";
      var icon2="https://probandito.top/img/router_verde.png";
      function addMarkerWithTimeout(position, timeout) {
        window.setTimeout(function() {
          desconectados.push(new google.maps.Marker({
            position: position,
            map: map,
            icon:icon,
            animation: google.maps.Animation.DROP
          }));
          // conectados.push(new google.maps.Marker({
          //   position: position,
          //   map: map,
          //   icon:icon2,
          //   animation: google.maps.Animation.DROP
          // }));
        }, timeout);
      }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
      }
    </script>
 
<script type="text/javascript">




    $(document).ready(function(){

        $('.str_button').click(function(){
            $('#str_formulario').show(500);
            $('#contenido').hide();
        })
        $('[id^=str_cancelar]').click(function(){
            $('#contenido').show(500);
            $('#str_formulario').hide();
        })

        $('.str_button2').click(function(){
            $('#str_formulario2').show(500);
            $('#contenido').hide();
        })
        $('[id^=str_cancelar2]').click(function(){
            $('#contenido').show(500);
            $('#str_formulario2').hide();
        })

           $('.str_button3').click(function(){
            $('#str_formulario3').show(500);
            $('#contenido').hide();
        })
        $('[id^=str_cancelar3]').click(function(){
            $('#contenido').show(500);
            $('#str_formulario3').hide();
        })

            $('.str_button4').click(function(){
            $('#str_formulario4').show(500);
            $('#contenido').hide();
        })
        $('[id^=str_cancelar4]').click(function(){
            $('#contenido').show(500);
            $('#str_formulario4').hide();
        })

      
        $('#str_delete').click(function(){
            $('input:checkbox').each(function(a,e){
                if (!$(this).attr('name')) {
                    if ($(e).is(':checked')) {
                        var tr=$(this).parent().parent();
                        $(tr).empty();
                        console.log();
                    }
                }
            })
            $("input[name=checked]").prop('checked', false);
        })

    })

  

function Verperfilhotspot(){
  var ci=document.getElementById("Router_hotspot").value;
  $.ajax({
  data:  {Router_hotspot:ci},
  url:   '/Verperfilhotspot',
  type:  'get',
  success:  function (response) {
  $("#Mostrarhotspot").html(response);
    }
    });
    }


function Verpines(){
  var ci=document.getElementById("id_pines").value;
  $.ajax({
  data:  {id_pines:ci},
  url: '/Verpines',
  type: 'GET',

  beforeSend: function () {
  $("#Mostrarpin").html("Procesando, espere por favor...");
    },
  success:  function (response) {
  $("#Mostrarpin").html(response);
    }
    });
 
   }


$(document).ready(function() {
    var table = $('#router-mkt').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
 

</script>
 @endsection 

