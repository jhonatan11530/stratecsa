var j = jQuery.noConflict();

function producto(val){

	var parent = j(val).parent();
	var titulo = j(val).parents('.panel.panel-default').find('.panel-heading').children('h1').text() ;
	var lista = '<ul>';

	j(parent).find('h5').each(function(){
		lista+= '<li>'+j(this).text()+'</li>';
	});

	lista+='</ul>'
	console.log(lista);

	j.redirect("/solicitud-producto",{ titulo: titulo, lista: lista}); 
}	

function send(){
	location.replace('/contacto');
}

function limpiaForm(miForm) {

    j(':input', miForm).each(function() {
	    var type = this.type;
	    var tag = this.tagName.toLowerCase();

	    if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'number' || type == 'email'){
	        this.value = ""; j(this).removeAttr('required'); 
	    }    
	    else if (type == 'checkbox' || type == 'radio'){
	        this.checked = false; j(this).removeAttr('required');
	    }
	    else if (tag == 'select'){
	        this.selectedIndex = 0; j(this).removeAttr('required'); 
	    }
	});
}

j("#Formscb").submit(function(e){
	e.preventDefault();
	var form_status = j('<div class="form_status"></div>');
	var datos = j("#Formscb").serialize();
    //console.log(datos);
	j.post('scripts/suscripcion.php',datos,function(data){
	    //console.log(data);
		form_status.html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong>Gracias por contactarnos, </strong>  pronto nos comunicaremos con usted, Feliz Día!'+
        '</div>').delay(3000).fadeOut();
		limpiaForm('#Formscb');			
		j("#Formscb").prepend(form_status);
	});
});