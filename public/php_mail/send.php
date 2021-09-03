<?php
session_start();
require 'class.phpmailer.php';
require 'class.pop3.php';
require 'class.smtp.php';
//echo $_SESSION['simpleCaptchaAnswer'];
if(isset($_POST['razon']) && isset($_POST['nombre']) && isset($_POST['telefono']) ){

  $mail = new PHPMailer(); // create a new object

  $mail->IsSMTP(); // enable SMTP

  $mail->SMTPAuth = true; // authentication enabled

  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

  $mail->Host = "smtp.gmail.com";

  $mail->Port = 465; // or 587

  $mail->IsHTML(true);

  //email from credentials

  $mail->Username = "socialmediasite3000@gmail.com";

  $mail->Password = "Social9080...";

  $mail->FromName = "Social Media Site";

  $mail->Subject = "Connect Request from reyperez360.com";

  //Html of the message body

  $mail->Body = "<html>
<head>

  <title>Connect Request from reyperez360.com</title>

</head>

<body>

Razon Social: ".$_POST['nombre']." <br/>
Nombre del cliente: ".$_POST['razon']." <br/>
Telefono: ".$_POST['telefono']."

</body>

</html>";
    //address To
    $mail->AddAddress("yor0810@gmail.com");
    //$mail->AddAddress("izbroker24@gmail.com");
    // $mail->AddAddress("ajbrownp@gmail.com");

    if($mail->Send()) {
      $sended = true;
      echo 'sent';
    }else{
      echo 'error';
    }
  //}else{
    //echo 'no google';
  //}
}else{
  echo 'no post';
}
