<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Contactos_proveedor;
use App\Oportunidad_comercial;
use App\Oportunidad_comercial_servicios;
use App\Proveedores;



class MailController extends Controller
{

    public function contacto(Request $request){
        $r=$request->input('g-recaptcha-response');
            
        if($r){
            $secret="6Lf0iZkUAAAAAGdVc1j-wCl78foI162OqIhfdw_y";
            $ip=$_SERVER['REMOTE_ADDR'];
            $url="https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$r&remoteip=$ip";
            $var=file_get_contents($url);
            $array=json_decode($var);
            if($array->success){
                $name=$request->input('name');
                $telefono=$request->input('telefono');
                $email=$request->input('email');
                $departamento=$request->input('departamento');
                $mensaje=$request->input('mensaje');
                $id="";
                if (!empty($request->input('id_contacto'))) {
                    $id=decrypt(base64_decode($request->input('id_contacto')));
                }
                Mail::send('emails.contacto',['name'=>$name,'telefono'=>$telefono,'email'=>$email,'departamento'=>$departamento,'mensaje'=>$mensaje,'id'=>$id], function($m) use ($request) {
                    $email=$request->input('email');
                    $m->subject("Mensaje de contacto");
                    $m->from($email, "Stratecsa");
                    $m->to('info@stratecsa.com');
                });

                if($name){ 
                    $mensaje = "Mensaje enviado correctamente";
                    echo "<script>";
                    echo "alert('$mensaje');";  
                    echo "window.location = '/contacto';";
                    echo "</script>";               
                }else{
                    echo "Error al enviar el mensaje";
                    echo "window.location = '/contacto';";
                }
            }else{
                $mensaje = "Robot";
                echo "<script>";
                echo "alert('$mensaje');";
                echo "window.location = '/contacto';";
                echo "</script>";
            }
        }else{
            $mensaje = "Rellenar todos los campos";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "window.location = '/contacto';";
            echo "</script>";
        }
    }

    public function cotizacion_dedicado(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $direccion=$request->input('direccion');
        $direccion_ip=$request->input('direccion_ip');
        $capacidad=$request->input('capacidad');
        $fibra=$request->input('fibra');
        $cobre=$request->input('cobre');

        Mail::send('emails.internet-dedicado',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'direccion'=>$direccion,'direccion_ip'=>$direccion_ip,'capacidad'=>$capacidad,'cobre'=>$cobre,'fibra'=>$fibra], function($m) {
            $m->subject("Cotización internet dedicado");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/internet/dedicado';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/internet/dedicado';";
        }
    }

