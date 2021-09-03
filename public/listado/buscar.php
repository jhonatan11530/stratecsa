<?php
 ob_start(); 
 if(!isset($_SESSION)){ 
  session_start(); 
 }
 if($_SESSION["tipo_perfil"] !== "7b7f1fb5a077b456dc38df7c0781850c65c2e735"){
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
            <li><a href="descarga_en_excel.php"> Descarga en Excel</a></li>
            <li role="separator"  class="divider"></li>
            <form action="" method="post">
              <li><button type="submit" name="btn_salir" class="bnt btn-danger btn-block" id="log_out">Salir</button></li>
            </form>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 </nav>


 <div class="container">
    <h1 class="well">BUSCAR ASISTENTE</h1>
	<div class="col-lg-12 well">
	  <div class="row">
				<form>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>NOMBRE, TELEFONO O CORREO</label>
								<input type="text" placeholder="Digite algun dato para buscar" id="inp_buscar" class="form-control input-lg">
							</div>
						</div>					
						
            <button type="button" id="btn_buscar" class="btn btn-lg btn-info">Consultar</button>	
					</div>
				</form> 
		</div>
	</div>
  <div class="col-lg-12">
    <div class="row">
      <table class="table table-condensed">
        <thead>
           <th> NOMBRE </th>
           <th> APELLIDO </th>
           <th> EMPRESA </th>
           <th> CARGO </th>
           <th> INVITA </th>
           <th> NIVEL </th>
           <th> Asistio </th>
        </thead>
        <tbody id="body_busque">


        </tbody>
      </table>
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
         <label> Confirmar Asistencia </label>  
      </div>
      <div class="modal-body" style="background-image:url(asistencia.png);background-repeat:no-repeat;background-size: 100%;height: 400px !important;">
      </div>
      <div class="modal-footer">
        <button type="button" name="" class="btn btn-success btn-lg btn_id" data-dismiss="modal" id="btn_si">SI</button>
        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>
 $(function(){
  var id_person;
  $("#btn_buscar").click(function(){
    $("#body_busque").html("");
    var dato = $("#inp_buscar").val();
    $.ajax({
      dateType:"json",
      type:"post",
      data:{"buscar_":dato},
      url:"controller/consulta_person.php",
      success:function(data){
        var data = $.parseJSON(data);
        if(Object.prototype.toString.call(data) === '[object Array]'){
          $.each(data,function(key,val){
            var t = '<tr >\
                      <td>'+val.nomb+'</td>\
                      <td>'+val.apell+'</td>\
                      <td>'+val.empre+'</td>\
                      <td>'+val.cargo+'</td>\
                      <td>'+val.invita+'</td>\
                      <td>'+val.nivel+'</td>\
                      <td><button id='+val.id+' class="btn btn-success asistio"><span class="glyphicon glyphicon-ok"></span></button></td>\
                    <tr>';
            $(t).appendTo($("#body_busque"));
            $("#body_busque").slideDown('slow');
          });
        }else if(Object.prototype.toString.call(data) === '[object Object]'){
          var t = '<tr>\
                      <td>'+data.nomb+'</td>\
                      <td>'+data.apell+'</td>\
                      <td>'+data.empre+'</td>\
                      <td>'+data.cargo+'</td>\
                      <td>'+data.invita+'</td>\
                      <td>'+data.nivel+'</td>\
                      <td><button id='+data.id+' class="btn btn-success asistio"><span class="glyphicon glyphicon-ok"></span></button></td>\
                    <tr>';
            $(t).appendTo($("#body_busque"));
            $("#body_busque").slideDown('slow');
        }else{
          alert("No existe el usuario, por favor crearlo");
        }
      }
    });
  });
  $("#btn_si").click(function(){
    var id_persona = $(this).attr('name');
    $.ajax({
      dataType:"json",
      type:"post",
      data:{"id_pers":id_persona},
      url:"controller/update_asisten.php",
      success:function(data){
        if(data.exito){
          alert("Anexado a la libreta de asistentes");
        }else{
          alert("por favor nuevamente registrar el ingreso");
        }
      }
    });
  });
});

  $(document).on('click',".asistio",function(){
    id_person =  $(this).attr('id');
    $("#btn_si").attr('name',id_person);
    $("#myModal").modal('show');
  });
 	
</script>
<?php
 if(isset($_POST['btn_salir'])){
  session_destroy();
 }
?>