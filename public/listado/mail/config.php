<?php

include_once "../controller/conectar.php";
include_once "Envio_Correo.php";
$correo = new Envio_Correo();
$correo->add_destinations("andres18281@hotmail.com","claudio");
$correo->plantilla_registro();
$correo->send();


?>