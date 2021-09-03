<?php
	session_start();
	if (isset($_POST)) {	

		if ($_POST['option'] == "check") {			
			$_SESSION['chat'] = $_POST['datos']['id'];			
		}		
		if ($_POST['option'] == "delete"){
			unset($_SESSION['chat']);
		}		
		if ($_POST['option'] == "mensajes"){
			echo "<pre>";
			print_r($_POST);
			die();
			//unset($_SESSION['chat']);
		}		
	}
?>