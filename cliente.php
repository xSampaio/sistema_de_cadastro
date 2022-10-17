<?php
	session_start();
	include_once("menu.inc");
	echo "Usuario: ". $_SESSION['usuarioNome'];
	echo "bem vindo usuario Nivel <B>CLIENTE</B> a nosso sistema de cadastro";	
?>
