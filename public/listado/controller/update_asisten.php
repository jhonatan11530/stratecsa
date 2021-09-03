<?php
include_once "conectar.php"; 
if(isset($_POST['id_pers'])){
  $conect = new Conectar();
  $busc = $_POST['id_pers'];
  $sql = 'UPDATE listado 
  		  SET Asistio = 1 
  		  WHERE id = '.$busc;
  $respon = $conect->update_query($sql);
  echo json_encode($respon);
}



?>