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
<script src="jquery.mask.js"></script>
	
	
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
	margin-left:20%;
	font-family: sans-serif;
}

label
{
	color:white;
}



.box{
	width: 400px;
	padding: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	bottom: 50%;
	transform: translate(-50%,-50%);
	background: #191919;
	text-align: center;
	margin-top: 200;
}


.box input[type = "text"],.box input[type= "password"],.box input[type= "email"],.box input[type= "textarea"]{
	border:0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid#3498db;
	padding: 20px 20px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}	

.box input[type = "text"]:focus,.box input[type= "password"]:focus,.box input[type= "email"]:focus,.box input[type= "textarea"]:focus{
	width: 280px;
	border-color: #2ecc71;
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
	
<script>
	
$(document).ready(function(){
    $("#cep").mask("00000-000");
});
	
	
</script>
	
</head>
	
	
	


<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav.php';
	
	?>
	
	</br>
	</br>
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Cadastro de novo Cliente</h2>
	
				
				<form method="post"  form class="box" action="inserirusuario.php" name="logon">
				
					<div class="form-group">
				
						<label for="nome">Nome</label>
						<input name="txtnome" type="text" class="form-control" required id="nome">
					</div>		
					
					
				<div class="form-group">
				
						<label for="email">E-mail</label>
						<input name="txtemail" type="email" class="form-control" required id="email">
				</div>
					
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha">
				</div>
					
				<div class="form-group">
				
						<label for="endereco">Endereço</label>
						<input name="txtendereco" type="textarea" class="form-control" required id="endereco">
				</div>
					
					
				<div class="form-group">
				
						<label for="cidade">Cidade</label>
						<input name="txtcidade" type="text" class="form-control" required id="cidade">
				</div>
					
					
				<div class="form-group">
				
						<label for="cep">CEP</label>
						<input name="txtcep" type="text" class="form-control" required id="cep">
				</div>
				
							
				<input type="submit" name="" value="Cadastrar">
				
				</form>
							
			</div>
		</div>
	</div>
	
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<?php include 'rodape.html' ?>
	
</body>
</html>