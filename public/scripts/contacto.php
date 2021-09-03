<?php
		
	//require("../modelos/PHPMailer-master/class.phpmailer.php");
	require("../modelos/PHPMailer-FE_v4.11/_lib/class.phpmailer.php");
	//require("../modelos/PHPMailer-master/class.smtp.php");

	if (isset($_POST)) {

		if ($_POST['to'] == 'solicitud') {			
			$_POST['message'] = $_POST['plan']."<br>".$_POST['lista'];
			$_POST['message'].= 'Razon Social Empresa: '.ucwords($_POST['rzsem'])."<br>";
			$_POST['message'].= 'Nit o Cedula: '.$_POST['nt_cc']."<br>";
			$_POST['message'].= 'Persona de Contacto: '.ucwords($_POST['name'])."<br>";
			$_POST['message'].= 'Telefono: '.$_POST['telefono']."<br>";
			$_POST['message'].= 'Dirección: '.$_POST['direccion']."<br>";
			$_POST['message'].= 'Ciudad: '.ucwords($_POST['ciudad'])."<br>";
			$_POST['asunto'] = 'Solicitud Producto';
		}
		else{
			$body = $_POST['message'];
			$_POST['departamento'] = str_replace('_', ' ', $_POST['departamento']);
			$_POST['message'] = 'Nombre: '.ucwords($_POST['name'])."<br>";
			$_POST['message'].= 'Telefono: '.$_POST['telefono']."<br>";
			$_POST['message'].= 'Dirección: '.$_POST['direccion']."<br>";
			$_POST['message'].= 'Departamento: '.ucwords($_POST['departamento'])."<br>";
			$_POST['message'].= $body;
		}

		$mail = new PHPMailer();
		
		//$mail->IsSMTP();
		//$mail->SMTPAuth = true;
		$mail->Host = "server.stratecsa.net;mail.stratecsa.com";
		$mail->Username = "info@stratecsa.com";
		$mail->Password = "Inf0@stra*"; 
		$mail->Port = 25; 
		$mail->CharSet = 'UTF-8';
		$mail->setLanguage('es');
		$mail->From = $_POST['email']; 
		$mail->FromName = $_POST['name'];
		$mail->AddAddress($_POST['dest']); 
		//$mail->AddAddress('csc9612@hotmail.com'); 
		$mail->IsHTML(true); 
		$mail->Subject = $_POST['asunto']; 		
		$body = 'Mensaje: '.$_POST['message'];
		$mail->Body = $body;

		$exito = $mail->Send();

		if ($exito) {			
			if ($_POST['to'] == "solicitud") {
				header('Location: /solicitud-producto?res='.$exito);
			}else{
				return $exito;
			}
		}
	}
?>