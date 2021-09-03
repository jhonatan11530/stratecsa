<?php
class Conectar{
  
  public $mbd;
  function __construct(){
  	//$this->mbd = new PDO('mysql:host=127.0.0.1;dbname=invitados;port=3307', 'root', '');
 	  $this->mbd = new PDO('mysql:host=127.0.0.1;dbname=stra_invitados', 'stra_usuario', 'GzUF.-.gGy0P'); 
 
  }

  function consultas($sql){
    	$data = $this->mbd->prepare($sql);
        $data->execute();
    	$num = $data->rowCount();
    	if($num > 1){
    	 $result = $data->fetchAll();	
    	}else{
    	  $result = $data->fetch(PDO::FETCH_BOTH);
    	}
    	return $result;
  }

  function inserta($tablas,$params = array()){
  	 $inserta = 'INSERT INTO `'.$tablas.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
  	 $sentencia = $this->mbd->prepare($inserta);
  	 $dato = $sentencia->execute();
  	 $response = $sentencia->fetch(PDO::FETCH_ASSOC);
  	 if(isset($response)){
       $array = array("exito"=>"Insercion con exito",
                     "last_cod_id"=>$this->mbd->lastInsertId(),
                     "mensaje"=>"Si inserto");
     }else{
       $array = array("error"=>$this->mbd->errorInfo());
     }
     return $array;
  }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
   public function update_query($query){
   	 $stmt = $this->mbd->prepare($query); 
   	 $stmt->execute();
  	 $response = $stmt->fetch(PDO::FETCH_BOTH);
  	 if(isset($response)){
  	    $salida = array("exito"=>"Actualizacion con exito");                     
     }else{
        $salida = array("error"=>"Problemas, no hay actualizacion",
                        "codigo"=>$response['errorInfo']);
     }
     return $salida;    
   }
}
?>