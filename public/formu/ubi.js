function comenzar() {
	var miboton=document.getElemetById("dame_ubi");
	miboton.addEventListener ("click", obtener, false);
}


function obtener() {
  navigator.geolocation.getCurrentPosition(mostrar_posicion);

}

function mostrar_posicion(posicion){
var ubicacion=document.getElementsById("ubicacion");
var Latitud="Latitud:"+ posicion.coords.latitude;
ubicacion.innerHTML=Latitud;

}


window.addEvenListener("load", comenzar, false);