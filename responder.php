<?php
   session_save_path("./Sesiones");
   session_start(); //Es obligatorio si quiero mover informacion entre las páginas
   include "./PHP/conexion2.php";
   //include "./PHP/login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--[endif]-->
	<meta charset="UTF-8">
	<!--mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DoubtsClass</title>
	<!--cargar bootstrap desde CDN-->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!--cargar css basico encabezado y footer-->
	<link rel="stylesheet" type="text/css" href="estilos/bars2.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/login.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/ayuda.css" media="all">
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top" id="nav-small">
        <div class="container-fluid">
            <div class="navbar-header">
				        <a class="navbar-brand" href="IndexInicial.html">
					        <img src="images/logo_sin_letras.jpg" alt="logo" width="100" height="64">
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
		                <li><a href="RealizarPregunta.html">Realizar Pregunta</a></li>
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
		                <li><a href="registro.php">Registro</a></li>
		            </ul>
		        </li>
		    </ul>
        </div><!--container-fluid-->
    </header>
    
	<header class="navbar navbar-inverse navbar-fixed-top" id="nav">
		<div class="container-fluid">
		    <ul class="nav navbar-nav navbar-left">
		        <li><a href="IndexInicial.html" style="color:white;font-size:18px;position:relative;paddingleft:5px;padding-right:5px">Doubts Class</a></li>
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
		                <li><a href="RealizarPregunta.html">Realizar Pregunta</a></li>
		            </ul>
		        </li>
		    </ul>      

		    <div class="navbar-header" id="navbar-logo">
				        <a class="navbar-brand" href="IndexInicial.html">
					        <img src="images/logo_sin_letras.jpg" alt="logo" width="74" height="40" id="logo">
				        </a>
		    </div><!-- navbar-header-->

		    <ul class="nav navbar-nav brand-right" id="navbar-right">
		        <li><a href="RealizarPregunta.html" id="navbar-realizar_pregunta">Realizar Pregunta
		            </a></li>
				</ul>
				<?php
				if(isset($_SESSION['userid'])){
					print '
					<ul class="nav navbar-nav brand-right" id="navbar-right">
					
					    <li class="dropdown" id="Logeado">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="true">						  
		                   '.$_SESSION['userid'].'
						   <span class="caret"></span>
		                  </a>
		                  <ul class="dropdown-menu">		    
						       <li><a href="PreferenciasDatosPersonales.html">Datos Personales</a></li>
							   <li role="separator" class="divider"></li>
						       <li><a href="PreferenciasPrivacidad.html">Privacidad</a></li>
							   <li role="separator" class="divider"></li>
						       <li><a href="PreferenciasCuenta.html">Cuenta</a></li>
				           </ul>
				        </li>
						<ul class="nav navbar-nav brand-right" id="navbar-right">
						<li><a href="#" id="logout">Logout</a>
						</li>				
					</ul>
					</ul>';
				} else{
					print' <ul class="nav navbar-nav brand-right" id="navbar-right">
		        <li id="No logeado" class="dropdown">
		            <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Login
		            <span class="caret"></span>
		            </a>
		            <ul class="dropdown-menu" id="login-menu">				    
						<form action="./PHP/login.php" method="post" class="minimal">
							<label for="username">
							Username:
								<input type="text" name="username" id="username" required="required" />
							</label>
							<label for="password">
							Password:
								<input type="password" name="password" id="password" required="required" />
							</label>
							<button type="submit" name="enviarLogin" class="btn-minimal">Sign in</button>
						</form>
				    </ul>
		        </li>
		        <li><a href="registro.html">Registro</a></li>
		    </ul>';
				}
				//if(isset($_POST['logout'])){
					//session_destroy();
					//header("Location:IndexInicial.html");
				//}
			?>
		</div> <!--container-fluid-->
	</header>

	<div>
	
	</div>

	<?php
	/*if(!isset($_SESSION["userid"])){
		print("<script>
			$(document).ready(function(){
			  $('#nav').after('<div class=\"alert alert-danger\" role=\"alert\" ");
	    print("><strong><p>Es necesario estar logueado para realizar una pregunta</p></strong></div>');}
		     );");
		print ("
		</script>");
	}
	else{*/	
	  $id = $_GET["id"];
	  $sql = "SELECT Titulo,Fecha,Votos,Descripcion,Usuario_idUsuario,Hora FROM pregunta WHERE idPregunta='".$id."'";
	  $resmsql = mysqli_query($dbc,$sql) or die ('Consulta fallida: '.mysql_error());

	  //Imprimir el titulo
	  while($res = mysqli_fetch_array($resmsql,MYSQL_ASSOC)){
	  print '<div class="panel panel-primary">
		';
		print   '<div class="panel-heading">
		';
		print     '<h3 class="panel-title">'.$res['Titulo'].'</h3>
		';
		print   '</div>
		';
		break;
	  }
	  while($res2 = mysqli_fetch_array($resmsql,MYSQL_ASSOC)){
		//Panel-body de la descripcion
		print   '<div class="panel-body">
		';
		print    '<ul style background: #DDEEF9" class="list-group-item">
		';
		print     $res2['Descripcion'].'<span class="badge">Numero de votos '.$res2['Votos'].'</span>
		';	
        print    '</ul>
		';		 	
		print   '</div>
		';
		break;
	  }
	  
		//Buclecillo de respuestas
		$sql2 = "SELECT idRespuesta,idUsuario,Votos,Fecha,Descripcion FROM respuesta WHERE Pregunta_idPregunta='".$id."'";
		//Panel body con las respuestas
		$res2 = mysqli_query($dbc,$sql2);
		while($result = mysqli_fetch_array($res2,MYSQL_ASSOC)){
		print   '<div class="panel-body">
		';
		print     '<ul class"list-group-item">
		';
		
		print     'Respuesta realizada por '.$result['idUsuario'].' ';
        print     ' El dia '.$result['Fecha'];
        print   '<span class="badge"> Número de votos '.$result['Votos'].'</span>';
        print   '<button type="button" name="botonVotar" id='.$result['idRespuesta'].'class="btn btn-default btn-lg">';
        print       '<i class="fa fa-hand-o-up">Votar</i>';
        print   '</button>';		
        print   '<div class="panel-body">
        ';
		print   '<ul class="list-group-item">
		';
		print   '<p>'.$result['Descripcion'].'</p>
		';
		print   '</ul>
		';
        print   '</div>
        ';
		print   '</ul>
		';
		print   '</div>
		';
        //print '<div class="panel panel-primary"></div>';	
		}
		print '<form method="post">
		';
		print '<div class="form-group">
		';
		print   '<label for="escribirPregunta">Responder</label>
		';
		print   '<input type="text" name="campoRespuesta" class="form-control" placeholder="Escribe aqui tu respuesta">
		';
		print '</div>
		';
		print '<button type="submit" name="enviarRespuesta" class="btn btn-default">Enviar</button>
		';		
		print '</form>
		';		
	    print '</div>
		';
		if(isset($_POST['enviarRespuesta'])){
		  if(isset($_SESSION['userid'])){
		print '<p> Has respondido <p>
		';
		$usuario = $_SESSION['userid'];	
		$respuesta = $_POST['campoRespuesta'];
		//Obtener la fecha
		$sqlF = "SELECT DATE(NOW()) AS Fecha";
		$fecha = mysqli_query($dbc,$sqlF);
		$sqlH = "SELECT TIMESTAMP(NOW()) AS Hora";
		$hora = mysqli_query($dbc,$sqlH);
		
		//Codigo de inserción
		$insResp = "INSERT INTO respuesta (idUsuario,Votos,Fecha,Descripcion,Pregunta_idPregunta,Hora)
		        VALUES ('$usuario','0','$fecha','$respuesta','$id','$hora')";
		
		mysqli_query($dbc,$insResp);
		}
		else{
			//Es necesario estar logueado para responder
			print '<div class="alert alert-danger" role="alert">
			       <p>Es necesario estar logueado para responder a la pregunta</p>
				   </div>';			
		}
		}
        //inserto un script para obtener el valor
        print '<script>
		  ';
		print "$('#id').click(function()
			var id2 = $(this).attr('id');
		);";  
		  print  '</script>
		  ';		
		//FALTA AUN LAS ACCIONES CUANDO SE DA AL BOTON DE 'VOTAR'
	    if(isset($_POST['botonVotar'])){
		 
		   if(isset($_SESSION['userid'])){
		      $respuesta = "UPDATE respuesta SET Votos=Votos+1 WHERE idRespuesta=
		   ";
		   }
		   else{
		      print '<div class="alert alert-danger" role="alert">
			       <p>Es necesario estar logueado para votar a la respuesta</p>
				   </div>';		   
		   }		
		}
	 
	 
	 ?>	
	
	<footer class="footer" id="footer">
	    <div class="container-fluid">
	            <ul class="nav navbar navbar-inverse navbar-fixed-bottom" id="navbar-bottom">
	            <ul class="nav navbar-nav brand-left">
		                <li><a href="Quienes Somos.html">Quienes Somos</a></li>
		                <li><a href="Contacto.html">Contacto</a></li>
		                <li><a href="Trabajar Aqui.html">Trabajar Aqui</a></li>
		                <li class="dropdown">
		                    <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Otros
		                        <span class="caret"></span>
		                    </a>
		                    <ul class="dropdown-menu drop-up" id="footer-otros-menu">
					            <li><a tabindex="1" href="PoliticaPrivacidad.html">Legal</a></li>
					            <li><a tabindex="1" href="FAQs.html">FAQs</a></li>
					            <li><a tabindex="1" href="IndexInicial.html">Ayuda</a></li>
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
		                    <li><a href="Quienes Somos.html">Quienes Somos</a></li>
		                    <li><a href="Contacto.html">Contacto</a></li>
		                    <li><a href="Trabajar Aqui.html">Trabajar Aqui</a></li>
		                    <li class="dropdown">
		                        <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Otros
		                            <span class="caret"></span>
		                        </a>
		                        <ul class="dropdown-menu drop-up" id="footer-otros-menu">
					                <li><a tabindex="1" href="PoliticaPrivacidad.html">Legal</a></li>
					                <li><a tabindex="1" href="FAQs.html">FAQs</a></li>
					                <li><a tabindex="1" href="IndexInicial.html">Ayuda</a></li>
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
		<script type="text/javascript">
			function ocultar(){document.getElementById('ver').style.display = 'none';}
		</script>
		
</body>
</html>