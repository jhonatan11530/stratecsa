<?php
	if(!isset($_SESSION)){ 
          session_start(); 
    }
	if(isset($_POST['session']) and $_POST['session'] == "destroy"){
		session_destroy();
		echo "salir";
	}

?>