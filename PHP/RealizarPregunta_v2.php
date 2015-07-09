<?php
	
	session_save_path("C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\scripts\DoubsClassLocal\Sesiones");
	session_start(); //Es obligatorio si quiero mover informacion entre las páginas
	include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--[endif]-->
	<meta charset="UTF-8">
	<!--mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DoubtsClass Realizar Pregunta</title>
	<!--cargar bootstrap desde CDN-->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!--cargar TinyMCE (editor de texto) desde CDN -->
	<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	<!--cargar css basico encabezado y footer-->
	<link rel="stylesheet" type="text/css" href="estilos/bars2.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/login.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/registro.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/preguntas.css" media="all">
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
			<option value="1">Aeronaútica</option> 
			<option value="2">Antropologia</option> 
			<option value="3">Arqueologia</option>
			<option value="4">Arquitectura</option>
			<option value="5">Astronomia</option>
			<option value="6">Biblioteconomia</option>
			<option value="7">Biologia</option>
			<option value="8">Botánica</option>
			<option value="9">Matematicas</option>
		</select>
		<button type="button" class="btn-minimal" id="addEtiqueta">Añadir Etiqueta</button>
		<button type="button" class="btn-minimal" id="clearEtiqueta">Limpiar</button>
		</div>
		<div id="tag"></div>
		<button type="submit" name="realPreg" class="btn-minimal" style="margin-top:30px;">Realizar Pregunta</button>
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
		<!--carga jquery-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/64804488/bootstrap-hover-dropdown.min.js"></script>
		<script type="text/javascript" src=""></script>
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
		include_once "conexion.php";
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
			print "El string entero es ".$vara;
			for($i=0;$i<count($etiquetas);$i++){
				print "etiqs ".$etiquetas[$i];
			}
			
			print 'El usuario es '.$usuario;
			
			$sql = "INSERT INTO `aplicacionesweb`.`pregunta` (`Titulo`,`Fecha`,`Votos`,`Descripcion`,`Usuario_idUsuario`) \n" 
			       . " VALUES ('$titulo',CURRENT_TIMESTAMP,'','$contenido','$usuario')";
										
			$insert = mysql_query($sql) or die (mysql_error());		
			/*foreach($etiquetas as $eti){
				<div class="alert alert-success" role="alert" id="bienvenida">
			        <p>Bienvenido </p><strong>'.$_POST['username'].'</strong>
					</div>';	
			
			}*/
			/*print '<div class=\"alert alert-success\" role=\"alert\">
				   <p>Has realizado correctamente la pregunta</p>
				   </div>';*/
			$id = mysql_query("SELECT MAX(idPregunta) FROM pregunta");
            
            /*print 'El máximo id es '.$id;*/			
			for($i=0; $i <count($etiquetas);$i++){	   
				$sql2 = "INSERT INTO `aplicacionesweb`.`pregunta_has_etiqueta`(`Pregunta_idPregunta`,`Etiqueta_Nombre`)\n"
				        ."VALUES ('$id','$etiquetas[$i]')";
			}
		    print("<script>
			      $(document).ready(function(){
			      $('body').after('<div class=\"alert alert-success\" role=\"alert\" ");
	        print("><strong><p>Has realizado correctamente la pregunta</p></strong></div>');}
		     );");
		    print ("
		    </script>");
		
		}		
    }	
	?>
		
</body>
</html>