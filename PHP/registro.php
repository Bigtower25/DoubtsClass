	 <?php
        /*if(isset($_POST['enviar'])){
		 
		  $sql = 'SELECT * FROM usuario';
          echo 'Aquiiiiiiiiiiiiii';
		  $rec = mysql_query($sql) or die ('Consulta fallida: '.mysql_error());
		  echo 'Despues del query';
		  $verificar_usuario = 0;
		  echo 'El valor de verificar usuario es $verificar_usuario';
		  echo 'El valor de del post es '.$_POST['nombreU'];
		  //comprobar primero que el nombre de usuario existe o no
		  while($result = mysql_fetch_array($rec)){
			 echo 'En el bucle';
			if($result->usuario == $_POST['nombreU']){
				//mensaje de que el usuario ya existe
				$verificar_usuario = 1;
			}
		  }
		  if($verificar_usuario==0){
			
			 $usuario = $_POST['nombreU'];
			 $nombre = $_POST['nombre'];
			 $apellido1 = $_POST['apellido1'];
			 $apellido2 = $_POST['apellido2'];
			 $email = $_POST['email'];
			 $contrasenia = $_POST['contrasenia'];
			 $ciudad = $_POST['ciudad'];
			 $fechaDN = $_POST['fechaDN'];
			 $biografia = $_POST['miBiografia'];
			 
			 echo '$usuario';
			 echo '$nombre';
			 
			 $sql = "INSERT INTO usuario (idUsuario,Nombre,Apellido_1,Apellido_2,Email,Password,Localizacion) VALUES ('$usuario','$nombre','$apellido1','$email','$contrasenia','$ciudad')";
		     mysql_query($sql);
			 
		  }
		  else{
				echo '<h3>USTED YA SE HA REGISTRADO</h3>';
			}
		  
		}*/
	 ?>		