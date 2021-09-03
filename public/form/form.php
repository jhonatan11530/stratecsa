


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="form.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

</head>
<body>

<form action="enviar.php" method="post" id="msform" name="mc-embedded-subscribe-form" class="validate desktop container" novalidate>
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
     <div class="row">
      <div class="col-sm-12">
       <center>
      <b style="font-size: 20px">Asistente Cotizacion</b>
      <br>
      <b style="font-size: 20px;">Informacion de contacto</b>
    </center>
     </div>
   </div>
    
    <br>
    <div class="form-group row">
      <div class="col-sm-12">
      <input type="text" name="razon" placeholder="Razón social de la empresa" class="inputtext" />
    </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
      <input type="text" name="nombre" placeholder="Persona de contacto" class="inputtext" />
    </div>
    </div>
    <div class="form-group row">  
      <div class="col-sm-12">
    <input type="text" name="telefono" placeholder="Telefono" class="inputtext" />
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
       <input type="email" name="correo" placeholder="Correo" class="inputtext" />
     </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-12">
    <input type="text" name="ciudad" placeholder="Ciudad" class="inputtext" />
    </div >
    </div>
    <div class="form-group row">
    <div class="col-sm-12">
      <input type="button" name="next" class="next action-button derecha" value="Next" />
    </div>
     </div>
  </fieldset>
  <fieldset>
    <div class="form-group row">
      <div class="col-sm-12">
        <center>
          <b style="font-size: 20px">Asistente Cotizacion</b>
          <br>
          <b style="font-size: 20px;">Informacion de enlace</b>
        </center>
      </div>
      </div>
    <br>
   <div class="form-group row">
      <div class="col-sm-12">
        <label>
          <input type="checkbox" name="enlace" value="dir" > Direccion</label>
        <label>
      </div>
    </div>
     <div class="form-group row">
      <div class="col-sm-12">
        <label>
       <input type="checkbox" name="coordenada" value="corde">Cordenadas</label><br>
        <label>
      </div>
    </div>
    <div class="form-group row" >
      <div class="col-sm-12">
      <input type="text" name="direccion" class="form-control formu"placeholder="Direccion" >
      </div>
    </div>
    <div class="form-group row" >
      <div class="col-sm-12">
      <input type="text" name="direccion" class="form-control formu"placeholder="Direccion" >
      </div>
    </div>
     <div class="form-group row" >
      <div class="col-sm-6">
      <input type="text" name="cord"  placeholder="Cordenadas" class="form-coordenadas" >
      </div>
    </div>
     <div class="form-group row" >
      <div class="col-sm-6">
     <input type="text" name="cord" placeholder="Cordenadas" class="form-coordenadas formu">
      </div>
    </div>
     <div class="form-group row" >
      <div class="col-sm-12">
        <input type="text" name="nombre" placeholder="Departamento" class="inputtext" />
      </div>
    </div>
    <div class="form-group row" >
      <div class="col-sm-12">
          <input type="text" name="telefono" placeholder="Ciudad" class="inputtext" />
      </div>
    </div>
     <div class="form-group row" >
      <div class="col-sm-12">
        <input type="button" name="previous" class="previous action-button" value="Previous" />
      </div>
    </div>
     <div class="form-group row" >
      <div class="col-sm-12">
        <input type="button" name="next" class="next action-button" value="Next" />
      </div>
    </div>        
  </fieldset>

  <fieldset>

    <div class="form-group row" >
      <div class="col-sm-12">
        <center>
          <label style="font-size: 20px">Asistente Cotizacion</ñabel>
              <br>
          <label style="font-size: 20px;">Informacion tecnica</label>
        </center>
      </div>
    </div>     
    <br>

    <div>
      <p>Direccion ip</p>
      <div class="radio">
        <label><input type="radio" name="optradio">/30(1Ip)</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio">/29(5IP)</label>
      </div>
    </div>
    <div>
      <label>Como prefieres el servicio</label>
        <label class="checkbox-inline radio"><input type="checkbox" value="">Fibra</label>
        <label class="checkbox-inline radio"><input type="checkbox" value="">Radio</label>
        <label class="checkbox-inline radio"><input type="checkbox" value="">Enlace</label>
        <label class="checkbox-inline radio"><input type="checkbox" value="">Cobre</label>
    </div>
    <br>

    <div>         
      <label>Capacidad Requerida</label> <br> 
        <select class="form-control" class="inputtext">
          <option>Selecciona la Capacidad la cual Requieres?...</option>
          <option value="1">10 MB</option>
          <option value="2">20 MB</option>
          <option value="3">30 MB</option>
          <option value="4">40 MB</option>
          <option value="5">50 MB</option>
          <option value="6">60 MB</option>
          <option value="7">70 MB</option>
          <option value="8">80 MB</option>
          <option value="9">90 MB</option>
          <option value="10">100 MB </option>
          <option value="11">200 MB</option>
          <option value="12">300 MB</option>
          <option value="13">400 MB</option> 
          <option value="14">Desde 500 MB hasta 1000 MB</option>
        </select>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="enviar" class=" action-button" value="Finalizar" id="boton" data-toggle="modal" data-target="#miventana"/>

    <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center d-block">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <b class="modal-title text-center">TENGA UN BUEN DIA</b>
          </div>
              <div class="modal-body text-center">
                  <b>GRACIAS POR PREFERIRNOS EN CUALQUIER MOMENTO UNO DE NUESTROS REPRESENTANTES SE COMUNICARA CON USTED</b>
                  <br>
                  <b style="color: blue;">Strategic Technological de Colombia</b> 
                  <img src="../images/stratecsa.png" class="tamaño">          
              </div>
                <div class="modal-footer text-center d-block pt-4 pb-4">
                  <div class="mx-auto">
                    <button type="submit" value="enviar" id="enviar" class="action-button-enviar" >Enviar</button>
                  </div>
              </div>
          </div>
        </div>
  </fieldset>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script type="text/javascript" src="form.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type-"text/javascript" src="js/script.js"></script>
<script async="" src="js/analytics.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer> </script>
<script  src="js/captcha.js"></script>
<script src="js/sweetalert.min.js"></script>

</body>
</html>