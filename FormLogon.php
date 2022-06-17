<! doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Login do Usuário</title>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<style>

.navbar{
	margin-bottom:0;
	
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
		margin-top:10%;
		margin-left:43%;
		
	}
	
	
	input[type = "button"]{
		
		margin-left:5%;
		
	}


.box input[type = "text"],.box input[type= "password"]{
	border:0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid#3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}	

.box input[type = "text"]:focus,.box input[type= "password"]:focus{
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
	


<body>

<?php
	
	include 'conexao.php';	
	include 'nav.php';
	
?>
	
		</br>
		</br>
		</br>
	<div class="container-fluid"> <!-- para que o layout possa-se redimensionar-->
	
		<div class="row"> <!--criação de uma linha-->
		
			<div class="col-sm-4 col-sm-offset-4"> <!--criação coluna de 4 posições -->
				<form name="frmusuario" form class="box" action="validausuario.php" method="post">
				<h2>Login</h2>
				<input name="txtemail" type ="text" required id="email" placeholder="Email">
				<input name="txtsenha" type ="password" required id="password" placeholder="password">
				<input type ="submit" name="" value="Login">
				</form>
				
				<a href="formusuario.php">
				<input type="button" class="btn btn-lg btn-link" value="Ainda não sou cadastrado">
				</a>
				<a href="esquecisenha.php">
				<input type="button"  class="btn btn-lg btn-link" value="Esqueci minha Senha">
				</a>
											
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
				
</body>
</head>
</html>