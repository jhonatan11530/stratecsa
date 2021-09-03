<?php
@session_start();  
ob_start(); 
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
 
	<title></title>
  <style type="text/css">
  	body{
     background: url(http://mymaplist.com/img/parallax/back.png);
	 background-color: #444;
     background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
	}

	.vertical-offset-100{
     padding-top:100px;
	}

  </style>
</head>
<body>
 
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Por favor, loguese</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" method="post" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="password" name="password" type="password" value="">
			    		</div>
			    		
			    		<input class="btn btn-lg btn-success btn-block" name="btn_enviar" type="submit" value="Entrar">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>

<script>
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});

</script>
<?php
 include_once 'controller/login.php';
 if(isset($_POST['btn_enviar'])){ 
   if(isset($_POST['email'],$_POST['password'])){
 	  $mail = $_POST['email'];
 	  $pass = $_POST['password'];
 	  $login = new login($mail,$pass);
 	  if($login->loguearse()){
        header("location: index.php");
    }else{
     	echo "no se ha logueado";
    }
   } 
 }
 ob_end_flush();

?>

