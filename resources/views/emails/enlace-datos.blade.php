<!DOCTYPE html>
<html>
<head>
	<title>Cotización enlace de datos</title>
</head>
<body>
	<h1>Hola, tenemos un mensaje de cotización del sitio de Stratecsa para ti</h1>
	<h5>La siguiente persona se encuentra interesada en el servicio <b>enlace de datos</b> y ha dejado sus datos en el asistente de cotización de stratecsa, a continuación se muestran los detalles</h5>
	<ul>
		<li><b>Nombre de la empresa:</b> {{ $Nombre_empresa }}</li>
		<li><b>Nombre de contacto:</b> {{ $Nombre_contacto }}</li>
		<li><b>Telefono:</b> {{ $telefono }}</li>
		<li><b>Correo:</b> {{ $correo }}</li>
		<li><b>Departamento:</b>{{ $departamento }} </li>
		<li><b>Ciudad:</b> {{ $ciudad }}</li>
    </ul>

    <p><b>Información tecnica del la cotización</b></p>
    <ul>
        @foreach($direccion as $dir)
		<li><b>Dirección:</b> {{ $dir }}</li>
        @endforeach

        @foreach($capacidad as $cap)
		<li><b>Capacidad requerida:</b>{{ $cap }} </li>
        @endforeach

        @if($fibra > 0)
        @foreach($fibra as $fi)
		<li><b>Tipo de servicio:</b> 
			@if($fi==1)
				fibra
			@endif
        @endforeach
        @endif

        @if($cobre>0)
        @foreach($cobre as $co)
			@if($co==1)
				Radio enlace
			@endif
        @endforeach
        @endif
		</li>
	</ul>
</body>
</html>