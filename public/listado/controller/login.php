<?php
  include_once('conectar.php');
  if(!isset($_SESSION)){ 
        session_start(); 
  }

  class Login {    
      public $user;
      public $pass;
      public function __construct($user,$pass){
        $this->user = $user;
        $this->pass = $pass;
      }

      public function loguearse(){ 
        if(!isset($_SESSION["perfil"],$_SESSION["pass"])){
           $_SESSION["perfil"] = "root";
           $_SESSION["pass"] = "";
        }
        $consulta = new Conectar(); 
        $sql = 'SELECT user_id
                FROM users 
                WHERE user_id = "'.$this->user.'"
                AND passwd_stra = "'.sha1($this->pass).'"';
        $tipo_usuario = $consulta->consultas($sql);
        if(isset($tipo_usuario['user_id'])){
          $_SESSION["tipo_perfil"] = "7b7f1fb5a077b456dc38df7c0781850c65c2e735";
          return true;
        }else{
          return false;
        }
      }
  }
?>
