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
	margin-left:20%;
	color: white;
	margin-top:50%;
}

</style>

</head>

<body>

<?php
include 'conexao.php'; //chamando conexão do banco de dados
include 'nav.php';  //chamando outra página
//include 'cabecalho.html'; //Jumbotron componente para chamar a atenção
?>


	
<div class="container-fluid"> <!-- para que o layout possa-se redimensionar-->
	
		<div class="row"> <!--criação de uma linha-->
			<div class="col-sm-4 col-sm-offset-4"> <!--criação coluna de 4 posições -->
				<h3>Nenhum Produto foi encontrado</h3>
			</div>
		</div>
</div>
<?php include 'rodape.html' ?>

</body>
</html>