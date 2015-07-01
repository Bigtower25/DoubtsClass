<?php
	define('DB_SERVER','localhost');
	define('DB_NAME','aplicacionesweb');
	
	$con = mysql_connect(DB_SERVER,'root','')
	 or die ('No se pudo conectar: '.mysql_error());
	echo 'Conexión establecida';
	mysql_select_db('aplicacionesweb')
	 or die ('No se pudo seleccionar la base de datos');

?>