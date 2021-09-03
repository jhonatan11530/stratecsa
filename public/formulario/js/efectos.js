function ejecutarEfectos () {

	$("#Hijos").focusout(function () {
		
   		var valor= $("#Hijos").val();
   			
		if (!valor || valor==0) {
			$("#label_cesa1").slideUp();
			$("#label_cesa2").slideUp();
		}
		else
		{
			
			$("#label_cesa1").slideDown();
			$("#label_cesa2").slideDown();
		};

	    
  	});

	$("#label_med1").hide();
	$("#label_med2").hide();
	$("#label_aler1").hide();
	$("#label_aler2").hide();
	$("#label_ciru1").hide();
	$("#label_ciru2").hide();
	$("#label_cesa1").hide();
	$("#label_cesa2").hide();

	efectosform(
		"#pMedicamentoS",
		"#pMedicamentoN",
		"#label_med1",
		"#label_med2",
		"",
		""
	);
	efectosform(
		"#pAlergiaS",
		"#pAlergiaN",
		"#label_aler1",
		"#label_aler2",
		"",
		""
	);
	efectosform(
		"#pCirugiaS",
		"#pCirugiaN",
		"#label_ciru1",
		"#label_ciru2",
		"",
		""
	);
	
      $('#email_user input').focusout(function(){
        if($("#email_user input").val().indexOf('@', 0) == -1 || $("#email_user input").val().indexOf('.', 0) == -1) {
            document.getElementById("texto_email").innerHTML = "Email Invalido: "+$("#email_user input").val()+"    ejemplo: nombre@dominio.com";
            $("#email_user input").val("");
            return false;  
        }
        else
        {
             document.getElementById("texto_email").innerHTML = "";
        }
    });
    

}

function efectosform(elem_si,elem_no,fl1,fi1,fl2,fi2){
	var mostar;
	var ocultar;	
	$(elem_si).click(function() {
		clearInterval(ocultar);
		$(fl1).slideDown();
		$(fi1).slideDown();
		mostar = setInterval(function() {
    		$(fl2).slideDown();
			$(fi2).slideDown();
		}, 200);
		
	});

	$(elem_no).click(function(){
		clearInterval(mostar);
		ocultar = setInterval(function() {
			$(fl1).slideUp();
			$(fi1).slideUp();
		}, 200);
		$(fl2).slideUp();
		$(fi2).slideUp();
	});
  

    
}




$(document).ready(ejecutarEfectos);