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


.service-style-1 img{

    width: 100%;
}
.modal .modal-backdrop.in {
    opacity: 0 !important;
}

.modal{
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

.modal-title{
    font-size: 27px;
}

button{

  cursor: pointer;

}
a{
  cursor: pointer;
}

footer .footer_logo ul li a {
        padding: 0 !important;
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
    <section class="page-title" style="background-image:url(images/background/herr.jpg)">
        <div class="auto-container">
            <div class="container">
                 <h2 class="tamañotitulo">Atención al cliente</h2>
                <div class="text">Contamos con múltiples servicios que te ayudarán a la solución de tus problemas IT<br>y al cumplimiento de tus metas.
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
                        <h3 class="tamaño" style="font-weight: 700;color: #292a2e; font-size: 30px; margin-bottom: 1rem;">Atención <span class="text-azulCorp">al cliente</span></h3>                       
                        <div class="separator3"></div>
                        <p class="text-mega m-top-10">Contamos con múltiples servicios que te ayudarán a la solución de tus problemas IT y al cumplimiento de tus metas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5rem;">
              <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#entes').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/linea_atencion.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Líneas de atención</h4>
                            <p>Proteja de forma eficaz su empresa.</p>
                        </div>
                    </div>
                    </a>
                </div>
               

                <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#myModal').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/PQR.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Radicación de PQRs</h4>
                            <p>Comunicación en línea ahorre costos y tiempo.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a onclick="$('#myModal1').modal('show')"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/viabilidad.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Viabilidades</h4>
                            <p>Facilita las comunicaciones de tu compañía.</p>
                        </div>
                    </div>
                    </a>
                </div>


                <!-- <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/chat.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Chat en Vivo</h4>
                            <p>Software a la medida.</p>
                          </div>
                    </div>
                    </a>
                </div> -->

                 <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/pagos.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Área de Pagos</h4>
                            <p>Mayor productividad para tu negocio.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="#"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/PQR.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Prácticas de gestión de tráfico</h4>
                            <p>Protección eficiente para tu empresa.</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/encuesta"><div class="service-style-2">
                        <div class="service-img">
                            <img src="{{ URL::asset('images/icons/herramientas/encuesta.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>Encuesta de Satisfacción</h4>
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

<!-- The Modalentes reguladores Líneas de atención -->
<div class="modal fade" id="entes">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" style="text-align: center;">LINEAS DE ATENCIÓN</h3>
        </div>          
        <!-- Modal body -->
        <div class="modal-body" style="padding: 2rem;  text-align: center;">
          <div class="row">
              <div class="col-md-12">
                <h4 style=" text-align: center;">Línea Gratuita Nacional: 01 8000 180 028</h4><br>
                <h2 class="entes"  style="text-align: center;">LINEAS STRATECSA:</h2>
                <h4 style="text-align: center;">Desde tu fijo: +57 2 395 9595</h4><br>
                <h4 style="text-align: center;">Desde tu celular: 315 4725104</h4><br>
                <h4 style="text-align: center;"><a href="https://www.crcom.gov.co/es/pagina/inicio" target="_blank">www.crcom.gov.co</a></h4><p>&nbsp;</p>

             </div>

          </div> 
        </div>      

      </div>
    </div>
  </div>  

<!-- The Modal PQRs-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" style="text-align: center;">Radicación de PQRs</h2>
        </div>          
        <!-- Modal body -->
        <form method="POST" id="" name="form">
          {{csrf_field()}}
          <div class="modal-body pd-20">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="">Nombre de quien aplica la queja</label>
                <input type="text" name="nombre" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label for="">Teléfono</label>
                <input type="number" name="telefono" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label for="">Razón social de empresa</label>
                <input type="text" name="razon_social" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label for="">Tipo de cliente</label>
                <select name="tipo_cliente" class="form-control">
                  <option value="">Seleccionar...</option>
                  <option value="activo">Activo</option>
                  <option value="no activo">No Activo</option>
                </select>
              </div>
              <div class="col-md-12 form-group">
                <label for="">Asunto</label>
                <input type="text" name="asunto" class="form-control">
              </div>
              <div class="col-md-12 form-group">
                <label for="">Observaciones o Detalles</label>
                <textarea name="observaciones" class="form-control" rows="10"></textarea>
              </div>
            </div>
          </div>
          <!-- modal-body -->
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancelar</button>
          </div>
        </form>

      </div>
    </div>
  </div>  
</div>

<!-- The Modal viabilidades-->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">     
        <!-- Modal Header --> 
        <div class="modal-header" style="background-color: #009cda; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" style="text-align: center;">Viabilidades</h2>
        </div>          
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" id="" name="form" >
          {{csrf_field()}}
          
          <div class="container-fluid form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="col-md-6">Razón social</label>
                  <input type="text" name="razon_social" class="col-md-6 form-control" required>
                </div>
                <div class="form-group">
                  <label class="col-md-6">Nombre contacto</label>
                  <input type="text" name="nombre_contacto" class="col-md-6 form-control" required>
                </div>
                <div class="form-group">
                  <label class="col-md-6">Teléfono movil</label>
                  <input type="text" name="movil" class="col-md-6 form-control">
                </div>
                <div class="form-group">
                  <label class="col-md-6">Teléfono fijo</label>
                  <input type="text" name="fijo" class="col-md-6 form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-6">Dirección</label>
                  <input type="text" name="direccion" class="col-md-6 form-control">
                </div>
                <div class="form-group">
                  <label class="col-md-6">Nit</label>
                  <input type="text" name="nit" class="col-md-6 form-control">
                </div>
                <div class="form-group">
                  <label class="col-md-6">Correo electrónico</label>
                  <input type="email" name="correo" class="col-md-6 form-control" required>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 2%;"><i class="text-primary fa fa-plus-circle"></i></th>
                <th>Servicio</th>
                <th>Coordenadas</th>
                <th>Ciudad</th>
                <th>Capacidad</th>
                <th>Medio de transmisión</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="text-danger fa fa-minus-circle"></i></td>
                <td>
                  <select name="servicio[]" class="form-control">
                    <option value="">Seleccionar...</option>
                    <option value="Ultima milla datos (MPLS)">Última milla datos (MPLS)</option>
                    <option value="Internet dedicado">Internet dedicado</option>
                    <option value="Datos (MPLS)">Datos (MPLS)</option>
                    <option value="Banda ancha">Banda ancha</option>
                  </select>
                </td>
                <td><input type="text" name="coordenadas[]" class="form-control"></td>
                <td><input type="text" name="ciudad[]" class="form-control"></td>
                <td><input type="text" name="ancho_banda[]" class="form-control" value="10 MB"></td>
                <td>
                  <select name="medio_transmision[]" class="form-control">
                    <option value="">Seleccionar...</option>
                    <option value="Fibra">Fibra</option>
                    <option value="Radio">Radio</option>
                    <option value="Cobre">Cobre</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
         <div class="modal-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancelar</button>
          </div>
          </form>
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
            <h3 class="modal-title">Quejas y reclamos</h3>
        </div>    
        <!-- Modal body -->
        <div class="modal-body" style="padding: 3rem;">
          <div class="row">
            <p></p><div class="clear"></div>              
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
              <div class="col-md-6">
                  <img src="https://www.mc.net.co/wp-content/uploads/2015/12/CRC3067.png">
              </div>
              <div class="col-md-6">
                  <img src="https://www.mc.net.co/wp-content/uploads/2015/12/CRC3067.png">
              </div>

              <div class="col-md-6">
                  <button type="button" class="btn btn-primary">Consultar</button>
              </div>
              <div class="col-md-6">
                <button type="button" class="btn btn-primary">Consultar</button>
              </div>
          </div> 
        </div>      

      </div>
    </div>
  </div>  
</div>

</div>

@endsection
@section ('scripts')
<script>
 $('#myModal form').submit(function(){
      $.ajax({
        url: '/pqrs',
        type: 'post',
        cache: true,
        data: $('#myModal form').serialize(),
        success:function(){
          $('#myModal').modal('hide')
          $('#myModal .form-control').each(function(k,v){
            $(v).val('')
          })
          toastr.success("Peticion registrada correctamente")
        }
      })
      return false
    })
</script>

<script>
 $('#myModal1 form').submit(function(){
      $.ajax({
        url: '/oportunidadcomercial',
        type: 'post',
        cache: true,
        data: $('#myModal1 form').serialize(),
        success:function(){
          $('#myModal1').modal('hide')
          $('#myModal1 .form-control').each(function(k,v){
            $(v).val('')
          })
          toastr.success("Viabilidad registrada correctamente")
        }
      })
      return false
    })
    $(document).on('click','table i.fa-plus-circle',function(){
    var html =  `<tr>
                  <th><i class="text-danger fa fa-minus-circle"></i></th>
                  <td>
                    <select name="servicio[]" class="form-control">
                      <option value="">Seleccionar...</option>
                      <option value="Ultima milla datos (MPLS)">Ultima milla datos (MPLS)</option>
                      <option value="Internet dedicado">Internet dedicado</option>
                      <option value="Datos (MPLS)">Datos (MPLS)</option>
                      <option value="Banda ancha">Banda ancha</option>
                    </select>
                  </td>
                  <td><input type="text" name="coordenadas[]" class="form-control"></td>
                  <td><input type="text" name="ciudad[]" class="form-control"></td>
                  <td><input type="text" name="ancho_banda[]" class="form-control" value="10 MB"></td>
                  <td>
                    <select name="medio_transmision[]" class="form-control">
                      <option value="">Seleccionar...</option>
                      <option value="Fibra">Fibra</option>
                      <option value="Radio">Radio</option>
                      <option value="Cobre">Cobre</option>
                    </select>
                  </td>
                </tr>`
    $(this).parent().parent().parent().parent().find('tbody').append(html)
  })
  $(document).on('click','table i.fa-minus-circle',function(){
    var can = $(this).parent().parent().remove()
  })
</script>
@endsection