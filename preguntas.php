<?php 
    include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--[endif]-->
	<meta charset="UTF-8">
	<!--mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DoubsClass</title>
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
		                <li><a href="registro.php">Registro</a></li>
		            </ul>
		        </li>
		    </ul>
        </div><!--container-fluid-->
    </header>
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
		        <li><a href="#" id="navbar-realizar_pregunta">Realizar Pregunta
		            </a></li>
		        <li class="dropdown">
		            <a href="#" data-hover="dropdown" data-delay="1000" data-close-others="false">Login
		            <span class="caret"></span>
		            </a>
		            <ul class="dropdown-menu" id="login-menu">				    
						<form action="login.php" method="post" class="minimal">
							<label for="username">
							Username:
								<input type="text" name="username" id="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
							</label>
							<label for="password">
							Password:
								<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
							</label>
							<button type="submit" name="enviarLogin" class="btn-minimal">Sign in</button>
						</form>
				    </ul>
		        </li>
		        <li><a href="registro.php">Registro</a></li>
		    </ul>

		</div> <!--container-fluid-->
	</header>
	<!--LA CHICHA-->
	<?php
		//Realizamos una consulta a la bbdd de las últimas preguntas
		//Imprimimos blockquotes
	  //Esta consulta me muestra las preguntas hechas hoy. Titulo y Usuario
	  $sql = 'SELECT Titulo,Fecha,Votos,Descripcion,Usuario_idUsuario,Hora,idPregunta FROM pregunta';
	  //$sql = 'SELECT Titulo,Fecha,Votos,Descripcion,Usuario_idUsuario,Hora FROM pregunta WHERE idPregunta='.$id;
	  $res = mysql_query($sql) or die ('Consulta fallida: '.mysql_error());
	  $horaActual = 'SELECT TIMESTAMP(NOW());';
	  $resHA = mysql_query($horaActual);
	  print'
	  <div class="container-fluid" id="cuerpo">
	    <ul class="nav nav-tabs nav-justified">
	      <li role="presentation" class="active">
	         <a href="#">Preguntas Recientes</a>
			 <p></p>';
			 while($result = mysql_fetch_array($res,MYSQL_ASSOC)){
			// echo 'En el bucle';
			//print 'El valor de resHA es '.$resHA.
			$datetime1 = new DateTime((string)$resHA['TIMESTAMP(NOW())']);
			$datetime2 = new DateTime((string)$result['Hora']);
			$interval = $datetime2->diff($datetime1)->d;
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
		if($interval > 0){
        print       'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> hace '.$interval.' dias
		';}
		//Caso en el que se publique el mismo dia
        if($interval == 0){
		    //Mirar las horas
			$nuevoInterval = $datetime2->diff($datetime1)->h;
			if($nuevoInterval > 0){
		print       'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> hace '.$nuevoInterval.' horas
		';}
		    else{
			 //Mirar los minutos
			 $nuevoIntMinutos = $datetime2->diff($datetime1)->i;
			 if($nuevoIntMinutos > 0){
					if($nuevoIntMinutos > 1){
		print		'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> hace '.$nuevoIntMinutos.' minutos
		';}
					else{
					'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> hace 1 minuto
		';}
			 }else{
			 //Mirar los segundos
			 $nuevoIntSeg = $datetime2->diff($datetime1)->s;
		print		'Realizada por <a href="#">'.$result['Usuario_idUsuario'].'</a> hace '.$nuevoIntSeg.' segundos
        ';}
		   }
		}		
		print   '</div>
		';
		print '</div>
		';
		     }//Fin del while
	print'</li>
	    </ul>
	  </div>';
 
	?>
	<!--FIN LA CHICHA-->
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
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://dl.dropboxusercontent.com/u/64804488/bootstrap-hover-dropdown.min.js"></script>

</body>
</html>