<?php
	
	session_save_path(".\Sesiones");
	session_start(); //Es obligatorio si quiero mover informacion entre las páginas
	include "./PHP/conexion2.php";
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
						       <li><a href="#">Datos Personales</a></li>
							   <li role="separator" class="divider"></li>
						       <li><a href="#">Privacidad</a></li>
							   <li role="separator" class="divider"></li>
						       <li><a href="#">Cuenta</a></li>
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
	
	
	<div id="ver">
	<button type="submit" class="btn-minimal" onclick="ocultar()" id="btnocultar">
		<span class="glyphicon glyphicon-remove"></span>
	</button>	
	<div id="Ayuda-Carousel" class="carousel slide" data-interval="50000" data-ride="carousel" > 
		<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#Ayuda-Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Ayuda-Carousel" data-slide-to="1"></li>
            <li data-target="#Ayuda-Carousel" data-slide-to="2"></li>
            <li data-target="#Ayuda-Carousel" data-slide-to="3"></li>
            <li data-target="#Ayuda-Carousel" data-slide-to="4"></li>
            <li data-target="#Ayuda-Carousel" data-slide-to="5"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner" id="carousel-inner">
            <div class="active item">
					<p align="center">
                    <img src="images/logo_grande_sin_fondo.png" alt="logo" id="logo_grande_sin_fondo" width="100%" height="100%"></p>
                    <div class="carousel-caption" id="carousel1">						
                            <h1 id="carousel1-h1">Bienvenido a Doubts Class,</h1>
                            <h3 id="carousel1-h3">tu red social de ámbito académico</h3>
                            <h4 id="carousel1-h4a">Doubts Class es una web de preguntas y respuestas que intenta 
                            fomentar la distribución del conocimiento de forma libre y gratuita. </h4>
                            <h4 id="carousel1-h4b">Con tu ayuda, queremos construir una librería de respuestas 
                            detalladas a todas las preguntas que puedan surgirte en las materias que estás interesado. 
                            </h4> 
                    </div><!--carousel1-->

            </div><!--item 0-->
            <div class="item">
                <div class="carousel-caption">
                        <h1>¿Cómo funciona?</h1>
                        <h4>Lo primero que debes hacer es rellenar el formulario de 
                        registro para poder crear tu perfil.</h4>
                        <img src="images/formulario.jpg" alt="formulario" style="margin:10px;" width="30%" height="30%">
                        <h4>
                        Tranquilo, no queremos aburrirte con formularios eternos. 
                        Te llevará menos de 1 minuto.
                        </h4>
                </div>
            </div><!--item 1-->
            <div class="item">
                <div class="carousel-caption" id="carousel2">
                        <h4 id="carousel2-h4">Queremos centrarnos en resolver tus problemas actuales
                        de la forma más directa y organizada.</h4>
                        <table id="carousel2-table">
                            <tr>
                                <th><img src="images/pregunta.jpg" alt="pregunta" 
                                style="height:80px;width:80px;margin:10px;" id="pregunta"></th>
                                <th><h3 id="carousel2-h3a">Haz tu pregunta</h3></th>
                            </tr>
                            <tr>
                                <th><img src="images/respuesta.jpg" alt="respuesta" 
                                    style="height:80px;width:80px;margin:10px;" id="respuesta"></th>
                                <th><h3 id="carousel2-h3b">Obtén la respuesta</h3></th>
                            </tr>
                            <tr>
                                <th><img src="images/aviso.jpg" alt="aviso" 
                                style="height:80px;width:80px;margin:10px;" id="aviso"></th>
                                <th><h3 id="carousel2-h3c">Esto no es un foro de discusión</h3></th>
                            </tr>
                        </table>   
                </div><!--carousel-caption-->
            </div><!--item 2-->
            <div class="item">
                <div class="carousel-caption" id="carousel3">  
				<table>
					<colgroup>
						<col span="2">
					</colgroup>
					<tr>
						<td><img src="images/exclamacion.jpg" alt="exclamacion" style="height:80px;width:80px;margin:10px;" id="exclamacion" align="left"></td>
						<td><h3>Sólo nuestros usuarios pueden realizar preguntas y respuestas.</h3></td>
					</tr>
					<tr>
						<td><img src="images/tic.png" alt="tic" style="height:80px;width:80px;margin:10px;" id="tic" align="left"></td>
						<td><h3>La persona que realizó la pregunta puede marcarla como respondida, y valorar las respuestas.</h3></td>
					</tr>
					<tr>
						<td><img src="images/flecha.png" alt="flecha" style="height:80px;width:80px;margin:10px;" id="flecha" align="left"></td>
						<td><h3>Las respuestas más votadas se mostrarán en primer lugar.</h3></td>
					</tr>
				</table>
                </div>
            </div><!--item 3-->
            <div class="item">
                <div class="carousel-caption" id="carousel4">
					<img src="images/estrellas.png" alt="estrellas" style="height:50%;width:50%;margin:10px;" id="estrellas">
					<h3>Ganarás reputación cuando otros usuarios voten tus preguntas y respuestas.</h3>
					<img src="images/tag.png" alt="tag" style="height:80px;width:80px;margin:10px;" id="tag">
                    <h3>Utiliza las etiquetas para clasificar la información y que otros puedan encontrarla.</h3>
                </div>
            </div><!--item 4-->
            <div class="item">
                    <div class="carousel-caption">
                        <h1>¿Y si necesito más información?</h1>
                        <img src="images/archivos.png" style="height:30%;width:30%;margin:10px;" alt="archivos">
                        <h3>Los usuarios pueden compartir archivos y referenciarlos en las respuestas para todos aquellos
                        que quieran saber más.
                        </h3>
                    </div>    
            </div><!--item 5-->
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#Ayuda-Carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#Ayuda-Carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
	</div>
	
		<!--LA CHICHA-->
	<?php
		//Realizamos una consulta a la bbdd de las últimas preguntas
		//Imprimimos blockquotes
	  //Esta consulta me muestra las preguntas hechas hoy. Titulo y Usuario
	  $sql = 'SELECT Titulo,Fecha,Votos,Descripcion,Usuario_idUsuario,Hora,idPregunta FROM pregunta';
	  //$sql = 'SELECT Titulo,Fecha,Votos,Descripcion,Usuario_idUsuario,Hora FROM pregunta WHERE idPregunta='.$id;
	  $res = mysqli_query($dbc,$sql) or die ('Consulta fallida: '.mysql_error());
	  print'
	  <div class="container-fluid" id="cuerpo">
			<section id="preguntas">
	         Preguntas Recientes
			 </section>
			 <p></p>';

			 while($result = mysqli_fetch_array($res,MYSQL_ASSOC)){
			// echo 'En el bucle';
			//print 'El valor de resHA es '.$resHA.
			$horaAux = $result['Hora'];
			$fecha = $result['Fecha'];

			//Faltan los casos en los que tengan el mismo día y la misma hora
		print '<div class="panel panel-primary">
		';
		print   '<div class="panel-heading">
		';
		print     '<a style="color:white;" href="responder.php?id='.$result['idPregunta'].'">';
		print     '<h3 class="panel-title">'.$result['Titulo'].'</h3></a>
		';
		print   '</div>
		';
		print   '<div class="panel-body">
		';
		/*print     'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> hace '.$interval->format('%a dias').'
		';*/
		//Caso en el que se publiquen en dias diferentes
		
        print       'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> el '.$horaAux.'
		';
				
		print   '</div>
		';
		print '</div>
		';
		     }//Fin del while
	print'</li>
	    </ul>
	  </div>';
 
	?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!--FIN LA CHICHA-->
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