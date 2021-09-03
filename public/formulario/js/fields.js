$( document ).ready(function() {

	RESPONSIVEUI.responsiveTabs();
	
	$("#pMedicamentoS").click(function() {  
        if($("#pMedicamentoS").is(':checked')) { 
			$("#rMedicamento").removeAttr('disabled');             
        }  
    }); 
		
	$("#pMedicamentoN").click(function() {  
        if($("#pMedicamentoN").is(':checked')) {
			$("#rMedicamento").val('');
			$("#rMedicamento").attr("disabled", true);            
        } 
    }); 
	
	$("#pAlergiaS").click(function() {  
        if($("#pAlergiaS").is(':checked')) {  			
			$("#rAlergia").removeAttr('disabled');             
        }  
    }); 
		
	$("#pAlergiaN").click(function() {  
        if($("#pAlergiaN").is(':checked')) {
			$("#rAlergia").val('');
			$("#rAlergia").attr("disabled", true);            
        } 
    }); 
	
	$("#pCirugiaS").click(function() {  
        if($("#pCirugiaS").is(':checked')) {  			
			$("#rCirugia").removeAttr('disabled');             
        }  
    }); 
		
	$("#pCirugiaN").click(function() {  
        if($("#pCirugiaN").is(':checked')) {
			$("#rCirugia").val('');
			$("#rCirugia").attr("disabled", true); 
        } 
    }); 	
   	
});