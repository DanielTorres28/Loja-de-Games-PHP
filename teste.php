<! doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
	<title>Mostrar Produtos</title>

</head>
<body>
		<?php
			include 'conexao.php';
			// Variavel consulta vai receber variavel $cn que receberá o resultado de uma query 
			$consulta = $cn->query('select * from vw_produto');
			
			// Variavel $exibe receberá o resultado da consulta em forma de uma matriz tabela
			while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ 
			//while repetição
			
			echo $exibe['nm_produto'].'<br>';
			echo $exibe['vl_produto'].'<br>';
			echo $exibe['ds_categoria'].'<br>';
			echo '<hr>';
			}
		?>

<body>
