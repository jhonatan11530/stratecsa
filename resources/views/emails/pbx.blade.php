<!DOCTYPE html>
<html>
<head>
	<title>Cotización de comunicaciones unificadas</title>
</head>
<body>
	<h1>Hola, tenemos un mensaje de cotización del sitio de Stratecsa para ti</h1>
	<h5>La siguiente persona se encuentra interesada en el servicio <b>comunicaciones unificadas</b> y ha dejado sus datos en el asistente de cotización de stratecsa, a continuación se muestran los detalles</h5>
	<ul>
		<li><b>Nombre de la empresa:</b> {{ $Nombre_empresa }}</li>
		<li><b>Nombre de contacto:</b> {{ $Nombre_contacto }}</li>
		<li><b>Telefono:</b> {{ $telefono }}</li>
		<li><b>Correo:</b> {{ $correo }}</li>
		<li><b>Departamento:</b>{{ $departamento }} </li>
		<li><b>Ciudad:</b> {{ $ciudad }}</li>
		<li><b>NUmero de troncales:</b> {{ $numero_troncales }}</li>
		<li><b>Municipio:</b> {{ $municipio }}</li>
		<li><b>Servicios requeridos:</b> 
			@if($telefonia_movil==1)
				Telefonia movil
			@endif
			@if($telefonia_nacional==1)
				Telefonia fija nacional
			@endif
			@if($telefonia_local==1)
				Telefonia fija local
			@endif
		</li>

		<li><b>Mensaje:</b> {{ $mensaje }}</li>
		<li><b>Tipo de necesidad:</b> 
			@if($infra_propia==1)
				Infraestructura propia
			@endif
			@if($servicio_nube==1)
				Servicio en la nube
			@endif
			@if($infra_alquilada==1)
				Alquiler de infraestructura
			@endif
		</li>
		
	</ul>
</body>
</html>