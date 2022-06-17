<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
	
	body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background: #191919;
	
	}
	
	h2
	{
		color:white;
		font-family: sans-serif;
		margin-top:5%;
	}
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	if(empty($_SESSION['ID'])){
		header("location:FormLogon.php");
		
	} 
	
	include 'conexao.php';	
	include 'nav.php';
	
	$cd_Usuario = $_SESSION['ID'];
	
	$consultaVenda = $cn->query("select * from  vw_Venda where cd_cliente = '$cd_Usuario' group by no_ticket");
	
	?>
	
<div class="container-fluid">
	
	<div class="row"  style="margin-top: 15px; margin-bottom:2%">
		<h2 class="text-center">Minhas Compras</h2>
	</div>
	
	<div class="row"  style="margin-top: 15px; color:white; font-family: sans-serif; margin-left:40%;">
		
		<div class="col-sm-1 col-sm-offset-1"> Data </div>
		<div class="col-sm-2"> Ticket </div>
	
	</div>		
	
	<?php while($exibeVenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)){ ?>
	<div class="row"  style="margin-top: 15px; color:white; font-family: sans-serif; margin-left:40%;">
		
		<div class="col-sm-1 col-sm-offset-1"> <?php echo date ('d/m/Y',strtotime($exibeVenda['dt_venda']));?></div>
		<div class="col-sm-2"><a href="ticket.php?ticket=<?php echo $exibeVenda['no_ticket'];?>"><?php echo $exibeVenda['no_ticket'];?></a></div>		
	</div>		
	
	<?php } ?>
</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>