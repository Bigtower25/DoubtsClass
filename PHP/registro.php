<?php
	session_start();
	include_once "conexion.php";
?>
<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
	<!--[endif]-->
	<meta charset="UTF-8">
	<!--mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DoubtsClass Registro</title>
	<!--cargar bootstrap desde CDN-->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!--cargar css basico encabezado y footer-->
	<link rel="stylesheet" type="text/css" href="estilos/bars2.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/login.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/registro.css" media="all">
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top" id="nav-small">
        <div class="container-fluid">
            <div class="navbar-header">
				        <a class="navbar-brand" href="#">
					        <img src="images/logo.jpg" alt="logo" width="100" height="64">
				        </a>
		    </div><!-- navbar-header-->
             <ul class="nav navbar-nav brand-right" id="nav-small-right">
		        <li class="dropdown">
			        <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">
			            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> 
			            <span class="caret" id="navbar-left-small-caret"></span>
			        </a>
                    <ul class="dropdown-menu" id="navbar-left-small-menu">
                        <form class="navbar-form navbar-left" role="search">
						    <div class="form-group">
							    <input type="text" class="form-control" placeholder="Search">
							</div>
						</form>
						<li>
                            <a href="#" data-hover="dropdown" data-close-others="false">
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
			                    Filtros<span class="caret" id="navbar-search-filtros-caret"></span>
			                </a>
                            <ul class="dropdown-menu sub-menu">
                                <li><a tabindex="1" href="#">
                                    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                                    Etiquetas</a>
                                </li>
                                <li><a tabindex="2" href="#">
                                    <span class="glyphicon glyphicon-user"></span>
												Usuarios</a>
						        </li>
                            </ul>
                        </li> 
                        <li class="divider"></li>
                        <li class="dropdown">
			                <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">
			                     Vistas<span class="caret"></span>
			                </a>
                            <ul class="dropdown-menu" id="navbar-left-small-menu">
		                        <li><a href="#">Preguntas</a></li>
		                        <li><a href="#">Etiquetas</a></li>
		                        <li><a href="#">Usuarios</a></li>
		                        <li><a href="#">Sin respuesta</a></li>
		                    </ul>
		                </li>
		                <li class="divider"></li>
		                <li><a href="#">Realizar Pregunta</a></li>
		                <li class="divider"></li>
		                <li class="dropdown">
		                <li>
		                    <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Login
		                        <span class="caret"></span>
		                    </a>
		                    <ul class="dropdown-menu" id="login-menu">
					            <li>
					                <form class="navbar-form navbar-left" role="email">
								        <div class="form-group">
									        <input type="text" class="form-control" placeholder="Email">
								        </div>
						            </form>
					            </li>
    					        <li>
					                <form class="navbar-form navbar-left" role="password">
								        <div class="form-group">
									        <input type="text" class="form-control" placeholder="Contraseña">
								        </div>
						            </form>
					            </li>
					            <li>
					                <button type="submit" class="btn btn-large btn-primary" id="login-signin">Sign in</button>
    					        </li>
				            </ul>
		                </li>
		                <li><a href="#">Registro</a></li>
		            </ul>
		        </li>
		    </ul>
        </div><!--container-fluid-->
    </header>
    
	<header class="navbar navbar-inverse navbar-fixed-top" id="nav">
		
		    <ul class="nav navbar-nav navbar-left">
		        <li><a href="#" style="color:white;font-size:18px;position:relative;paddingleft:5px;padding-right:5px">Doubts Class</a></li>
		    </ul>
			<ul class="nav navbar-nav" id="navbar-search">
			    <li class="dropdown">
			        <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">
			            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 
			            <span class="caret" id="navbar-search-caret"></span>
			        </a>
                    <ul class="dropdown-menu" id="search-menu">
					    <li>
					        <form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
						    </form>
					    </li>
                        <li>
                            <a href="#" data-hover="dropdown" data-close-others="false">
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
			                    Filtros<span class="caret" id="navbar-search-filtros-caret"></span>
			                </a>
                            <ul class="dropdown-menu sub-menu" id="search-submenu">
                                <li><a tabindex="1" href="#">
                                    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                                    Etiquetas</a>
                                </li>
                                <li><a tabindex="2" href="#">
                                    <span class="glyphicon glyphicon-user"></span>
												Usuarios</a>
						        </li>
                            </ul>
                        </li>    
                    </ul> <!--dropdown-menu-->
                </li>
			</ul>	<!--navbar-nav-->

			<ul class="nav navbar-nav brand-left" id="navbar-left">
		        <li><a href="#">Preguntas</a></li>
		        <li><a href="#">Etiquetas</a></li>
		        <li><a href="#">Usuarios</a></li>
		        <li><a href="#">Sin respuesta</a></li>
		    </ul>
		    
		    <ul class="nav navbar-nav brand-left" id="navbar-left-small">
		        <li class="dropdown">
			        <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">
			            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> 
			            <span class="caret" id="navbar-left-small-caret"></span>
			        </a>
                    <ul class="dropdown-menu" id="navbar-left-small-menu">
		                <li><a href="#">Preguntas</a></li>
		                <li><a href="#">Etiquetas</a></li>
		                <li><a href="#">Usuarios</a></li>
		                <li><a href="#">Sin respuesta</a></li>
		                <li class="divider"></li>
		                <li><a href="#">Realizar Pregunta</a></li>
		            </ul>
		        </li>
		    </ul>      

		    <div class="navbar-header" id="navbar-logo">
				        <a class="navbar-brand" href="ayuda.html">
					        <img src="images/logo_sin_letras.jpg" alt="logo" width="74" height="40" id="logo">
				        </a>
		    </div><!-- navbar-header-->

		    <ul class="nav navbar-nav brand-right" id="navbar-right">
		        <li class="bold"><a href="#" id="navbar-realizar_pregunta">Realizar Pregunta
		            </a></li>
		        <li class="dropdown">
		            <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Login
		            <span class="caret"></span>
		            </a>
		            <ul class="dropdown-menu" id="login-menu">				    
						<form method="post" class="minimal">
							<label for="username">
							Username:
								<input type="text" name="username" id="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
							</label>
							<label for="password">
							Password:
								<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
							</label>
							<button type="submit" class="btn-minimal">Sign in</button>
						</form>
				    </ul>
		        </li>
		        <li><a href="#">Registro</a></li>
		    </ul>
	</header>

	
	<section id="formulario">
	<h2>Registro</h2>
	<form name="formularioRegistro" method="post" class="minimal" action="#" >
		<label for="nombreU">
			Usuario:
			<input type="text" name="nombreU" id="nombreU" placeholder="Entre 8 y 20 caracteres" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
		</label>
		<label for="nombre">
			Nombre:
			<input type="text" name="nombre" id="nombre" />
		</label>
		<label for="apellido1">
			Apellido 1:
			<input type="text" name="apellido1" id="apellido1" />
		</label>
		<label for="apellido2">
			Apellido 2:
			<input type="text" name="apellido2" id="apellido2" />
		</label>
		<label for="email">
			Email:
			<input type="email" name="email" id="email" placeholder="nombre@dominio.com" />
		</label>
		<label for="emailR">
			Repetir email:
			<input type="email" name="emailR" id="emailR" placeholder="nombre@dominio.com" />
		</label>
		<label for="contrasenia">
			Contraseña:
			<input type="password" name="contrasenia" id="contrasenia" placeholder="Debe contener 1 mayúscula, minúscula y un número" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
		</label>
		<label for="ciudad">
			Introduzca su lugar de residencia:
			<input type="text" name="ciudad" id="ciudad" />
		</label>
		<label for="fechaDN">
			Introduzca su fecha de nacimiento:
			<input type="date" name="fechaDN" id="fechaDN" />
		</label>
		<label for="miBiografia">
			Biografia(opcional): 
			<textarea name="miBiografia" id="miBiografia" rows="10" cols="50"></textarea>
		</label>
		<label for="aceptarTyC">
			Aceptar Terminos y Condiciones: <input type="checkbox" name="aceptarTyC" id="aceptarTyC">
		</label>

		<button type="submit" name="enviar" class="btn-minimal">Registrarse</button>
	</form>
	</section>

	<br>
	
	<footer class="footer" id="footer">
	    <div class="container-fluid">
	            <ul class="nav navbar navbar-inverse navbar-fixed-bottom" id="navbar-bottom">
	            <ul class="nav navbar-nav brand-left">
		                <li><a href="#">Quienes Somos</a></li>
		                <li><a href="#">Contacto</a></li>
		                <li><a href="#">Trabajar Aqui</a></li>
		                <li class="dropdown">
		                    <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Otros
		                        <span class="caret"></span>
		                    </a>
		                    <ul class="dropdown-menu drop-up" id="footer-otros-menu">
					            <li><a tabindex="1" href="#">Legal</a></li>
					            <li><a tabindex="1" href="#">FAQs</a></li>
					            <li><a tabindex="1" href="#">Ayuda</a></li>
		                    </ul>
		                </li>
		        </ul>
	        </ul>
	    </div>
	</footer>
	
	
	<footer class="footer" id="footer-small">
	    <div class="container-fluid">
	            <ul class="nav navbar navbar-inverse navbar-fixed-bottom" id="navbar-bottom-small">
	                <ul class="nav navbar-nav" id="footer-nav">
	                    <li class="dropdown">
			                <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">
			                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> 
			                    <span class="caret" id="navbar-left-small-caret"></span>
			                </a>
                        <ul class="dropdown-menu" id="navbar-left-small-menu">
		                    <li><a href="#">Quienes Somos</a></li>
		                    <li><a href="#">Contacto</a></li>
		                    <li><a href="#">Trabajar Aqui</a></li>
		                    <li class="dropdown">
		                        <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Otros
		                            <span class="caret"></span>
		                        </a>
		                        <ul class="dropdown-menu drop-up" id="footer-otros-menu">
					                <li><a tabindex="1" href="#">Legal</a></li>
					                <li><a tabindex="1" href="#">FAQs</a></li>
					                <li><a tabindex="1" href="#">Ayuda</a></li>
		                        </ul><!--footer-otros-menu-->
		                </li><!--dropdown otros-->
		                </ul><!--navbar-left-small-menu-->
		                </li>
		            </ul>
	            </ul>
	    </div>
	</footer>
	    <!--[if lt IE 9] para adaptar todos los navegadores a html5-->
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/64804488/bootstrap-hover-dropdown.min.js"></script>
		
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
			 
			 $sql = "INSERT INTO usuario (idUsuario,Nombre,Apellido_1,Apellido_2,Email,Contraseña,Localización) VALUES ('$usuario','$nombre','$apellido1','$email','$contrasenia','$ciudad')";
		     mysql_query($sql);
			 
		  }
		  else{
				echo '<h3>USTED YA SE HA REGISTRADO</h3>';
			}
		  
		}*/
	 ?>		
</body>
</html>