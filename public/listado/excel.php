<?php
require_once "excel/Classes/PHPExcel.php";
require_once "excel/Classes/PHPExcel/IOFactory.php";
include_once "controller/conectar.php";
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 6000);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" enctype='multipart/form-data'>

  <input type="submit" name="enviar" value="enviar">
 </form>
  <?php
  
 
  if(isset($_POST['enviar'])){
  	
  	
    $conecta = new Conectar();
   	
       $inputFileName = 'listado.xlsx';
       //$objPHPExcel->createSheet()
       $objPhpExcel_load = new PHPExcel();
       $objPhpExcel_load = PHPExcel_IOFactory::load($inputFileName);
       $objWorksheet = $objPhpExcel_load->getActiveSheet(0); 
    for($i= 8;$i <= 163;$i++){
      $var = $objWorksheet->getCellByColumnAndRow(0, $i)->getValue();
     if($var != ""){
      $nombre = trim($objWorksheet->getCellByColumnAndRow(0, $i)->getValue());  
      $apellido = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(1, $i)->getValue())); 
      $empresa = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(2, $i)->getValue()));   
      $cargo = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(3, $i)->getValue()));
      $invitado = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(4, $i)->getValue()));
      $correo = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(5, $i)->getValue()));
  	  $op1 = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(6, $i)->getValue()));
      $op2 = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(7, $i)->getValue()));
      $op3 = utf8_decode(trim($objWorksheet->getCellByColumnAndRow(8, $i)->getValue()));
      if($op1 == "X"){
        $opcion = 1;
      }else if($op2 == "X"){
        $opcion = 2;
      }else if($op3 == "X"){
        $opcion = 3;
      }else{
        $opcion = null;
      }

      $array = array("Nombre"=>$nombre,
                    "Apellido"=>$apellido,
                    "Empresa"=>$empresa,
                    "Cargo"=>$cargo,
                    "Invita"=>$invitado,
                    "Correo"=>$correo,
                    "Nivel"=>$opcion
                    );
      $respon = $conecta->inserta("listado",$array);
      print_r($respon);
    }	 
   	echo '<h1> Listo</h1>';
  }
}

  ?>
</body>
</html>