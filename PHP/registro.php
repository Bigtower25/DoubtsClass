<?php
		include_once "conexion.php";
		
        if(isset($_POST['enviar'])){
		 
		  $sql = 'SELECT * FROM usuario';
          //echo 'Aquiiiiiiiiiiiiii';
		  $rec = mysql_query($sql) or die ('Consulta fallida: '.mysql_error());
		  //echo 'Despues del query';
		  $verificar_usuario = 0;
		  //echo 'El valor de verificar usuario es'.$verificar_usuario;
		  //echo 'El valor de del post es '.$_POST['nombreU'];
		  //comprobar primero que el nombre de usuario existe o no
		  //echo 'Antes del bucle';
		  while($result = mysql_fetch_array($rec,MYSQL_ASSOC)){
			// echo 'En el bucle';
			if($result['Nombre'] == $_POST['nombreU']){
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
			 $fechaDN = $_POST['fechaDN'];
			 $biografia = $_POST['miBiografia'];
			 $localizacion = $_POST['ciudad'];
			 $email = $_POST['email'];
			 
			 //echo $usuario;
			 //echo $nombre;
			 //echo 'La localización es '.$localizacion;
			 
			 /*$sql = "INSERT INTO `aplicacionesweb`.`usuario` (`idUsuario`,`Nombre`,`Apellido_1`,`Apellido_2`,`Edad`,`Contraseña`,`Fecha_Registro`,`Localización`,`Email`,`Privilegio`,`Usuario_idUsuario`,`Foto de Perfil`) VALUES (\'$usuario\',\'$nombre\',\'$apellido1\',\'$apellido2\',NULL,\'$contrasenia\',CURRENT_TIMESTAMP,\'$ciudad\',\'$email\',\'0\',NULL,NULL);";
			 */
			 $sql = "INSERT INTO usuario (idUsuario,nombre,apellido_1,apellido_2,contrasenia,localizacion,email) VALUES ('$usuario','$nombre','$apellido1','$apellido2','$contrasenia','$localizacion','$email')";
			 mysql_query($sql);
			 
		  }
		  else{
				echo '<h3>USTED YA SE HA REGISTRADO</h3>';
			}
		  
		}
	 ?>	
