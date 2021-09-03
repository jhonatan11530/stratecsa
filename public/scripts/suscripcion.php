<?php
		
	require("../modelos/PHPMailer-master/class.phpmailer.php");
	require("../modelos/PHPMailer-master/class.smtp.php");

	if (isset($_POST)) {
    
        $mensaje = 'Se ha realizado una suscripcion de la pagina Stratecsa al correo '.$_POST['suscribed'];
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = "server.stratecsa.net;mail.stratecsa.com";
		$mail->Username = "info@stratecsa.com";
		$mail->Password = "Inf0@stra*"; 
		$mail->Port = 25; 
		$mail->CharSet = 'UTF-8';
		$mail->setLanguage('es');
		$mail->From = $_POST['suscribed']; 
		$mail->FromName = $_POST['suscribed'];
		$mail->AddAddress("info@stratecsa.com"); 
		$mail->IsHTML(true); 
		$mail->Subject = "Suscripcion"; 		
		$body = 'Mensaje: '.$mensaje;
		$mail->Body = $body;
		$exito = $mail->Send();
		return $exito;
	}
?>