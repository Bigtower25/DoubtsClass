<?php
	session_save_path("../Sesiones");
	session_start();
	session_destroy();
	header('Location: ../IndexInicial.php');
?>	
