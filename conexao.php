<?php

	$servidor = "Localhost";
	$usuario = "loja";
	$senha = "123456";
	$banco = "LojaGamesdb";
	
	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
		// a vaiavel cn que está efetuando a conexão com o banco de dados

?>