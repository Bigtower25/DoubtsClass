<?php
	define('DB_SERVER','localhost');
	define('DB_NAME','aplicacionesWeb');
	
	$con = mysql_connect(DB_SERVER,'root','');
	mysql_select_db(DB_NAME,$con);

?>