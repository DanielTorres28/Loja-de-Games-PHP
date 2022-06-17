<?php

	//iniciando seção
	session_start();
	
	
	//peguei o parametro [cd] e joguei na variavel [$cd_prod]
	$cd_prod = $_GET['cd'];
	
	
	//destruindo o carrinho que contenha o produto
	unset($_SESSION['carrinho'][$cd_prod]);
	
	//retornando para a pagina carrinho 
	header ('location:carrinho.php');
?>