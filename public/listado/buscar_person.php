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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title></title>

 


  

</head>
<body>
 <div class="navbar navbar-default">
 </div>
  <div class="container">
   <div class="row" style="margin-top:1%;">
    <div class="navbar-form"></div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form>
        <div class="form-group" style="display:inline;">
            <div class="input-group" style="display:table;">
                <input class="form-control" id="id_person" name="search" placeholder="Digite la cedula" autocomplete="off" autofocus="autofocus" type="text">
            	<div class="input-group-btn navbar-btn" style="outline:1px solid #7F9192; border-radius:6px;">
				  <a href="#" class="btn btn-default btn-nav" id="btn_searh">
				    <span class="glyphicon glyphicon-search"></span>
				  </a>
				</div>
            </div>
        </div>
      </form>
    </div>
    <div class="col-md-3"></div>
     
   </div><!--/.row-->
    <div class="row">
     <div class="col-md-3" ></div> 
     <div class="col-md-8" id="imagen" style="width:320px;height:384px;"></div>
     <div class="col-md-1" id="imp"></div>	
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
        <h4 class="modal-title">Informacion</h4>
      </div>
      <div class="modal-body">
        <p>La cedula no existe en el sistema</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<script>
 $(function(){
  $("#btn_searh").click(function(){
    var id = $("#id_person").val();
    if(id > 5){
      $.ajax({
      	//datetype:"html",
      	type:"post",
      	url:"controller/buscar_client.php",//buscar_client
      	data:{"id":id},
      	success:function(data){
      	  if(data == "no_existe"){
      	  	$("#myModal").modal('show');
      	  }else{
 			$("#imp").append('<input type="button" class="btn btn-info btn-xs" value="Click para imprimir" onClick="window.print()">');
      	    $("#imagen").html(data);
      	  }
      	}
      });
    }else{
    	alert("no existe");
    }
  });
 });

</script>