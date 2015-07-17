<?php

require_once('conexion2.php');
		
		  $sql1 = 'SELECT * FROM usuario';
          //echo 'Aquiiiiiiiiiiiiii';
		  $rec = mysqli_query($dbc,$sql1);
		  //echo 'Despues del query';
		  $verificar_usuario = 0;
		  //echo 'El valor de verificar usuario es'.$verificar_usuario;
		  //echo 'El valor de del post es '.$_POST['nombreU'];
		  //comprobar primero que el nombre de usuario existe o no
		  //echo 'Antes del bucle';
		  while($result = mysqli_fetch_array($rec,MYSQL_ASSOC)){
			// echo 'En el bucle';
			if($result['idUsuario'] == $_POST['nombreU']){
				//mensaje de que el usuario ya existe
				$verificar_usuario = 1;
			}
		  }
		 
		  //echo 'Despues del bucle';
		  if($verificar_usuario==0){
			 // echo 'Verificar es 0';
			$usuario = $_POST['nombreU'];
			 $nombre = $_POST['nombre'];
			 $apellido1 = $_POST['apellido1'];
			 $apellido2 = $_POST['apellido2'];
			 $email = $_POST['email'];
			 $contrasenia = $_POST['contrasenia'];
			 $ciudad = $_POST['ciudad']; 
			 $biografia = $_POST['miBiografia'];

			 $sql2 = "INSERT INTO Usuario (idUsuario,Nombre,Apellido_1,Apellido_2,Password,Localizacion,Email,Bio)
			 VALUES ('$usuario','$nombre','$apellido1','$apellido2','$contrasenia','$localizacion','$email','$biografia')";
			 
			 $respuesta = mysqli_query($dbc,$sql2);
			 header('Location: ../IndexInicial.php');
			 
		  }
		  else{
			$message = 'El usuario ya existe. Despues de cerrar este aviso pulsa retroceder.';
			
			echo "<SCRIPT> alert('$message'); </SCRIPT>";
			
			}
			
	 ?>	
