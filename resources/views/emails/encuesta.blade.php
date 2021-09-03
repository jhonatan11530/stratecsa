<!DOCTYPE html>
<html>
<head>
	<title>Encuesta de satisfacción</title>
</head>
<body>
	<h1>Hola, tenemos un mensaje del sitio de Stratecsa para ti</h1>
	<h5>La siguiente persona ha completado la encuesta de satisfacción, a continuación se muestran los detalles</h5>
	<ul>
		<li><b>Nombre de la persona:</b> {{ $nombre }}</li>
		<li><b>Correo:</b> {{ $correo }}</li>
		<li><b>Cargo del encuestado:</b> {{ $cargo }}</li>
		<li><b>Correo:</b> {{ $correo }}</li>
		<li><b>Telefono:</b> {{ $telefono }}</li>
		<li><b>Identificación:</b>{{ $identidad }} </li>

		<li><b>Razon social del cliente:</b> {{ $razon_social }}</li>
		<li><b>Nit:</b> {{ $nit }}</li>
	</ul>
		<br>
		<b>CALIFICACIÓN DEL SERVICIO</b>
		<BR>
		<p>Con el fin de determinar el nivel de satisfacción del cliente, se ha conocido su opinión sobre los siguientes aspectos.</p>
		<br>
	<ul>
		<li><b>1- ¿Cómo califica las soluciones brindadas por Soporte Técnico? R/</b> 
			@if($califica_soluciones==1)
				Buenas
			@endif
			@if($califica_soluciones==2)
				Regulares
			@endif
			@if($califica_soluciones==3)
				Malas
			@endif
		</li>
		<li><b>2-  ¿Cómo califica los tiempos de respuesta de soporte técnico? R/ </b> 
			@if($califica_soporte==1)
				Buena
			@endif
			@if($califica_soporte==2)
				Regular
			@endif
			@if($califica_soporte==3)
				Mal
			@endif
		</li>
		<li><b>3- ¿Cómo califica la asesoría recibida por nuestra dependencia comercial? R/ </b> 
			@if($califica_comercial==1)
				Buena
			@endif
			@if($califica_comercial==2)
				Regular
			@endif
			@if($califica_comercial==3)
				Mal
			@endif
		</li>
		<li><b>4- ¿Cómo califica la calidad del servicio que le estamos prestando? R/ </b> 
			@if($califica_calidad_servicio==1)
				Buena
			@endif
			@if($califica_calidad_servicio==2)
				Regular
			@endif
			@if($califica_calidad_servicio==3)
				Mal
			@endif
		</li>
		<li><b>5- ¿Considera que Stratecsa merece su fidelidad? R/ </b> 
			@if($califica_fidelidad==1)
				SI
			@endif
			@if($califica_fidelidad==2)
				NO
			@endif
		
		</li>
	</ul>

		<br>
		<b>ATENCIÓN COMERCIAL.</b>
		<BR>
		<p>Con el fin de determinar el de satisfacción del cliente se tiene considerado una escala del 1 al 5, donde 5 es totalmente satisfecho y 1 es nada satisfecho.</p>
		<br>

	<ul>

		<li><b>6- Las propuestas/Cotizaciones que le envía el comercial son claras, responden a su solicitud? R/ </b> 
			@if($pregunta6a==1)
				1
			@endif
			@if($pregunta6b==2)
				2
			@endif
			@if($pregunta6c==3)
				3
			@endif
			@if($pregunta6d==4)
				4
			@endif
			@if($pregunta6e==5)
				5
			@endif
		</li>
		<li><b>7- El comercial es cumplido en la entrega de propuestas / Cotizaciones? R/ </b> 
			@if($pregunta7a==1)
				1
			@endif
			@if($pregunta7b==2)
				2
			@endif
			@if($pregunta7c==3)
				3
			@endif
			@if($pregunta7d==4)
				4
			@endif
			@if($pregunta7e==5)
				5
			@endif
		</li>

		<li><b>8- Cómo califica el tiempo de respuesta a las solicitudes que le realiza al comercial? R/ </b> 
			@if($pregunta8a==1)
				1
			@endif
			@if($pregunta8b==2)
				2
			@endif
			@if($pregunta8c==3)
				3
			@endif
			@if($pregunta8d==4)
				4
			@endif
			@if($pregunta8e==5)
				5
			@endif
		</li>
	</ul>

		<br>
		<b>IMPLEMENTACIÓN DE SERVICIOS / PUESTA EN MARCHA</b>
		<BR>
		<p>Con el fin de determinar el de satisfacción del cliente se tiene considerado una escala del 1 al 5, donde 5 es totalmente satisfecho y 1 es nada satisfecho.</p>
		<br>
	<ul>
		<li><b>9- La documentación presentada es clara (acta de materiales, pruebas de entrega lógicas). R/ </b> 
			@if($pregunta9a==1)
				1
			@endif
			@if($pregunta9b==2)
				2
			@endif
			@if($pregunta9c==3)
				3
			@endif
			@if($pregunta9d==4)
				4
			@endif
			@if($pregunta9e==5)
				5
			@endif
		</li>
		<li><b>10-Cómo fue la atención por parte de nuestro personal operativo durante la puesta en marcha? R/ </b> 
			@if($pregunta101==1)
				1
			@endif
			@if($pregunta102==2)
				2
			@endif
			@if($pregunta103==3)
				3
			@endif
			@if($pregunta104==4)
				4
			@endif
			@if($pregunta105==5)
				5
			@endif
		</li>
		<li><b>10-Cómo fue la atención por parte de nuestro personal operativo durante la puesta en marcha? R/ </b> 
			@if($pregunta111==1)
				1
			@endif
			@if($pregunta112==2)
				2
			@endif
			@if($pregunta113==3)
				3
			@endif
			@if($pregunta114==4)
				4
			@endif
			@if($pregunta115==5)
				5
			@endif
		</li>
		
	</ul>
	<br>
		<b>SATISFACCIÓN GENERAL.</b>
		<BR>
		<p>Calificaión general que percibe el cliente con respecto a los servicios brindados por Stratecsa.</p>
		<br>
	<ul>
		<li><b>12- ¿Cómo calificaría su experiencia global respecto a los servicios ha recibido por parte de Stratecsa? R/ </b> 
			@if($experiencia_global==5)
				Muy buena
			@endif
			@if($experiencia_global==4)
				Buena
			@endif
			@if($experiencia_global==3)
				Regular
			@endif
			@if($experiencia_global==2)
				Mala
			@endif
			@if($experiencia_global==1)
				Muy mala
			@endif
			@if($experiencia_global==0)
				No responde
			@endif
		</li>
		<li><b>12- 13- ¿Recomendaria a sus familiares y amigos Stratecsa? R/</b> 		
			@if($recomendacion==1)
				SI
			@endif
			@if($recomendacion==0)
				NO
			@endif
	
		</li>
	</ul>
</body>
</html>