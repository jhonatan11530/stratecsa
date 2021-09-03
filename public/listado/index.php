<?php
 ob_start(); 
 if(!isset($_SESSION)){ 
  session_start(); 
 }
 if($_SESSION["tipo_perfil"] != "7b7f1fb5a077b456dc38df7c0781850c65c2e735"){
   header("location: login.php");
 }
 ob_end_flush();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
</head>
<body>
 <div class="container-fluid">
 <div class="container" style="margin-top:20%;">
  <div class="col-md-6 col-lg-6">
    <a href="registrar.php" class="btn btn-success btn-block btn-lg">REGISTRAR</a>
  </div>
  <div class="col-md-6 col-lg-6">
  	<a href="buscar.php" class="btn btn-success btn-block btn-lg">CONSULTAR</a>
  </div>
 </div>

 </div>
</body>
</html>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>