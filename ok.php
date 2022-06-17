
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
	font-family: sans-serif;
}



.box input[type = "submit"]{
	border:0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid#3498db;
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
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>
				<h2>Usuário Cadastrado com sucesso!!</h2>
				
				
				<form method="post"  form class="box" action="formlogon.php">
				
				<input type="submit" name="" value="Entrar na Loja"></a>
				
				
							
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>
