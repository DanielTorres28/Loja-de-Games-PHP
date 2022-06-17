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
}

h4
{
	color:white;
	font-family: sans-serif;
}

p
{
	font-family: sans-serif;
}
	
	
</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	
	
	if(empty($_GET['cd'])){
		echo "<html><script>location.href='index.php'</script></html>";
	}
	
	$cd_produto = $_GET['cd'];
	$consulta = $cn->query("select * from vw_produto where cd_produto = '$cd_produto'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	
	?>
	
<div class="container-fluid">
	
	
	
	<div class="row">
		
		<div class="col-sm-4 col-sm-offset-1">
			
			 <h2>Detalhes do Produto</h2>
			 
			 <img src="imagens/<?php echo $exibe['ds_img']?>" class="img-responsive" style="width:100%;">
		
				
			
		</div>
		
				
		<div class="col-sm-7"><h2><?php echo $exibe['nm_produto'];?></h2>
		
		<h4><b>Resumo Produto: </b> <?php echo $exibe['ds_resumo_prod'];?></h4>
		
		<h4><b>Quantidade Estoque: </b> <?php echo $exibe['qt_estoque'];?></h4>
		
		<h4><b>Preço:  </b> R$ <?php echo number_format ($exibe['vl_produto'],2,',','.');?></h4>
			 
		<a href="carrinho.php?cd=<?php echo $exibe['cd_produto'];?>">
		<button class="btn btn-lg btn-success">Comprar</button>
		</a>	
		</div>		
	
</div>

	<?php
	
	include 'rodape.html';
	
	?>

</body>
</html>
