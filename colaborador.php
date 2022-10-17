<?php
	session_start();
	include_once("menu.inc");
	echo "Usuario: ". $_SESSION['usuarioNome'];
	
	ECHO "<BR>";
	echo "bem vindo usuario de <b>nivel colaborador</b> a nosso sistema de cadastro";



?>