    public function enviar_encuesta(Request $request){

        $correo=$request->input('correo');
        $razon_social=$request->input('razon_social');
        $nombre=$request->input('nombre');
        $nit=$request->input('nit');
        $identidad=$request->input('identidad');
        $telefono=$request->input('telefono');
        $cargo=$request->input('cargo');
        $califica_soluciones=$request->input('califica_soluciones');
        $califica_soporte=$request->input('califica_soporte');             
        $califica_comercial=$request->input('califica_comercial');           
        $califica_calidad_servicio=$request->input('califica_calidad_servicio');
        $califica_fidelidad=$request->input('califica_fidelidad'); 
        $pregunta6a=$request->input('pregunta6a');           
        $pregunta6b=$request->input('pregunta6b');
        $pregunta6c=$request->input('pregunta6c');
        $pregunta6d=$request->input('pregunta6d');              
        $pregunta6e=$request->input('pregunta6e');
        $pregunta7a=$request->input('pregunta7a');
        $pregunta7b=$request->input('pregunta7b');
        $pregunta7c=$request->input('pregunta7c');
        $pregunta7d=$request->input('pregunta7d');              
        $pregunta7e=$request->input('pregunta7e');
        $pregunta8a=$request->input('pregunta8a');
        $pregunta8b=$request->input('pregunta8b');
        $pregunta8c=$request->input('pregunta8c');
        $pregunta8d=$request->input('pregunta8d');              
        $pregunta8e=$request->input('pregunta8e');
        $pregunta9a=$request->input('pregunta9a');
        $pregunta9b=$request->input('pregunta9b');
        $pregunta9c=$request->input('pregunta9c');
        $pregunta9d=$request->input('pregunta9d');              
        $pregunta9e=$request->input('pregunta9e');
        $pregunta101=$request->input('pregunta101');
        $pregunta102=$request->input('pregunta102');
        $pregunta103=$request->input('pregunta103');
        $pregunta104=$request->input('pregunta104');              
        $pregunta105=$request->input('pregunta105');
        $pregunta111=$request->input('pregunta111');
        $pregunta112=$request->input('pregunta112');
        $pregunta113=$request->input('pregunta113');
        $pregunta114=$request->input('pregunta114');              
        $pregunta115=$request->input('pregunta115');
        $experiencia_global=$request->input('experiencia_global');
        $recomendacion=$request->input('recomendacion');
        $comentarios=$request->input('comentarios');

        Mail::send('emails.encuesta',['correo'=>$correo,'razon_social'=>$razon_social,'nombre'=>$nombre,'identidad'=>$identidad,'nit'=>$nit,'telefono'=>$telefono,'cargo'=>$cargo,'califica_soluciones'=>$califica_soluciones,'califica_soporte'=>$califica_soporte,'califica_comercial'=>$califica_comercial, 'califica_calidad_servicio'=>$califica_calidad_servicio, 'califica_fidelidad'=>$califica_fidelidad,'pregunta6a'=>$pregunta6a, 'pregunta6b'=>$pregunta6b, 'pregunta6c'=>$pregunta6c, 'pregunta6d'=>$pregunta6d, 'pregunta6e'=>$pregunta6e, 'pregunta7a'=>$pregunta7a, 'pregunta7b'=>$pregunta7b, 'pregunta7c'=>$pregunta7c, 'pregunta7d'=>$pregunta7d, 'pregunta7e'=>$pregunta7e, 'pregunta8a'=>$pregunta8a, 'pregunta8b'=>$pregunta8b, 'pregunta8c'=>$pregunta8c, 'pregunta8d'=>$pregunta8d, 'pregunta8e'=>$pregunta8e, 'pregunta9a'=>$pregunta9a, 'pregunta9b'=>$pregunta9b, 'pregunta9c'=>$pregunta9c, 'pregunta9d'=>$pregunta9d, 'pregunta9e'=>$pregunta9e, 'pregunta101'=>$pregunta101, 'pregunta102'=>$pregunta102, 'pregunta103'=>$pregunta103, 'pregunta104'=>$pregunta104, 'pregunta9d'=>$pregunta9e, 'pregunta9d'=>$pregunta9d, 'pregunta9d'=>$pregunta9d, 'pregunta9d'=>$pregunta9d, 'pregunta9d'=>$pregunta9d, 'pregunta105'=>$pregunta105, 'pregunta111'=>$pregunta111, 'pregunta112'=>$pregunta112, 'pregunta113'=>$pregunta113, 'pregunta114'=>$pregunta114, 'pregunta115'=>$pregunta115, 'experiencia_global'=>$experiencia_global, 'recomendacion'=>$recomendacion, 'comentarios'=>$comentarios], function($m) {
            $m->subject("Encuesta de satisfacción");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($correo){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/encuesta';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/encuesta';";
        }
    }

    public function cotizacion_datos(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $direccion=$request->input('direccion');
        $capacidad=$request->input('capacidad');
        $fibra=$request->input('fibra');
        $cobre=$request->input('cobre');

        Mail::send('emails.enlace-datos',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'direccion'=>$direccion,'capacidad'=>$capacidad,'cobre'=>$cobre,'fibra'=>$fibra], function($m) {
            $m->subject("Cotización enlace de datos");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');        
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/enlace/datos';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/enlace/datos';";
        }
    }

    public function cotizacion_pbx(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $numero_troncales=$request->input('numero_troncales');
        $municipio=$request->input('municipio');
        $telefonia_movil=$request->input('telefonia_movil');
        $telefonia_nacional=$request->input('telefonia_nacional');
        $telefonia_local=$request->input('telefonia_local');
        $mensaje=$request->input('mensaje');
        $infra_propia=$request->input('infra_propia');
        $servicio_nube=$request->input('servicio_nube');
        $infra_alquilada=$request->input('infra_alquilada');
        
        Mail::send('emails.pbx',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad, 'numero_troncales'=>$numero_troncales, 'municipio'=>$municipio, 'telefonia_movil'=>$telefonia_movil, 'telefonia_nacional'=>$telefonia_nacional,'telefonia_local'=>$telefonia_local,'mensaje'=>$mensaje ,'infra_propia'=>$infra_propia,'servicio_nube'=>$servicio_nube,'infra_alquilada'=>$infra_alquilada], function($m) {
            $m->subject("Cotización comunicaciones unificadas");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');      
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/pbx';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/pbx';";
        }
    }

    public function cotizacion_software(Request $request){
        
        $r=$request->input('g-recaptcha-response');
        if($r){
            $secret="6Lf0iZkUAAAAAGdVc1j-wCl78foI162OqIhfdw_y";
            $ip=$_SERVER['REMOTE_ADDR'];
            $url="https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$r&remoteip=$ip";
            $var=file_get_contents($url);
            $array=json_decode($var);
            if($array->success){
                $Nombre_empresa=$request->input('Nombre_empresa');
                $Nombre_contacto=$request->input('Nombre_contacto');
                $telefono=$request->input('telefono');
                $correo=$request->input('correo');
                $departamento=$request->input('departamento');
                $ciudad=$request->input('ciudad');
                $direccion=$request->input('direccion');
                $municipio=$request->input('municipio');
                $servicio=$request->input('servicio');
                $licencia=$request->input('licencia');
                $desarrollo=$request->input('desarrollo');
                $mensaje=$request->input('mensaje');
                
                Mail::send('emails.software',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad, 'direccion'=>$direccion, 'municipio'=>$municipio, 'servicio'=>$servicio, 'licencia'=>$licencia,'desarrollo'=>$desarrollo,'mensaje'=>$mensaje], function($m) {
                    $m->subject("Cotización desarrollo de software");
                    $m->from('soporte@stratecsa.com', "Soporte");
                    $m->to('info@stratecsa.com');         
                });

                if($Nombre_empresa){ 
                    $mensaje = "Mensaje enviado correctamente";
                    echo "<script>";
                    echo "alert('$mensaje');";  
                    echo "window.location = '/cotizar/software';";
                    echo "</script>";               
                }else{
                    echo "Error al enviar el mensaje";
                    echo "window.location = '/cotizar/software';";
                }
            }else{
                $mensaje = "Robot";
                echo "<script>";
                echo "alert('$mensaje');";
                echo "window.location = '/cotizar/software';";
                echo "</script>";
            }
        }else{
            $mensaje = "Rellenar todos los campos";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "window.location = '/cotizar/software';";
            echo "</script>";
        }
    }

    public function cotizacion_streaming(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.streaming',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización enlace de datos");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/streaming';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/streaming';";
        }
    }

