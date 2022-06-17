<!doctype html>
<html>
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
		margin-top:20%;
	}
	
</style>
	
	
</head>

<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav.php';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Compra efetuada com sucesso!! Seu número de registro é: <?php echo $ticket; ?></h2>				
							
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
			
			<a href="index.php">
			<input type="button" class="btn btn-lg btn-link" value="voltar para a página inicial">
			</a>
			
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
</body>
</html>