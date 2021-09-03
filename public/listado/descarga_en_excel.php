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

<html>
<?php
 require_once "excel/Classes/PHPExcel.php";
 require_once "excel/Classes/PHPExcel/IOFactory.php";
 require_once "controller/conectar.php";
error_reporting(E_ALL);

ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 600);
//header('Content-Type: text/html; charset=utf-8');
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>  
  <div class="container-fluid">
	<form action="" method="post" enctype="multipart/form-data"><br><br>
    
    	<button type="submit" value="Aceptar" class="btn btn-success" name="submit">Descargar Excel</button>
	</form>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $conexion = new Conectar();
    $sql = 'SELECT *
    		FROM listado';
    $data = $conexion->consultas($sql);
    $cantidad = 'SELECT COUNT(*) FROM listado';
    $canti = $conexion->consultas($cantidad);
	$inputFileName = 'discussdesk.xlsx';
	//$objPHPExcel->createSheet()

	$objPhpClone = new PHPExcel();
	//$objPhpClone = clone $objPhpExcel_load->setActiveSheetIndex(0);
	$objPhpClone->setActiveSheetIndex(0)
					//	->setCellValue('X1', 'Cedula')
            			->setCellValue('A1', 'NOMBRE')
            			->setCellValue('B1', 'APELLIDO')
            			->setCellValue('C1', 'EMPRESA')
            			->setCellValue('D1', 'CARGO')
            			->setCellValue('E1', 'INVITADO POR')
            			->setCellValue('F1', 'EMAIL') // escribe las primeras filas(titulo) // escribe las primeras filas(titulo)*/
            			->setCellValue('G1', 'NIVEL')
            			->setCellValue('H1', 'ASISTIO');

	$objWorksheet = $objPhpClone->getActiveSheet(0);
//catpchat http://foro.elhacker.net/hacking_avanzado/captcha_de_jquery_realpersonjs-t432294.0.html
	$row = 2;
	$column = 0;
	$row_ = 2;
	$con = "234566";
	$conta = 0;
	echo "Cantidad de registros a guardar en excel = ".$canti[0].'<br>';
	foreach($data as $key=>$dat){
		usleep(5000); //descanso 1/2 segundo para mostrar de forma pausada el proceso
 		$porcentaje = $key * 100 / $canti[0]; //saco mi valor en porcentaje
 		ob_start();
 		echo "<script>callprogress(".round($porcentaje).")</script>"; //llamo a la función JS(JavaScript) para actualizar el progreso
		ob_flush();
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(0,$key+2,utf8_encode($dat['Nombre']));
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(1,$key+2,utf8_encode($dat['Apellido']));
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(2,$key+2,utf8_encode($dat['Empresa']));
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(3,$key+2,utf8_encode($dat['Cargo']));
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(4,$key+2,utf8_encode($dat['Invita']));
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(5,$key+2,utf8_encode($dat['Correo']));
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(6,$key+2,$dat['Nivel']);
		$objPhpClone->setActiveSheetIndex()->setCellValueByColumnAndRow(8,$key+2,$dat['Asistio']);
		flush(); //con esta funcion hago que se muestre el resultado de inmediato y no espere a terminar todo el bucle  para  mostrar el resultado
	}
	echo "<h1>YA TERMINO DE GENERAR EL ARCHIVO</h1>";
	echo '<a href="testFile.xlsx" style="font-size:20px;">Descargar archivos</a>';
	$objWriter = PHPExcel_IOFactory::createWriter($objPhpClone, 'Excel2007');
	$objWriter->save('testFile.xlsx');
	//header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// nombre del archivo
	//header('Content-Disposition: attachment; filename="referidos_con_puesto.xlsx"');
	//forzar a descarga por el navegador
	die;
}
?>


<!--<a href="no-script.html">Download now!</a>-->