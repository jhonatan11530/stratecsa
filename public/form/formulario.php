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
	<form  method="post" action="enviar.php">
	<div id="msgprod"></div>
	<div class="form-group row">
	<input type="text" name="razon" class="form-control formu" required placeholder="Razon Social Empresa">
	</div>
	<div class="form-group">
	<input type="text" name="name" class="form-control formu" required placeholder="Persona de Contacto">
	</div>
	<div class="form-group">
	<input type="number" name="telefono" class="form-control formu" required placeholder="Telefono">
	</div>
	<div class="form-group">
	<input type="text" name="correo" class="form-control formu" required placeholder="Correo">
	</div>
	<div class="form-group">
	<input type="text" name="ciudad" class="form-control formu" required placeholder="Ciudad">
	</div>
	<li><button type="button" class="btn btn-success btn-info-full next-step" id="subscribe" name="subscribe" data-toggle="modal" data-target="#miventana"/>Finalizar</button></li>
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
                
                  <img src="images/stratecsa.png" class="tamaño">          
              </div>
                <div class="modal-footer text-center d-block pt-4 pb-4">
                  <div class="mx-auto">
                      <button type="submit" class="btn btn-success" name="enviar">Enviar</button> 
                  </div>
              </div>
          </div>
        </div>
	
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script type="text/javascript" src="form.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>