<?php
    session_start();
	include_once "conexion.php";
	
	function verificar_login($usuario,$contra,&$result){
	   $sql = "SELECT idUsuario,Contrasenia FROM usuario WHERE 
			   idUsuario='$usuario' and Contrasenia='$contra'";
		$rec = mysql_query($sql);
		$count = 0;
		
		while($row = mysql_fetch_array($rec,MYSQL_ASSOC)){
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
	
  if(!isset($_SESSION['userid'])){
	if(isset($_POST['enviarLogin'])){
		if(verificar_login($_POST['username'],$_POST['password'],$result)==1){
		 $_SESSION['userid'] = $_POST['username'];
		 print '<div class="alert alert-success" role="alert">
			        <p>Bienvenido </p><strong>'.$_POST['username'].'</strong>
					</div>';		
		}
		else{
		 print '<div class="alert alert-danger" role="alert">
			        <p>El nombre de usuario o contraseña es incorrecto</p> 
				</div>';
		}
	}
  }
  else{
     if(verificar_login($_POST['username'],$_POST['password'],$result)==1){
      $_SESSION['userid'] = $_POST['username'];
	  print '<div class="alert alert-success" role="alert">
			   <p>Bienvenido </p><strong>'.$_POST['username'].'</strong>
			   <p>¿Cómo lo llevas pelotudo?</p>
			 </div>';
	}
	else{
		print '<div class="alert alert-danger" role="alert">
			   <p>El nombre de usuario o contraseña es incorrecto</p>
			   </div>';
	}
			 
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--[endif]-->
	<meta charset="UTF-8">
	<!--mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ayuda</title>
	<!--cargar bootstrap desde CDN-->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!--cargar css basico encabezado y footer-->
	<link rel="stylesheet" type="text/css" href="estilos/bars2.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/login.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/ayuda.css" media="all">
</head>
<body>
</body>