<?php
	session_start();
	include_once("menu.inc");
	echo "<center>Bem vindo " . $_SESSION['usuarioNome']." <br>Usuario de <b>nivel administrativo</b> a nosso sistema de cadastro</center>";	
?>