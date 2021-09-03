<?php
error_reporting(1);
//ini_set('max_execution_time', 500);
 /*
 $array[] = array("empresa"=>"Lagos de la Bocha","ip"=>"192.168.99.51");
 $array[] = array("empresa"=>"Zaguan de la Flores Ventas","ip"=>"192.168.99.114");
 $array[] = array("empresa"=>"Essenza","ip"=>"192.168.99.50");
 $array[] = array("empresa"=>"Reserva Campestre","ip"=>"192.168.99.17");
 $array[] = array("empresa"=>"Alborada Jamundi","ip"=>"192.168.99.40");
 $array[] = array("empresa"=>"Boreal","ip"=>"192.168.99.16");*/
 //$output = shell_exec("ping ".$val['ip']);
 echo "probando ...";
 $output = shell_exec("ping 192.168.99.51");
 echo $output;
/*
 foreach($array as $val){
 	

	if (strpos($output, "recibidos = 0")) {
    	echo $val['empresa'].' No Conectado'.'<br>';
	}else{
    	echo $val['empresa'].' Conectado'.'<br>';
	}
 }
 */

?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
 <div class="col-md-5">
  <table class="table">
    <thead>
      <td> Empresa</td>
      <td> Ver</td>
    </thead>
    <tbody>
     <tr>
      <td>Lagos de la Bocha</td>
      <td></td>	
     </tr>
     <tr>
      <td>Essenza</td>
      <td></td>	
     </tr>
     <tr>
      <td></td>
      <td></td>	
     </tr>
     <tr>
      <td></td>
      <td></td>	
     </tr>
     <tr>
      <td></td>
      <td></td>	
     </tr>
    </tbody>
  </table>
 </div>
</div>
</body>
</html>
-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js" type="text/javascript"></script>