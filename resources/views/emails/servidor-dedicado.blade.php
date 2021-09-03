<!DOCTYPE html>
<html>
<head>
	<title>Cotización de servidor dedicado</title>
</head>
<body>
	<h1>Hola, tenemos un mensaje de cotización del sitio de Stratecsa para ti</h1>
	<h5>La siguiente persona se encuentra interesada en el servicio <b>servidor dedicado</b> y ha dejado sus datos en el asistente de cotización de stratecsa, a continuación se muestran los detalles</h5>
	<ul>
		<li><b>Nombre de la empresa:</b> {{ $Nombre_empresa }}</li>
		<li><b>Nombre de contacto:</b> {{ $Nombre_contacto }}</li>
		<li><b>Telefono:</b> {{ $telefono }}</li>
		<li><b>Correo:</b> {{ $correo }}</li>
		<li><b>Departamento:</b>{{ $departamento }} </li>

		<li><b>Ciudad:</b> {{ $ciudad }}</li>
		<li><b>Mensaje:</b> {{ $mensaje }}</li>
		
	</ul>
</body>
</html>