<!doctype html>
<html>
<head>
<meta charse="utf-8">
<title>Minha Loja - Logon de Usuário</title>

<meta name="viewport" content="width=device-width,initial-scale=1"> <!--Responsavel pelo site ser responsivo -->

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.navbar
{
	margin-bottom: 0;
}

body
{
	background:#191919;
}	

h3
{	
	margin-left:25%;
	color: white;
}

.box input[type = "submit"]{
	border:0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}

.box input[type = "submit"]:hover{
	background: #2ecc71;
}

.box input[type = "button"]{
	margin-left:27%;
}



</style>

</head>

<body>

<?php
include 'conexao.php'; //chamando conexão do banco de dados
include 'nav.php';  //chamando outra página
//include 'cabecalho.html'; //Jumbotron componente para chamar a atenção
?>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
	
<div class="container-fluid"> <!-- para que o layout possa-se redimensionar-->
	
		<div class="row"> <!--criação de uma linha-->
			<div class="col-sm-4 col-sm-offset-4"> <!--criação coluna de 4 posições -->
			<form name="frmusuario" form class="box" action="FormLogon.php" method="post">
			
				
				<h3>Usuário ou senha incorreto!</h3>
				<input type ="submit" name="" value="Tentar Novamente">
				<a href="formusuario.php">
				<input type="button" class="btn btn-lg btn-link" value="Ainda não sou cadastrado">
				</a>
			</form>		
			</div>
		</div>
</div>
<?php include 'rodape.html' ?>

</body>
</html>