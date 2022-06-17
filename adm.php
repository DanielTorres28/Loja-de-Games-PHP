<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
	
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
	margin-top:20%;
	font-family: sans-serif;
}
	
</style>
	
	
</head>

<body>
	
<?php
	
	session_start();
	// se a sessão id estiver vazia ou se a sessão status  for diferente de adm então execute 
	if(empty($_SESSION['Status'])|| $_SESSION['Status'] != 1){
		header('location:index.php'); //será redirecionado para a página login
	}
	
	include 'conexao.php';	
	include 'nav.php';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Área administrativa</h2>
				
				
				<a href="FormProduto.php">			
				<button type="submit" class="btn btn-block btn-lg btn-primary">
					
					Incluir Produto
					
				</button>
					
				</a>
				</br>
				
				<a href="lista.php">
				<button type="submit" class="btn btn-block btn-lg btn-warning">
					
					Alterar / Excluir Produto
					
				</button>
				</a>
				</br>
				
				<a href="">
				<button type="submit" class="btn btn-block btn-lg btn-success">
					
					Vendas
					
				</button>
				</a>
				</br>
				
				<a href="sair.php">
				<button type="submit" class="btn btn-block btn-lg btn-danger">
					
					Sair da àrea administrativa
					
				</button>
				</a>
				
				
				
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>