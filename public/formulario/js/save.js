var formulario="#formDcorpus";
var enviado=0;
var datos="";
var requeridos="";
var imagenes="";
var cantidad=0;
var lenguage="";

var subiruno = 0;
var subirdos = 0;
var subirtres = 0;
var subircuatro = 0;
var subircinco = 0;

var tamuno = 1;
var tamdos = 1;
var tamtres = 1;
var tamcuatro = 1;
var tamcinco = 1;



$( document ).ready(function() {

	lenguage = $('#lenguage').val();
	txtBtn = $('#buscador').val();
	
	document.getElementById('imagenuno').addEventListener('change', function(evt) {
        archivo(evt, "imagenuno");
    }, false);
    document.getElementById('imagendos').addEventListener('change', function(evt) {
        archivo(evt, "imagendos");
    }, false);
    document.getElementById('imagentres').addEventListener('change', function(evt) {
        archivo(evt, "imagentres");
    }, false);
    document.getElementById('imagencuatro').addEventListener('change', function(evt) {
        archivo(evt, "imagencuatro");
    }, false);
    document.getElementById('imagencinco').addEventListener('change', function(evt) {
        archivo(evt, "imagencinco");
    }, false);


   

	$( "#enviar").click(function() {	
	    nextForm();
		if(enviado == 0) {
         if(tamuno == 1 && tamdos == 1 && tamtres == 1){	
  			if(subiruno == 1 && subirdos == 1 && subirtres == 1 && subircuatro == 1 && subircinco == 1) {
  				comenzar();	
  								
  			}	
  			else if(subiruno == 1 && subirdos == 1 && subirtres == 1 && subircuatro == 0 && subircinco == 0)
  			{ 
  		    comenzar();	
  			}
        else if(subiruno == 0 && subirdos == 0 && subirtres == 0 && subircuatro == 1 && subircinco == 1)
  			{ 
  		    comenzar();	
  			}
        else
        {
        console.log("mensajenull1");
          mensaje(7);
        }
      }
      else
      {
      console.log("mensajenull2");
        mensaje(8);
      }
		}
		if(enviado == 1) {
		 comenzar();	
		console.log("mensajenull3");
			mensaje(4); 
		}	
	});
});

function archivo(evt,elemento) {
  var files = evt.target.files; // FileList object
  
  var file = $("#"+elemento)[0].files[0];
  //obtenemos el nombre del archivo
  var fileName = file.name;
  //obtenemos la extensión del archivo
  fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
  //obtenemos el tamaño del archivo
  var fileSize = file.size;
  //obtenemos el tipo de archivo image/png ejemplo
  var fileType = file.type;
  
  
  switch (elemento) {
		case "imagenuno":
			
          subiruno = 1;
          tamuno = 1;
          mensaje(6);        
                      
  			break;
    case "imagendos":
			
          subirdos = 1;
          tamdos = 1;
          mensaje(6);        
                         
  			break;
    case "imagentres":
			  
          subirtres = 1;
          tamtres = 1;
          mensaje(6);        
                          
  			break;
    case "imagencuatro":
			  
          subircuatro = 1;
          tamcuatro = 1;
          mensaje(6);        
                        
  			break;
    case "imagencinco":
			  
        
          subircinco = 1;
          tamcinco = 1;
          mensaje(6);        
                          
  			break;	
	}
  
  
  // Obtenemos la imagen del campo "file".
  for (var i = 0, f; f = files[i]; i++) {
    //Solo admitimos imágenes.
    if (!f.type.match('image.*')) {
        continue;
    }

    var reader = new FileReader();

    reader.onload = (function(theFile) {
        return function(e) {
          	// Insertamos la imagen
          	document.getElementById(elemento).style.backgroundImage="url("+e.target.result+")";
         	
        	cantidad = 1;
        };
    })(f);

    reader.readAsDataURL(f);
  }
}


function comenzar()  {
  mensaje(9);
	datos = "";
	requeridos = "";			
	traerDatos();
	
	uploadFile1();
	uploadFile2();
	uploadFile3();
	uploadFile4();
	uploadFile5();
	guardarDatos();
}

function preguntar()  {
	$.ajax({
		type: "POST",
		url: "php/get.php",
		data: "clave=no-image&idioma="+lenguage,
		dataType: "html",
		success: function(data){
			if (confirm(data)) {				
				comenzar();
			}
			else {
				mensaje(3); 
			}
		}
	});
}

