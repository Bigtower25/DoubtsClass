<?php
    session_save_path("C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\projects\pruebas\DoubtsClass\Sesiones");
	session_start();
	$_SESSION["Acceso"] = time();
	include_once "conexion.php";
	
	function verificar_login($usuario,$contra,&$result){
	   $sql = "SELECT idUsuario,Password FROM usuario WHERE 
			   idUsuario='$usuario' and Password='$contra'";
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
	
  if(!isset($_SESSION["userid"])){
	if(isset($_POST['enviarLogin'])){
		if(verificar_login($_POST['username'],$_POST['password'],$result)==1){
		 $_SESSION["userid"] = $_POST['username'];
		 print '<div class="alert alert-success" role="alert" id="bienvenida">
			        <p>Bienvenido </p><strong>'.$_POST['username'].'</strong>
					</div>';		
		}
		else{
		 /*print '<div class="alert alert-danger" role="alert">
			        <p>El nombre de usuario o contraseña es incorrecto</p> 
				</div>';*/
				header("Location:loginError.php");
		}
	}
  }
  else{
     if(verificar_login($_POST['username'],$_POST['password'],$result)==1){
      $_SESSION["userid"] = $_POST['username'];
	  print '<div class="alert alert-success" role="alert" id="bienvenida">
			   <p>Bienvenido </p><strong>'.$_POST['username'].'</strong>
			   <p>¿Cómo lo llevas pelotudo?</p>
			 </div>';
	}
	else{
	     //header("Location:loginError.php");
		print '<div class="alert alert-danger" role="alert">
			   <p>El nombre de usuario o contraseña es incorrecto</p>
			   </div>';
			   //header("IndexInicial.html");
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
	<title>Seccion Usuario</title>
	<!--cargar bootstrap desde CDN-->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!--cargar css basico encabezado y footer-->
	<link rel="stylesheet" type="text/css" href="estilos/bars2.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/login.css" media="all">
	<link rel="stylesheet" type="text/css" href="estilos/ayuda.css" media="all">
</head>
<body>
 <header class="navbar navbar-inverse navbar-fixed-top" id="nav">
		<div class="container-fluid">
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
				        <a class="navbar-brand" href="#">
					        <img src="images/logo_sin_letras.jpg" alt="logo" width="74" height="40" id="logo">
				        </a>
		    </div><!-- navbar-header-->
			<ul class="nav navbar-nav brand-right" id="navbar-right">
		        <li><a href="RealizarPregunta.php" id="navbar-realizar_pregunta">Realizar Pregunta
		            </a>
				</li>
			</ul>
			<?php
				if(isset($_SESSION['userid'])){
					print '
					<ul class="nav navbar-nav brand-right" id="navbar-right">
						<li><a href="#" id="bienvenido">Bienvenido '.$_SESSION['userid'].'</a>
						</li>				
					</ul>
					<ul class="nav navbar-nav brand-right" id="navbar-right">
					    <li class="dropdown" id="Logeado">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="true">						  
		                   Perfil
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
					</ul>';
				}
				//if(isset($_POST['logout'])){
					//session_destroy();
					//header("Location:IndexInicial.html");
				//}
			?>
		</div>
	</header>	
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
</body>
</html>