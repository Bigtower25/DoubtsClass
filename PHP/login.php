<?php
    session_save_path("../Sesiones");
	session_start();
	$_SESSION["Acceso"] = time();
	
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');
define ('DB_NAME','aplicacionesweb');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	OR die('No se pudo conectar a la base de datos. Error: ' . mysqli_connect_error());
	
	function verificar_login($usuario,$contra,&$result){
		global $dbc;
	   $sql1 = "SELECT idUsuario,Password FROM usuario WHERE 
			   idUsuario='$usuario' and Password='$contra'";
		$rec = mysqli_query($dbc,$sql1);
		$count = 0;
		
		while($row = mysqli_fetch_array($rec,MYSQL_ASSOC)){
		  $count ++;
		  $result = $row;
		}
		if($count==1){
		   return 1;		
		}
		else{
		   return 0;
		}	
	}
	
  if(!isset($_SESSION["userid"])){
	if(isset($_POST['enviarLogin'])){
		if(verificar_login($_POST['username'],$_POST['password'],$result)==1){
		 $_SESSION["userid"] = $_POST['username'];
		header('Location: ../IndexInicial.php');
		}
		else{
		 /*print '<div class="alert alert-danger" role="alert">
			        <p>El nombre de usuario o contraseña es incorrecto</p> 
				</div>';*/
				header('Location: ../IndexInicial.php');
		}
	}
  }
  else{
     if(verificar_login($_POST['username'],$_POST['password'],$result)==1){
      $_SESSION["userid"] = $_POST['username'];
	  header('Location: ../IndexInicial.php');
	}
	else{
	     //header("Location:loginError.php");
		header('Location: ../IndexInicial.php');
			   //header("IndexInicial.html");
	}
			 
  }

?>