    public function cotizacion_security_cloud(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.security-cloud',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización security cloud");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/security/cloud';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/security/cloud';";
        }
    }

    public function cotizacion_colocation(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.colocation',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización colocation");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/colocation';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/colocation';";
        }
    }

    public function cotizacion_servidor_dedicado(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.servidor-dedicado',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización servidor dedicado");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/servidor/dedicado';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/servidor/dedicado';";
        }
    }

    public function cotizacion_cloud_server(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.cloud-server',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización cloud server");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/cloud/server';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/cloud/server';";
        }
    }

    public function cotizacion_cloud_backup(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.cloud-backup',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización cloud backup");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/cloud/backup';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/cloud/backup';";
        }
    }

    public function cotizacion_correo_corporativo(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.correo-corporativo',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización correo corporativo");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/correo/corporativo';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/correo/corporativo';";
        }
    }

    public function cotizacion_outsourcing_tic(Request $request){

        $Nombre_empresa=$request->input('Nombre_empresa');
        $Nombre_contacto=$request->input('Nombre_contacto');
        $telefono=$request->input('telefono');
        $correo=$request->input('correo');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $mensaje=$request->input('mensaje');
        
        Mail::send('emails.outsourcing-tic',['Nombre_empresa'=>$Nombre_empresa,'Nombre_contacto'=>$Nombre_contacto,'telefono'=>$telefono,'correo'=>$correo,'departamento'=>$departamento,'ciudad'=>$ciudad,'mensaje'=>$mensaje], function($m) {
            $m->subject("Cotización outsourcing tic");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');    
        });

        if($Nombre_empresa){ 
            $mensaje = "Mensaje enviado correctamente";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/cotizar/outsourcing-tic';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/cotizar/outsourcing-tic';";
        }
    }

    public function suscribirse(Request $request){


        $correo=$request->input('correo');

        Mail::send('emails.suscrbirse',['correo'=>$correo], function($m) {
            $m->subject("Usuario registrado sitio web Stratecsa");
            $m->from('soporte@stratecsa.com', "Soporte");
            $m->to('info@stratecsa.com');
        });

        $suscrito= DB::insert("INSERT INTO suscriptores (`correo`) VALUES('$correo')");

        if($suscrito){ 
            $mensaje = "Felicitaciones, te has registrado en  Stratecsa";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '/';";
            echo "</script>";               
        }else{
            echo "Error al enviar el mensaje";
            echo "window.location = '/';";
        }
    }

    public function listar()
    {
        $categoria=DB::select("SELECT * FROM punto_venta_categoria");
        return view('catalogo_fibra_optica')->with('categoria', $categoria);
    }

    public function productos($id)
    {
        $productos = DB::select("SELECT pro.*, cat.nombre as nombre_cat FROM punto_venta_producto as pro, punto_venta_categoria as cat where cat.id=pro.categoria AND pro.categoria=$id");
        $nombre = DB::select('SELECT * FROM punto_venta_categoria WHERE id="'.$id.'"')[0]->nombre;
        return view('producto')->with('productos',$productos)->with('nombre', $nombre);
    }
    public function pqrs()
    {
        extract ($_POST);
        DB::insert("INSERT INTO pqrs_cliente (nombre, telefono, razon_social, tipo_cliente, asunto, observaciones ) VALUES('$nombre', '$telefono',
        '$razon_social', '$tipo_cliente', '$asunto', '$observaciones')");
    }
    public function oportunidadcomercial(Request $request)
    {
        $html = '<table style="width: 80%; ">
                  <thead>
                    <tr>
                      <th>CLIENTE</th>
                      <th>SID</th>
                      <th>COORDENADAS</th>
                      <th>CIUDAD</th>
                      <th>CAPACIDAD</th>
                      <th>MEDIO DE TRANSMISIÓN</th>
                      <th>OPORTUNIDAD</th>
                    </tr>
                  </thead>
                  <tbody>';
        $count = Oportunidad_comercial::orderby('id','desc')->first();
    
        if(isset($count->codigo)){
          $count = $count->codigo + 1;
        }else{
          $count = 10000;
        }
    
        $proveedores=NULL;
        if(isset($request->proveedores)){
          foreach($request->proveedores as $key => $val){
            $proveedores .=$val.'%_/-\_%';
          }
        }
    
        $oportunidad = new Oportunidad_comercial();
        $oportunidad->codigo = Controller::zero_fill($count,5);
        $oportunidad->razon_social = $request->razon_social;
        $oportunidad->nombre_contacto = $request->nombre_contacto;
        $oportunidad->movil=$request->movil;
        $oportunidad->fijo=$request->fijo;
        $oportunidad->direccion = $request->direccion;
        $oportunidad->nit = $request->nit;
        $oportunidad->correo=$request->correo;
        $oportunidad->proveedores = $proveedores;
        $oportunidad->save();
    
        $count = Oportunidad_comercial_servicios::orderby('id','desc')->first();
    
        if(isset($count->s_id)){
          $count = $count->s_id + 1;
        }else{
          $count = 1000000;
        }
    
        foreach ($request->coordenadas as $key => $val) {
    
          $servicios = new Oportunidad_comercial_servicios();
          $servicios->oportunidad = $oportunidad->id;
          $servicios->s_id = Controller::zero_fill($count+$key,7);
          $servicios->servicio = $request->servicio[$key];
          $servicios->coordenadas = $val;
          $servicios->ciudad = $request->ciudad[$key];
          $servicios->ancho_banda = $request->ancho_banda[$key];
          $servicios->medio_transmision = $request->medio_transmision[$key];
          $servicios->save();
    
          $html .='<tr>
                    <td>STRATECSA</td>
                    <td>'.Controller::zero_fill($count+$key,7).'</td>
                    <td>'.$val.'</td>
                    <td>'.$request->ciudad[$key].'</td>
                    <td>'.$request->ancho_banda[$key].'</td>
                    <td>'.$request->medio_transmision[$key].'</td>
                    <td>'.$oportunidad->codigo.'</td>
                  </tr>';
        }
    
        $html .= '</tbody></table>';
    
        if(isset($request->proveedores)){
          foreach($request->proveedores as $key => $val){
            $proveedor=Proveedores::find($val);
            $correo=Contactos_proveedor::where('proveedor',$val)->where('tipo_contacto','Contacto comercial')->first();
            $texto='
            Buen Día '.$proveedor->nombre.'.<br><br>
    
            Cordial Saludo.<br><br>
    
            En la presente solicitamos por favor viabilidad con UM en la siguiente ubicación.<br><br>
    
            Por favor entregar el servicio en edificio WBP en Bogotá.<br><br>
    
            Estoy atento a las observaciones.<br><br>';
    
            Mail::send('comercial.oportunidad.mail', array('texto' => $texto, 'html' => $html),  function ($msg) use ($correo, $oportunidad) {
              $msg->subject('OPORTUNIDAD'.$oportunidad->codigo);
              $msg->from('DontReply@stratecsa.com', "Stratecsa.");
              $mail = $correo->correo_contacto;
              $msg->to($mail);
            });
          }
        }
    }

    public function saveDate(Request $request)
    {
        // dd($request);
        DB::insert('INSERT INTO fechas(Nombre, Fecha) VALUES("'.$request->Nombre.'","'.$request->Fecha.'")');
        $nada = 1;

        return view('fechas')->with('nada',$nada);
    }

    public function fechas()
    {
        $fechas = DB::table('fechas')->get();
        $nada = 0;
        
        return view('fechas')->with('fechas',$fechas)->with('nada',$nada);
    }
}
