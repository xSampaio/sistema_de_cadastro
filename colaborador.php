<?php
	session_start();
	include_once("menu.inc");
	echo "Bem vindo " . $_SESSION['usuarioNome']." <br>Usuario de <b>nivel colaborador</b> a nosso sistema de cadastro";	
?>
