<?php
	
	session_save_path("./Sesiones");
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
	<link rel="stylesheet" type="text/css" href="estilos/registro.css" media="all">
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top" id="nav-small">
        <div class="container-fluid">
            <div class="navbar-header">
				        <a class="navbar-brand" href="IndexInicial.php">
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
		                <li><a href="RealizarPregunta_v2.php">Realizar Pregunta</a></li>
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
		        <li><a href="IndexInicial.php" style="color:white;font-size:18px;position:relative;paddingleft:5px;padding-right:5px">Doubts Class</a></li>
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
		                <li><a href="RealizarPregunta_v2.php">Realizar Pregunta</a></li>
		            </ul>
		        </li>
		    </ul>      

		    <div class="navbar-header" id="navbar-logo">
				        <a class="navbar-brand" href="IndexInicial.php">
					        <img src="images/logo_sin_letras.jpg" alt="logo" width="74" height="40" id="logo">
				        </a>
		    </div><!-- navbar-header-->

		    <ul class="nav navbar-nav brand-right" id="navbar-right">
		        <li><a href="RealizarPregunta_v2.php" id="navbar-realizar_pregunta"><b>Realizar Pregunta</b></a></li>
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
						<li><a href="./PHP/logout.php" id="logout">Logout</a>
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
					//header("Location:IndexInicial.php");
				//}
			?>
		</div> <!--container-fluid-->
	</header>
	
	<br>
	
	<section id="formulario">
	<h2>Realizar Pregunta</h2>
	<form name="formularioRealizarPregunta" method="post" class="minimal" action="#" >
		<label for="titulo">
			Título:
			<!--<input type="text" name="titulo" id="titulo" required="required" />-->
			<input type="text" name="titulo" id="titulo"/>
		<label for="pregunta">
			Escriba su pregunta:
		</label>
		<textarea name="content" style="width:100%"></textarea>
		<label for="etiquetas">
			Etiquetas:
		</label>
		<div id="seleccion">
		<select name="Tags" id="Tags">
			<!--TODO: codigo PHP que haga una consulta a la BBDD y cargue todas las etiquetas-->
			<option value="1">Primaria</option>
			<option value="2">ESO</option>
			<option value="3">Batchillerato</option>
			<option value="4">Universidad</option>
			<option value="5">Aeronautica</option> 
			<option value="6">Antropologia</option> 
			<option value="7">Arqueologia</option>
			<option value="8">Arquitectura</option>
			<option value="9">Astronomia</option>
			<option value="10">Biblioteconomia</option>
			<option value="11">Biologia</option>
			<option value="12">Botánica</option>
			<option value="13">Matematicas</option>
			<option value="14">Lengua</option>
			<option value="15">Programacion</option>
			<option value="16">Sociales</option>
			<option value="17">Tecnologia</option>
			<option value="18">Matematicas</option>
			<option value="19">Web Design</option>
			<option value="20">Java</option>
			<option value="21">C</option>
			<option value="22">Economia</option>
			<option value="23">Derecho</option>
			<option value="24">Medicina</option>
			
		</select>
		<button type="button" class="btn-minimal" id="addEtiqueta">Añadir Etiqueta</button>
		<button type="button" class="btn-minimal" id="clearEtiqueta">Limpiar</button>
		</div>
		<div id="tag"></div>
		<button type="submit" name="realPreg" class="btn-minimal" style="margin-top:30px;">Realizar Pregunta</button>
	</form>
	</section>

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
					            <li><a tabindex="1" href="IndexInicial.php">Ayuda</a></li>
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
					                <li><a tabindex="1" href="IndexInicial.php">Ayuda</a></li>
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
		
		<script>
		$(document).ready(function(){
			//añade los tags a la pagina web
			var cont=0;
			var etiqs=[];
			var nombre=$("#Tags option:selected" ).text();
			var aux=true;
			var a;
			$("#Tags").change(function(){
				nombre=($("#Tags option:selected" ).text());
			});
			$('#addEtiqueta').click(function(){
				if(etiqs.length>0){
					for(var i=0;i<etiqs.length;i++) {
						if(nombre===etiqs[i]){
							aux=false;
							alert("La etiqueta está repetida");
							break;
						}
					}
				}
				if(aux){
					if(cont<5){
						$('#tag').append('<span class="label label-primary">'+nombre+'</span>');
						etiqs[cont]=nombre;
						//paso el array de etiquetas como string a php
						a=etiqs.join(',');
						//pongo la variable en una cookie
						document.cookie='var='+a;
						cont+=1;
						aux=true;
					}
					else{
						alert("Solo se pueden poner 5 etiquetas como máximo");
					}
				}
				aux=true;
			});
			$('#clearEtiqueta').click(function(){
				$("#tag").empty();
				etiqs=[];
				cont=0;
				aux=true;
			});
		});
		</script>
		
		<?php
		//include_once "conexion.php";
	//Comprobar que el usuario esta logueado
	if(!isset($_SESSION["userid"])){
		print("<script>
			$(document).ready(function(){
			  $('#nav').after('<div class=\"alert alert-danger\" role=\"alert\" ");
	    print("><strong><p>Es necesario estar logueado para realizar una pregunta</p></strong></div>');}
		     );");
		print ("
		</script>");
	}
    else{
	   if(isset($_POST['realPreg'])){
		
			$usuario = $_SESSION["userid"];
			$titulo = $_POST['titulo'];
			$contenido = $_POST['content'];
			//$etiquetas = array($et1 => $_POST['label']);
			//print 'Las etiquetas son:'.$etiquetas;
			//El formato de la pregunta es este
			/*INSERT INTO pregunta (Título_de_la_Pregunta,Fecha_de_Creación,Descripción,Usuario_idUsuario,Etiqueta_Nombre_de_Etiqueta) 
			        VALUES ('Titulo de Preg',CURRENT_TIMESTAMP,'Eeeeeee','Correcaminos','Astronomía')*/
			
			//consigo los datos de las etiquetas desde la cookie
			$vara=$_COOKIE["var"];
			//los separo en un array
			$etiquetas=explode(",",$vara);
			
			//Borrar una vez que funcione
			//print "El string entero es ".$vara;
			for($i=0;$i<count($etiquetas);$i++){
				//print "etiqs ".$etiquetas[$i];
			}
			
			//print 'El usuario es '.$usuario;
			
			$sql = "INSERT INTO `aplicacionesweb`.`pregunta` (`Titulo`,`Hora`,`Votos`,`Descripcion`,`Usuario_idUsuario`) \n" 
			       . " VALUES ('$titulo',CURRENT_TIMESTAMP,'0','$contenido','$usuario')";
										
			$insert = mysqli_query($dbc,$sql) or die (mysqli_error());		
			/*foreach($etiquetas as $eti){
				<div class="alert alert-success" role="alert" id="bienvenida">
			        <p>Bienvenido </p><strong>'.$_POST['username'].'</strong>
					</div>';	
			
			}*/
			/*print '<div class=\"alert alert-success\" role=\"alert\">
				   <p>Has realizado correctamente la pregunta</p>
				   </div>';*/
			$id = mysqli_query($dbc,"SELECT MAX(idPregunta) FROM pregunta");
			$row = mysqli_fetch_array($id, MYSQLI_NUM);
			$idP = $row[0];
            
            /*print 'El máximo id es '.$id;*/			
			for($i=0; $i < count($etiquetas);$i++){
				$aux = $etiquetas[$i];
				$sql2 = "INSERT INTO pregunta_has_etiqueta (Pregunta_idPregunta,Etiqueta_Nombre) VALUES ($idP,'$aux')";
				$resultado = mysqli_query($dbc,$sql2);
			}
		    print("<script>
			      $(document).ready(function(){
			      $('body').after('<div class=\"alert alert-success\" role=\"alert\" ");
	        print("><strong><p>Has realizado correctamente la pregunta</p></strong><br><br><br></div>');}
		     );");
		    print ("
		    </script>");
		
		}		
    }	
	?>
		
</body>
</html>