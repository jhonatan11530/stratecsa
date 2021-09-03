<?php
ob_start();  
 if(!isset($_SESSION)){ 
  session_start(); 
 }
 if($_SESSION["tipo_perfil"]  !== "7b7f1fb5a077b456dc38df7c0781850c65c2e735"){
   header("location: login.php");
 }
 ob_end_flush();
?> 
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
 <script src="script/menu_dropdown_session.js"></script>  
  <title></title>
  
  <style type="text/css">

/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
 body{
 	margin-top:0px !important;
 	margin-bottom: 0px !important;
 }
</style>

</head>
<body>

 <nav class="navbar navbar-default container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            <li role="separator"  class="divider"></li>
             <li><a href="descarga_en_excel.php"> Descarga en Excel</a></li>
             <form action="" method="post">
              <li><button type="submit" name="btn_salir" class="bnt btn-danger btn-block" id="log_out">Salir</button></li>
             </form>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 </nav>


 <div class="container">
    <h1 class="well">Registrar Datos</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nombre</label>
								<input type="text" placeholder="Digite el nombre" id="nombre" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Apellido</label>
								<input type="text" placeholder="Digite los apellidos" id="apellido" class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Empresa</label>
							<input type="text" placeholder="Empresa" id="empre" class="form-control">
						</div>	
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Cargo</label>
								<input type="text" placeholder="Cargo de la persona" id="cargo" class="form-control">
							</div>		
							<div class="col-sm-6 form-group" >
								<label>Invitado por</label>
								<input type="text" placeholder="Invitado por " id="invita" class="form-control">
							</div>	
						</div>						
					<div class="row">
              <div class="col-sm-6 form-group">
                <label>Correo</label>
                <input type="text" placeholder="Correo Electronico" id="email" class="form-control">
              </div>    
              <div class="col-sm-6 form-group" >
                <label>Nivel</label>
                <select class="form-control" id="slt_nivel">
                  <option value="0"></option>
                  <option value="1">Alto</option>
                  <option value="2">Medio</option>
                  <option value="3">Bajo</option>
                </select>
              </div>  
            </div>    
					<button type="button" id="btn_enviar" class="btn btn-lg btn-success">Guardar</button>	
					</div>

				</form> 
				</div>
	</div>
	</div>
</body>
</html>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Buscar por cedula</h4>
      </div>
      <div class="modal-body">
       <input type="number" id="inp_cedu" class="form-control" placeholder="Digite la cedula"><br>
       <button class="btn btn-info"  id="btn_busc_cedu">Buscar por cedula </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
 $(function(){
  $("#btn_enviar").click(function(){
   var nombre = $("#nombre").val();
   var apellido = $("#apellido").val();
   var empre = $("#empre").val();
   var cargo = $("#cargo").val();
   var invita = $("#invita").val();
   var email = $("#email").val();
   var slt_nivel = $("#slt_nivel").val();
   if(nombre.length > 0 && apellido.length > 0 && email.length > 0){
   	 $.ajax({
   	 	datetype:"html",
   	 	type:"post",       
   	 	url:"controller/register_user.php",
   	 	data:{"nomb":nombre,"apell":apellido,"empre":empre,"carg":cargo,"invi":invita,"email":email,"nivel":slt_nivel},
   	 	success:function(data){
   	 	 if(data.exito){
        alert(data.exito);
   	 	  $("#nombre").val("");
        $("#apellido").val("");
        $("#empre").val("");
        $("#cargo").val("");
        $("#invita").val("");
        $("#email").val("");
        $("#slt_nivel").val("");
   	 	 }else{
   	 	 	alert("hubo un problema, por favor verifique los datos digitados");
   	 	 }
   	 	}
   	 });
   }else{
   	alert("falta digitar datos");
   }
  });
 });
 	
</script>

<?php
 if(isset($_POST['btn_salir'])){
  session_destroy();
 }
?>
