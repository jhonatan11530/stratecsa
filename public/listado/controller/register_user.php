<?php
if(isset($_POST['nomb'],$_POST['apell'],$_POST['empre'])){
  if(isset($_POST['invi'])){
   $invi = $_POST['invi'];
  }else{ $invi = null;}
  if(isset($_POST['email'])){
    $email = $_POST['email'];	
  }else{ $email = null;}
  
  if(isset($_POST['nivel'])){
   $nivel = $_POST['nivel'];	
  }else { $nivel = null;} 
  
  if(isset($_POST['carg'])){
    $carg = $_POST['carg']; 	
  }else{ $carg = null;}
  
  include_once('conectar.php');
  $conection = new Conectar('root','');
  $nomb = $_POST['nomb'];
  $apelli = $_POST['apell'];
  $empre = $_POST['empre'];

  
 
  
  $array = array('Nombre'=>$nomb,
  				       'Apellido'=>$apelli,
  				       'Empresa'=>$empre,
  				       'Cargo'=>$carg,
  				       'Invita'=>$invi,
  				       'Correo'=>$email,
  				       'Nivel'=>$nivel,
                 'Asistio'=>null);
  $data = $conection->inserta('listado',$array);
  if(isset($data['exito'])){
    echo json_encode($data);
  }else if(isset($data['error'])){
    echo json_encode($data);
  }
}




?>