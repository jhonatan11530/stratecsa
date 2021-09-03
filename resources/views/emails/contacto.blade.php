<!DOCTYPE html>
<html>
<head>
	<title>Mensaje de contacto</title>
</head>
<body>

	<h1>Hola, tenemos un mensaje de contacto del sitio de Stratecsa para ti</h1>

	<h5>La siguiente persona ha dejado sus datos en la pagina de contacto de stratecsa, a continuación se muestran los detalles</h5>
	<ul>
		<li><b>Nombre:</b> {{ $name }}</li>
		<li><b>Telefono:</b> {{ $telefono }}</li>
		<li><b>Email:</b> {{ $email }}</li>
		<li><b>Departamento:</b> {{ $departamento }}</li>
		<li><b>Mensaje:</b>{{ $mensaje }} </li>
		@if(!empty($id))
			<li><b>Codigo canjeado - persona:</b>{{ $id }} </li>
		@endif
	</ul>
</body>
</html>