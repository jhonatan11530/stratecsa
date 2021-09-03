var ext = document.getElementById("extencion");

$(function(){
	console.log("jquery cargó satisfactoriamente");	
	$("#main-contact-form input[name=name]").val("");
	$("#main-contact-form input[name=email]").val("");
	$("#main-contact-form input[name=subject]").val("");
	$("#main-contact-form textarea[name=message]").val("");
	$("#modalform #name").val("");
	$("#modalform #tel").val("");
});

/*//////////////////funcionesBotones/////////////////////*/

$("#nav1").mouseover(function(){
	$("#op1").css('color','rgba(15,160,196,1)');
	$("#op1").css('font-weight','bold');
});
$("#nav1").mouseout(function(){
	$("#op1").css('color','white');
	$("#op1").css('font-weight','normal');
});

$("#nav2").mouseover(function(){
	$("#op2").css('color','rgba(15,160,196,1)');
	$("#op2").css('font-weight','bold');
});
$("#nav2").mouseout(function(){
	$("#op2").css('color','white');
	$("#op2").css('font-weight','normal');
});

$("#nav3").mouseover(function(){
	$("#op3").css('color','rgba(15,160,196,1)');
	$("#op3").css('font-weight','bold');
});
$("#nav3").mouseout(function(){
	$("#op3").css('color','white');
	$("#op3").css('font-weight','normal');
});

$("#nav4").mouseover(function(){
	$("#op4").css('color','rgba(15,160,196,1)');
	$("#op4").css('font-weight','bold');
});
$("#nav4").mouseout(function(){
	$("#op4").css('color','white');
	$("#op4").css('font-weight','normal');
});

$("#nav5").mouseover(function(){
	$("#op5").css('color','rgba(15,160,196,1)');
	$("#op5").css('font-weight','bold');
});
$("#nav5").mouseout(function(){
	$("#op5").css('color','white');
	$("#op5").css('font-weight','normal');
});

/////////////////////OVER//////////////

$("#ser1").mouseover(function(){
	$("#icon1").css('background-size','25%');
});

$("#ser1").mouseout(function(){
	$("#icon1").css('background-size','30%');
});

$("#ser2").mouseover(function(){
	$("#icon2").css('background-size','25%');
});

$("#ser2").mouseout(function(){
	$("#icon2").css('background-size','30%');
});

$("#ser3").mouseover(function(){
	$("#icon3").css('background-size','25%');
});

$("#ser3").mouseout(function(){
	$("#icon3").css('background-size','30%');
});

$("#ser4").mouseover(function(){
	$("#icon4").css('background-size','25%');
});

$("#ser4").mouseout(function(){
	$("#icon4").css('background-size','30%');
});

$("#ser5").mouseover(function(){
	$("#icon5").css('background-size','25%');
});

$("#ser5").mouseout(function(){
	$("#icon5").css('background-size','30%');
});

$("#ser6").mouseover(function(){
	$("#icon6").css('background-size','25%');
});

$("#ser6").mouseout(function(){
	$("#icon6").css('background-size','30%');
});

$("#ser7").mouseover(function(){
	$("#icon7").css('background-size','25%');
});

$("#ser7").mouseout(function(){
	$("#icon7").css('background-size','30%');
});

$("#ser8").mouseover(function(){
	$("#icon8").css('background-size','25%');
});

$("#ser8").mouseout(function(){
	$("#icon8").css('background-size','30%');
});

//CLICK!!

$('#nav1').click(function(){
	alert("1");
});
$('#nav2').click(function(){
	$("#servicios").fadeIn();
});
$('#nav3').click(function(){
	alert("3");
});
$('#nav4').click(function(){
	alert("4");
});
$('#nav5').click(function(){
	alert("5");
});
/*////////////////////////////////////////////////*/
$("#regresar").click(function(){$("#conozca").fadeOut();});
$("#tp1").click(function(){	$("#conozca").fadeIn();});
$(".verplanes1").click(function(){

	$("#home-slider").css('display','none');
	$("#about-us").css('display','none');
	$("#contact").css('display','none');
	$("#ayuda").css('display','none');
	
	$("#info").css('display','none');
	$("#infoservices").css('padding-top','0px');
	$("#services").fadeIn();
	$("#services").css('display','block');

});
$(".verplanes2").click(function(){

	$("#home-slider").css('display','none');
	$("#about-us").css('display','none');
	$("#contact").css('display','none');
	$("#ayuda").css('display','none');

	$("#info").css('display','none');
	$("#infoservices").css('padding-top','0px');	
	$("#services").fadeIn();
	$("#services").css('display','block');
	$("#ser3").trigger("click");

});
$(".verplanes3").click(function(){

	$("#home-slider").css('display','none');
	$("#about-us").css('display','none');
	$("#contact").css('display','none');
	$("#ayuda").css('display','none');

	$("#info").css('display','none');
	$("#infoservices").css('padding-top','0px');
	$("#services").fadeIn();
	$("#services").css('display','block');
	$("#ser6").trigger("click");
});

