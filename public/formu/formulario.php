<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="formu/form.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>
<body>
	<form action="enviar.php" method="post">
	<div class="container containers">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0" class="active">
                    <a href="#step-1" class="btn" aria-controls="step-1" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-user"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-plus"></i></span>
                    </a>
                </li>
                <li rel-index="2">
                    <a href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-ok"></i></span>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step-1">
                <div class="col-md-12">
                
                    <center>
	                    <h3>Asistente Cotización</h3>
	                    <h4>Información de contacto</h4>
                	</center><br>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Razón social de la empresa</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Razon social" name="razon"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Persona de contacto</label>
                            <input  maxlength="10" type="text" required="required" class="form-control" placeholder="Contacto" name="nombre"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Telefono</label>
                            <input  maxlength="10" type="number" required="required" class="form-control" placeholder="Telefono" name="telefono"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Correo</label>
                            <input  maxlength="10" type="email" required="required" class="form-control" placeholder="Correo" name="correo"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Ciudad</label>
                            <input  maxlength="10" type="text" required="required" class="form-control" placeholder="Ciudad"   name="ciudad"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                           <button id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-2">
            	 <div class="container">
					   <center>
	                    <h3>Asistente Cotización</h3>
	                    <h4>Información de contacto</h4>
                	</center><br>
					    <label class="radio-inline">
					      <input type="radio" name="optradio">Dirección
					    </label>
					    <label class="radio-inline">
					      <input type="radio" name="optradio">Coordenadas
					    </label>
					</div>
					<div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Departamento</label>
                            <input  maxlength="10" type="text"  class="form-control" placeholder="12-3456789"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label">Ciudad</label>
                            <input  maxlength="10" type="text" class="form-control" placeholder="12-3456789"  />
                        </div>
                    </div>

                <div class="col-md-12">
                    <button id="step-2-next" class="btn btn-lg btn-primary pull-right">Next</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-3">
            	 <center>
	                    <h3>Asistente Cotización</h3>
	                    <h4>Información tecnica</h4>
                	</center><br>
                	 <div class="row">
                        <div class="form-group col-sm-12">
                        	<label>Dirección ip</label> <br>
                            <label class="radio-inline">
					      <input type="radio" name="optradio">/30 (1Ip)
					    </label>
					    <label class="radio-inline">
					      <input type="radio" name="optradio">/29 (5IP)
					    </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                        	<label>Como prefieres el servicio?</label> <br>
                            <label class="checkbox-inline"><input type="checkbox" value="">Fibra</label>
							<label class="checkbox-inline"><input type="checkbox" value="">Radio enlace</label>
							<label class="checkbox-inline"><input type="checkbox" value="">cobre</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="subject">
                                Capacidad Requerida</label><br>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Seleccione:</option>
                                <option value="service">10MB</option>
                                <option value="suggestions">20MB</option>
                                <option value="product">30MB</option>
                                <option value="product">40MB</option>
                                <option value="product">50MB</option>
                                <option value="product">60MB</option>
                            </select>
                        </div>
                    </div>
                <div class="col-md-12">
                    <button id="step-3-next" class="btn btn-lg btn-primary pull-right" data-toggle="modal" data-target="#miventana"/> Finalizar</button>
                </div>
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="miventana">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gracias por preferirnos.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </butto n>
      </div>
      <div class="modal-body">
        <p>En cualquier momento uno de nuestros representantes se comunicara con usted.</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
</form>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script type="text/javascript" src="formu/form.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>