function traerTexto(clave,div)  {
	$.ajax({
		type: "POST",
		url: "php/get.php",
		data: "clave="+clave+"&idioma="+lenguage,
		dataType: "html",
		success: function(data){
			$(div).html(data);
		}
	});
}



function mensaje(msj) {
	switch (msj) {
		case 1:
			$('#Estado').css( "color", "green" );
			traerTexto('gracias','#Estado');	
			break;
		case 2: 
			$('#Estado').css( "color", "red" );
			traerTexto('faltan','#Estado');						
			break;
		case 3: 
			$('#Estado').css( "color", "blue" );
			traerTexto('imagenes','#Estado');	
			break;
		case 4: 
			$('#Estado').css( "color", "orange" );
			traerTexto('ya','#Estado');	
			break;
    case 5: 
			$('#Estado').css( "color", "orange" );
			traerTexto('tamano','#Estado');	
			break;
    case 6: 
			$('#Estado').css( "color", "white" );
			traerTexto('borrar','#Estado');	
			break;
    /*case 7: 
			$('#Estado').css( "color", "orange" );
			traerTexto('subirimg','#Estado');	
			break;*/
    case 8: 
			$('#Estado').css( "color", "orange" );
			traerTexto('tamanofoto','#Estado');	
			break;
    case 9: 
			$('#Estado').css( "color", "green" );
			traerTexto('enviar','#Estado');	
			break;
	}
}


/*function subirimg(){
        var formData = new FormData($(formulario)[0]);
        $.ajax({
            url: 'php/subir.php',  
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
            
            },
            success: function(data){
            
               enviarCorreo(data);
            },
            error: function(data){
               
            }
        });
}*/
function guardarDatosRapido() {
		datos = datos.substring(0, datos.length-1);
		data={
		    Nombre: $('#formDcorpus #Nombre').val(),
            Email: $('#formDcorpus #Email').val(),
            Telefono: $('#formDcorpus #Telefono').val(),
		}
		console.log(datos);
		console.log(data);
		
		$.ajax({
			type: "POST",
			url: "php/saveRapido.php",
			data: data,
			dataType: "html",
			success: function(dato){
			    console.log(dato);
				traerTexto('gracias','#Estado');	
				//mensaje(1);
				
				
			
				//subirimg();						
			}
		});

}
function guardarDatos() {
	if(requeridos == "")
	{
	    
		datos = datos.substring(0, datos.length-1);
		console.log(datos);
		$.ajax({
			type: "POST",
			url: "php/save.php",
			data: datos,
			dataType: "html",
			success: function(data){								
				enviado = 1;
				mensaje(1);
				
				
			
				//subirimg();						
			}
		});
	}
	else
	{		
		enviado = 0;
		mensaje(2);
	}	
}
function traerDatosRapido(){
    var elemento;
	$(formulario).find('input[type=text]').each(function() {
			
			
	});	
	elemento = $('#formDcorpus #Nombre');
    elemento = $('#formDcorpus #Email');
    elemento = $('#formDcorpus #Telefono');
	getValor(elemento);		
	
   	console.log(elemento);
}
function traerDatos(){
	$(formulario).find('textarea').each(function() {
		var elemento = this;
		getValor(elemento);	
	});

	$(formulario).find('input[type=radio]:checked').each(function() {
		var elemento = this;
		getValor(elemento);			
	});
	
	$(formulario).find('input[type=text]').each(function() {
		var elemento = this;	
		getValor(elemento);	
	});	
	
	$(formulario).find('select').each(function() {
		var elemento = this;				
		getValor(elemento);					
	});
	$(formulario).find('input[type=file]').each(function() {
		var elemento = this;	
		getValor(elemento);				
	});
}

function getValor(elemento)
{
	if(!verificarCancelar(elemento)) {
		if(elemento != "") {
			if(verificarRequerido(elemento)) {
				requeridos += elemento.name+"\n";
			}
			else {
				datos += elemento.name + "=" + elemento.value + "&";
			}
		}
	}
}

function verificarRequerido(elemento) {	
	if(elemento.getAttribute( "required" ) == "" && elemento.value == "") {
		return 1;
	}
}

function verificarCancelar(elemento) {	
	if(elemento.getAttribute( "cancelar" ) == "") {
		return 1;
	}
}