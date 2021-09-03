<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'class.phpmailer.php';
require 'class.smtp.php';
require 'PHPMailerAutoload.php';

class Envio_Correo {
	private $mail = null;
	private $destinatarios;
	private $cedula = 0;
	private $nombre = "";
	private $codigo = 0;
	private $email = "";
	private $pass = "";
	private $msn = "";
	private $fact = 0;
	public function __construct(){
		$this->mail = new PHPMailer;
		$this->mail->setFrom('desarrollo@stratecsa.com', 'Kit Motos');
	//	$this->mail->addReplyTo('andres18281@hotmail.com', 'giraldo');
		$this->mail->AltBody = 'This is a plain-text message body';
		$this->mail->isSMTP();
		$this->mail->SMTPDebug = 1;
		$this->mail->Debugoutput = 'html';
		$this->mail->Host = '181.49.227.58';
		$this->mail->SMTPAuth = true;
		$this->mail->Username = "stra";
		//Password to use for SMTP authentication
		$this->mail->Password = "julian2015";
		
		$this->mail->isHTML(true);
		$this->mail->SMTPSecure = '';
		$this->mail->port = 25;
		$this->mail->CharSet="utf-8";

	}	
	public function Get_Destinations(){
		return $this->destinatarios;
	}

	public function Tiempo($miliseg){
		$this->mail->Timeout=$miliseg;
	}

	public function add_destinations($destinacion,$nombre){
			$array = array("destino"=>$destinacion,"nombre"=>$nombre);
			$this->destinatarios[] = $array;
	}

	public function plantilla_registro(){
		    if(file_exists("plantilla.html")){
		    	$template = "plantilla.html";
		    }
			$plantilla = file_get_contents($template);
			//$this->mail->msgHTML($plantilla);
			$this->mail->Body = $plantilla;	
	}

	
	
	
	public function Send() {
		foreach($this->Get_Destinations() as $array){
			$this->mail->addAddress($array["destino"], $array["nombre"]);
			$exito = $this->mail->Send();
            $intentos = 1;
            while((!$exito)&&($intentos<5)&&($this->mail->ErrorInfo!="SMTP Error: Data not accepted")){
              sleep(1);
              echo $this->mail->ErrorInfo;
              $exito = $this->mail->Send();
              $intentos=$intentos+1;
			}
			if($this->mail->ErrorInfo=="SMTP Error: Data not accepted") {
             	 $exito = true;
              	 echo $this->mail->ErrorInfo;
              	 return false;
            }
            if(!$exito){
               echo "Problemas enviando correo electrónico a ".$array["nombre"];
               echo "<br/>".$this->mail->ErrorInfo;
               return false;
            }else{
               $mensaje="<p>Has enviado un mensaje a:<br/>";
               $mensaje.=$array["destino"]." ";
		       $this->mail->isSendmail();
		       return true;
			}
			$this->mail->clearAddresses();
   			$this->mail->clearAttachments();
		}
	}

	public function Asunto($asunto){
		$this->mail->Subject = $asunto;
	}

	
}


// http://stackoverflow.com/questions/24869059/php-mailer-with-html-template-and-sending-variables
//http://stackoverflow.com/questions/17687325/phpmailer-unable-to-load-msghtml
?>
