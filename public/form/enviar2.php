<?php

require '../php_mail/class.phpmailer.php';

require '../php_mail/class.pop3.php';

require '../php_mail/class.smtp.php';


if(isset($_POST['razon']) && isset($_POST['name']) && isset($_POST['telefono']) ){

  $mail = new PHPMailer(); // create a new object

  $mail->IsSMTP(); // enable SMTP

  $mail->SMTPAuth = true; // authentication enabled

  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

  $mail->Host = "smtp.gmail.com";

  $mail->Port = 465; // or 587

  $mail->IsHTML(true);

  //email from credentials

  $mail->Username = "laurenssanchez24@gmail.com";

  $mail->Password = "mision316*";

  $mail->FromName = "Stratecsa";

  $mail->Subject = "Cotizacion Producto Stratecsa";

  //Html of the message body

  $mail->Body = "<html>

<head>

  <title>Cotizacion productos Stratecsa</title>

</head>

<body>

Name: ".$_POST['razon']." <br/>

Best Phone Number: ".$_POST['name']." <br/>

Best email: ".$_POST['telefono']."

</body>

</html>";

  //address To

  $mail->AddAddress("soporte@stratecsa.com");

  if($mail->Send()) {

    $sended = true;

  }

}

?>
