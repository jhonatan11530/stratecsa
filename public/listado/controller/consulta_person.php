<?php
include_once "conectar.php"; 
if(isset($_POST['buscar_'])){
  $conect = new Conectar();
  $busc = $_POST['buscar_'];
  $sql = 'SELECT  id,Nombre,Apellido,Empresa,Cargo,Invita,Correo,Nivel 
          FROM listado
          WHERE Nombre LIKE "%'.$busc.'%" 
          OR Apellido LIKE "%'.$busc.'%" 
          OR Correo LIKE "%'.$busc.'%"';
  $respon = $conect->consultas($sql);
  if(isset($respon)){
    $array = array();
    if(isset($respon[0]) and is_array($respon[0])){
      foreach($respon as $val){
        array_push($array,array("id"=>$val['id'],"nomb"=>utf8_encode($val['Nombre']),"apell"=>utf8_encode($val['Apellido']),"empre"=>utf8_encode($val['Empresa']),
          "cargo"=>utf8_encode($val['Cargo']),"invita"=>utf8_encode($val['Invita']),"nivel"=>$val['Nivel']));
      }
    }else{
      $array = array("id"=>$respon['id'],"nomb"=>utf8_encode($respon['Nombre']),"apell"=>utf8_encode($respon['Apellido']),"empre"=>utf8_encode($respon['Empresa']),
                     "cargo"=>utf8_encode($respon['Cargo']),"invita"=>utf8_encode($respon['Invita']),"nivel"=>$respon['Nivel']);
    }
    echo json_encode($array);
  }
}
?>
