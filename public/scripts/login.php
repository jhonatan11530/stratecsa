<?php session_start();
		
	if (isset($_POST) && !empty($_POST)) {

		include '../models/Conexion.php';	

		$user = $_POST['User'];
		$pass = sha1($_POST['Pass']);
				
        $con = new Conexion();
		$sql = 'select u.*,r.nombre as rol from usuarios u inner join rol r on r.id=u.id_rol where u.username="'.$user.'" and u.password="'.$pass.'"';
		$con->consultarBD($sql);

		if($row = $con->obtenerResultado()) {
			
			$_SESSION['User'] = $user;
			$_SESSION['correo'] = $row['correo'];		
			$_SESSION['rol'] = $row['rol'];

            echo "<script>window.location.replace('../admin');</script>";
		}
		else{
			echo "<script>window.location.replace('../login');</script>";
		}
	}	
	else{
		session_destroy();
		echo "<script>window.location.replace('../');</script>";
	}
?>