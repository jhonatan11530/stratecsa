<?php
$destino = "info@stratecsa.com";

$razon = $_POST['razon'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$dir = $_POST['dir'];
$cor1 = $_POST['cor1'];
$cor2 = $_POST['cor2'];
$departamento = $_POST['departamento'];
$capacidad = $_POST['capacidad'];
$remitente = $_POST['correo'];
$ciudadd = $_POST['ciudadd'];
$treinta = $_POST['treinta'];
$veinte = $_POST['veinte'];
$asunto="Cotización producto";



$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $razon . " "; 
$mensaje .= "\n Los datos de contacto son:". "\nTelefono: " . $telefono . " "; 
$mensaje .= "\ncorreo electronico: " . $correo . " "; 
$mensaje .= "\nciudad: " . $ciudad . " "; 

 if($_POST['direccion'] == 'direccion'){
 $mensaje .= "\nUbicacion del enlace seleccionada: " . "Direccion" . " "; 
	}
	if ($_POST['coordenada'] == 'coordenada'){
		 $mensaje .= "\nUbicacion del enlace seleccionada: " . "Coordenadas". " "; 
	}

if ($_POST['dir'] !==""){
		 $mensaje .= "\nDireccion del enlace: " . $dir. " "; 
	}

if ($_POST['cor1'] !==""){
		 $mensaje .= "\nCoordenas del enlace" ."\nCoordenada 1:". $cor1. "\nCoordenada 2:".  $cor2. " "; 
	}

$mensaje .= "\nDepartamento de enlace: " . $departamento . " "; 
$mensaje .= "\nCiudad de enlace: " . $ciudadd . " "; 

 if($_POST['treinta'] == 'treinta'){
 $mensaje .= "\nLa direccion ip seleccionada por el cliente es: " . "/30 (1Ip)  " . " "; 
	}
	if ($_POST['veinte'] == 'veinte'){
		 $mensaje .= "\nLa direccion ip seleccionada por el cliente es: " . "/29 (5IP)". " "; 
	}


 if($_POST['fibra'] == 'fibra'){
$mensaje .= "\nEl cliente quiere el servicio en: " . "Fibra " . " "; 
	}
	if($_POST['radio'] == 'radio'){
 $mensaje .= "\nEl cliente quiere el servicio en: " . "Radio enlace " . " "; 
	}
	if($_POST['cobre'] == 'cobre'){
 $mensaje .= "\nEl cliente quiere el servicio en: " . "Cobre " . " "; 
	}

 if($_POST['capacidad'] == 'diez'){
$mensaje .= "\nLa capacidad requerida del cliente es: " . "10MB " . " "; 
	}

 if($_POST['capacidad'] == 'vei'){
$mensaje .= "\nLa capacidad requerida del cliente es: " . "20MB " . " "; 
	}

if($_POST['capacidad'] == 'tre'){
$mensaje .= "\nLa capacidad requerida del cliente es: " . "30MB " . " "; 
	}

 if($_POST['capacidad'] == 'cua'){
$mensaje .= "\nLa capacidad requerida del cliente es: " . "40MB " . " "; 
	}

 if($_POST['capacidad'] == 'cicu'){
$mensaje .= "\nLa capacidad requerida del cliente es: " . "50MB " . " "; 
	}

 if($_POST['capacidad'] == 'sese'){
$mensaje .= "\nLa capacidad requerida del cliente es: " . "60MB " . " "; 
	}
	

$mensaje .= "\n\nEste mensaje fue enviado el dia " . date('d/m/Y', time()); 


mail($destino, $asunto, $mensaje,"from:$remitente");

header('Location:https://stratecsa.com/services');
?>