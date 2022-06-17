<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja- Logon de Usuário</title>

<meta name="viewport" content="width=device-width,initial-scale=1"> <!--Responsavel pelo site ser responsivo -->

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	.navbar{ margin-bottom: 0;} 
	
	
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
		margin-left:12%;
		
	}

.box input[type = "email"]{
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid#3498db;
	padding: 14px 10px;
	width: 250px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}	

.box input[type = "email"]:focus{
	width: 280px;
	border-color: #2ecc71;
}

.box input[type = "submit"]{
	border:0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 30px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}

.box input[type = "submit"]:hover{
	background: #2ecc71;
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
		<div class="col-sm-4 col-sm-offset-4">
			
			<h2>Digite o Email cadastrado na loja</h2>
			
			<form method="post" form class="box" action="enviarEmail.php" name="logon">
				<input name="txtemail" type ="email" required id="email" placeholder="Email">
				<input type ="submit" name="" value="Enviar">
		</div>
	</div>
</div>
		<?php include 'rodape.html'?>
		
</body>
</html>