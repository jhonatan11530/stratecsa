<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authentication Routes
session_start();
// if (!empty(explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]) && explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]!="es-ES" && empty($_SESSION['language'])) {
//     App::setLocale('en');
// }else
if (empty($_SESSION['language'])) {
    $_SESSION['language']="es";
    App::setLocale('es');
}else{
    App::setLocale( $_SESSION['language']);
    
}

Auth::routes();

Route::get('/change-lang/{lang}',function($lang){
    $_SESSION['language']=$lang;
    App::setLocale($lang);
});
// INDEX LARAVEL
Route::get('/', function () {
    return view('welcome');
});

Route::get('fechas','MailController@fechas');

Route::post('saveDate','MailController@saveDate');

Route::get('cotizar/internet/dedicado', function () {
    return view('cotizacion.solicitud-enlace-datos');
});

Route::get('cotizar/enlace/datos', function () {
    return view('cotizacion.enlace-datos');
});

Route::get('cotizar/security/cloud', function () {
    return view('cotizacion.security-cloud');
});

Route::get('cotizar/colocation', function () {
    return view('cotizacion.colocation');
});

Route::get('cotizar/pbx', function () {
    return view('cotizacion.pbx');
});

Route::get('cotizar/servidor/dedicado', function () {
    return view('cotizacion.servidor-dedicado');
});

Route::get('cotizar/software', function () {
    return view('cotizacion.software');
});

Route::get('cotizar/cloud/server', function () {
    return view('cotizacion.cloud-server');
});

Route::get('cotizar/streaming', function () {
    return view('cotizacion.streaming');
});

Route::get('cotizar/security', function () {
    return view('cotizacion.security');
});
Route::get('cotizar/outsourcing-tic', function () {
    return view('cotizacion.outsourcing-tic');
});
Route::get('cotizar/cloud/backup', function () {
    return view('cotizacion.cloud-backup');
});

Route::get('cotizar/correo/corporativo', function () {
    return view('cotizacion.correo-corporativo');
});

Route::get('/producto/{id}','MailController@productos');

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/catalogo_fibra_optica', function () {
    return view('catalogo.catalogo_fibra_optica');
});

Route::get('/catalogo_fibra_optica',"MailController@listar");

Route::get('/enlace', function () {
    return view('enlace-datos3');
});

Route::get('/contacto', function () {
    return view('contacto.contacto');
});

Route::get('/contacto/{id}', function ($id) {
    return view('contacto',compact('id'));
});

Route::get('/servicios', function () {
    return view('services');

});

Route::get('/servicioss', function () {
    return view('servicio');
});

Route::get('/preguntas-frecuentes', function () {
    return view('preguntas');
});

Route::get('/internet-dedicado', function () {
    return view('servicios.opcion-servicio-2');
});


Route::get('/enlace-datos', function () {
   
    return view('servicios.enlace-datos');
});


Route::get('/software', function () {
    return view('servicios.software');
});

Route::get('/pbx', function () {
    return view('servicios.pbx');
});


Route::get('/security', function () {
    return view('security.security');
});

Route::get('/security-cloud', function () {
    return view('servicios.security-cloud');
});

Route::get('/colocation', function () {
    return view('servicios.colocation');
});


Route::get('/servidor-dedicado', function () {
    return view('servicios.servidor-dedicado');
});



Route::get('/cloud-backup', function () {
    return view('servicios.cloud-backup');
});



Route::get('/correo-corporativo', function () {
    return view('servicios.correo-corporativo');
});



Route::get('/outsourcing-tic', function () {
    return view('servicios.outsourcing-tic');
});

Route::get('/fibra-optica', function () {
    return view('servicios.fibra-optica');
});

Route::get('/cobertura', function () {
    return view('cobertura');
});

Route::get('/streaming', function () {
    return view('streaming');
});


Route::get('/cloud-server', function () {
    return view('servicios.cloud-server');
});

Route::get('/normatividad', function () {
    return view('normatividad.normatividad');
});
Route::get('/resolucion-5111', function () {
    return view('normatividad.resolucion-5111');
});
Route::get('/politicas', function () {
    return view('politicas');
});
Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('seguridad-en-la-web', function () {
    return view('normatividad.seguridad-en-la-web');
});

Route::get('ley-1341-de-2009', function () {
    return view('normatividad.ley341');
}); // La ruta es funcionando Normatividad


Route::get('politica-tratamiento-de-datos', function () {
    return view('normatividad.politica-tratamiento-de-datos');
}); // La ruta es funcionando Normatividad

Route::get('encuesta', function () {
    return view('herramientas.encuesta');
});// La ruta es funcionando


Route::get('contacto-servicio', function () {
    return view('contacto.contacto-servicio');
}); // La ruta es funcionando
Route::get('herramientas', function () {
    return view('herramientas.herramientas');
});// La ruta esta funcionando Nota:mirar algunas opciones

Route::post('email/contacto','MailController@contacto');
Route::post('email/ajax','MailController@contactoAjax');// la ruta no esta funcionando
Route::get('email/cotizar/dedicado','MailController@cotizacion_dedicado');//La Pagina se encuentra no esta activa
Route::get('email/cotizar/datos','MailController@cotizacion_datos');//La Pagina se encuentra no esta activa
Route::get('email/cotizar/streaming','MailController@cotizacion_streaming');//La Pagina se encuentra activa

Route::get('email/security/cloud','MailController@cotizacion_security_cloud');//La Pagina se encuentra activa
Route::get('email/cotizar/colocation','MailController@cotizacion_colocation');//La Pagina se encuentra activa
Route::get('email/cotizar/servidor/dedicado','MailController@cotizacion_servidor_dedicado');////La Pagina se encuentra activa
Route::get('email/cotizar/cloud/server','MailController@cotizacion_cloud_server');//La Pagina se encuentra activa

Route::get('email/cotizar/cloud/backup','MailController@cotizacion_cloud_backup');//La Pagina se encuentra activa
Route::get('email/correo/corporativo','MailController@cotizacion_correo_corporativo');//La Pagina no se encuentra activa
Route::get('email/outsourcing-tic','MailController@cotizacion_outsourcing_tic');//La Pagina se encuentra activa
Route::get('email/cotizar/pbx','MailController@cotizacion_pbx');//La Pagina se encuentra activa
Route::get('email/cotizar/software','MailController@cotizacion_software');//La Pagina se encuentra activa
Route::get('enviar/encuesta','MailController@enviar_encuesta');//La Pagina se encuentra activa

Route::get('punto_venta_producto','MailController@listar');



Route::post('suscribirse','MailController@suscribirse');
Route::post('pqrs','MailController@pqrs');
Route::post('oportunidadcomercial', 'MailController@oportunidadcomercial');