$(".verplanes4").click(function(){

	$("#home-slider").css('display','none');
	$("#about-us").css('display','none');
	$("#contact").css('display','none');
	$("#ayuda").css('display','none');

	$("#info").css('display','none');
	$("#infoservices").css('padding-top','0px');
	$("#services").fadeIn();
	$("#services").css('display','block');
	$("#ser2").trigger("click");
});

$('#face').click(function(){
	window.location.href="https://www.facebook.com";
});
$('#twi').click(function(){
	window.location.href="https://twitter.com";
});
$('#goo').click(function(){
	window.location.href="https://plus.google.com/";
});

$('#puntos').click(function(){
	var domain1=$("#ingresar").val();
	dominio='www.'+domain1+ext.value;
	if($("#ingresar").val()==''){
		alert("ingrese valor");
	}else{
		for (var i=0; i<dominios.length; i++) {
			if(dominio==dominios[i]){
				console.log("Usado");
			}else{
				console.log("no usado");
			};	
		};
	}
});

$("#submitboton").click(function(){
	alert("mensaje enviado");
	console.log($("#valuno").val());
	console.log($("#valdos").val());
	console.log($("#valtres").val());
});

$("#visitar").click(function(){	$("#visitenos").fadeIn();});
$("#cerraruno").click(function(){$("#visitenos").fadeOut();});
$("#cerrardos").click(function(){$("#llamamos").fadeOut();});
$("#lellamamos").click(function(){$("#llamamos").fadeIn();});
$("#ad1").click(function(){	//$("#conozca").fadeOut();
	$("#compre").fadeIn();
});

$("input:radio[name=optradio]").change(function(event){

  var opt = $("input:radio[name=optradio]:checked").val();

  if (opt == 'fec') {
    $("#fec").css('display','block');
    $("#rng").css('display','none');
    $("#rnghor").css('display','none');
    $("#hor").css('display','block');
    $("#datepicker").attr('required','required');
    $("#reservation").removeAttr('required');      
  }
  if (opt == 'rng') {
    $("#rng").css('display','block');
    $("#fec").css('display','none'); 
    $("#rnghor").css('display','none'); 
    $("#hor").css('display','block'); 
    $("#datepicker").removeAttr('required');    
    $("#reservation").attr('required','required');
  }
});

$("#preg").click(function(event){clickbtn();});
$("#btnhome").click(function(event){clickbtn();});
$("#btnabout").click(function(event){clickbtn();});
$("#btncont").click(function(event){clickbtn();});
$("#btnservice").click(function(event){	clickbtn();});

function clickbtn(){
	
	var dsp = $("#services").css('display');
	console.log(dsp);
	if (dsp == 'block') {

		$("#home-slider").css('display','block');
		$("#services").css('display','none');
		$("#info").css('display','block');
		$("#about-us").css('display','block');
		$("#contact").css('display','block');
		$("#ayuda").css('display','block');
	}
}

$("#llamar").submit(function(e){
	e.preventDefault();
	var form = $('#llamar');
	var form_status = $('.msgRsp');
	var datos = form.serialize();
	
	$.post('llamar',datos,function(data){

		var d = JSON.parse(data);
		form_status.html('<div class="alert '+d.alert+'">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<h4><strong>'+ d.type+' </strong></h4>'+d.msg+
        '</div>').delay(3000).fadeOut();
		limpiaForm('#llamar');	
	});
});

function limpiaForm(miForm){
	$(':input', miForm).each(function() {
      	var type = this.type;
      	var tag = this.tagName.toLowerCase();
      	
      	if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'number' || type == 'email')
      	this.value = "";

      	else if (type == 'checkbox' || type == 'radio')
      	this.checked = false;

      	else if (tag == 'select')
      	this.selectedIndex = 0;
  	});
}