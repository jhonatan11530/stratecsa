<?php
 
 
/**
 * Clase para acceso a datos
 * @package dbAccess
 */

  class conexion{
             
        //atributos
        public $host;
        public $user;
        public $pass; 
        public $mysqli;
        public $db;
	    public $array = array();
  
        public function __construct($user,$pass){
                $this->host = "localhost";//"190.84.233.180";
                $this->user = "user_admin";
                $this->pass = "claudio2015";
                $this->db = "stra_credenciales";   

        }

        public function connect(){             
           return $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);   
        }

        public function close_conection(){
            
            $this->mysqli->close();
	      //  unset($this->mysqli);
        }
}


 
?>
