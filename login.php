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
			        <p>Bienvenido </p>'.$_POST['username'].'
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
      $_SESSION['userid'] = $_POST['username'];
	  print '<div class="alert alert-success" role="alert">
			   <p>Bienvenido </p>'.$_POST['username'].'
			   <p>Como lo llevas </p>
			 </div>';
			 
  }

?>