$( document ).ready(function() {

	$( "#calcular1").click(function() {
		calcularIMC(1);
	});
	
	$( "#calcular2").click(function() {
		calcularIMC(2);
	});
});

function calcularIMC(ctrl)
{
	if(ctrl == 1){
		var peso = $("#PesoKilogramos").val();
		var estatura = $("#EstaturaCentimetros").val();
		
		$("#PesoLibras").val( peso * 2.20462262 );
		$("#EstaturaPies").val( estatura * 0.0328084);
		$("#EstaturaPulgadas").val( estatura * 0.393701);
		
		if(peso != 0 && estatura != 0){
			estatura *= 0.01;
			
			resultado = parseFloat(peso/(estatura*estatura));
			resultado = resultado.toFixed(2);
			
			$("#IndMasCorporal1").val( resultado );
			$("#IndMasCorporal2").val( resultado );
			$("#Resultado1").html(obtenerResultado(resultado));
			$("#Resultado2").html(obtenerResultado(resultado));
		
		}
		else
		{
			alert("Error tus datos no son coherentes");
		}
		
		
			
	}else if(ctrl == 2){
		var peso = $("#PesoLibras").val();
		var estatura = $("#EstaturaPies").val();
		
		$("#PesoKilogramos").val( peso * 0.453592 );
		$("#EstaturaCentimetros").val(estatura * 30.48);
		
		if(peso != 0 && estatura != 0){
			estatura *= 0.01;
			
			resultado = parseFloat( (peso * 0.453592) / ( (estatura * 30.48) * (estatura * 30.48) ) );
			resultado = resultado.toFixed(2);
			
			$("#IndMasCorporal1").val( resultado );
			$("#IndMasCorporal2").val( resultado );
			$("#Resultado1").html(obtenerResultado(resultado));
			$("#Resultado2").html(obtenerResultado(resultado));
		
		}
		else
		{
			alert("Error tus datos no son coherentes");
		}
		
	}
	
	
	
}


function obtenerResultado(resultado)
{
	textoTitulo = "";
	var ctrlIMC = $("#CtrlIMC").val();
	if(resultado <= 16.99)
	{
		if(ctrlIMC == 1){
			textoTitulo = "Peso insuficiente";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Insufficient weight";
		}
	}
	if(resultado >= 17.00 && resultado <= 18.49)
	{	
		if(ctrlIMC == 1){
			textoTitulo = "Bajo peso";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Under weight";
		}
	}
	if(resultado >= 18.5 && resultado <= 24.99)
	{	
		if(ctrlIMC == 1){
			textoTitulo = "Peso Normal";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Normal weight";
		}
	}
	if(resultado >= 25.00 && resultado <= 29.99)
	{	
		if(ctrlIMC == 1){
			textoTitulo = "Sobrepeso";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Overweight";
		}
	}
	if(resultado >= 30.00 && resultado <= 34.99)
	{	
		if(ctrlIMC == 1){
			textoTitulo = "Obesidad Leve";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Under weight";
		}
	}
	if(resultado >= 35.00 && resultado <= 39.99)
	{	
		if(ctrlIMC == 1){
			textoTitulo = "Obesidad Moderada";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Moderate obesity";
		}
	}
	if(resultado >= 40.00)
	{	
		if(ctrlIMC == 1){
			textoTitulo = "Obesidad Mórbida";
		}
		if(ctrlIMC == 2){
			textoTitulo = "Morbid obesity";
		}
	}	
	
	return textoTitulo;
}
