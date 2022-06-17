<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Sparta-Games</title>

<meta name="viewport" content="width=device-width,initial-scale=1"> <!--Responsavel pelo site ser responsivo -->

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text-css">
	.navbar{ margin-bottom: 0;} 
</style>

<style>

body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background: #191919;
	
}

.img 
{
	height: 450px; 
	width: 320px;
}

h3
{
margin-left: 2%;
	color: white;
}

h4
{
	margin-left: 37%;
	color: red;
}
    
</style>

</head>
<body>
	
	<?php 
		
		session_start();
		
		include 'conexao.php'; //chamando conexão do banco de dados
		include 'nav.php';  //chamando outra página
		include 'cabecalho.html'; //Jumbotron componente para chamar a atenção
		
		// Variavel consulta vai receber variavel $cn que receberá o resultado de uma query 
			$consulta = $cn->query(' select cd_produto, nm_produto, vl_produto, ds_img, qt_estoque from vw_produto;');
	?> 
		
	
	<div class="container-fluid">
		<div class="row">
		<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
			<div class="col-sm-3"> <!--Criando Colunas-->
				<img src="imagens/<?php echo $exibe['ds_img'] ?>" class="img-responsive" height="450px" width="320px" style="width:100%">
				
				<div><h3><b><?php echo mb_strimwidth($exibe['nm_produto'],0,30,'...');?></b></h3></div>
				<div><h4>R$ <?php echo number_format ($exibe['vl_produto'],2,',','.');?></h4></div>
				
				<div class="text-center">
					<a href="detalhes.php?cd=<?php echo $exibe['cd_produto']; ?>">
					<button class="btn btn-lg btn-block btn-default">
						<span class="glyphicon glyphicon-info-sign"> Detalhes</span>
					
					</button>
					</a>
				</div>
				
				<div class="text-center" style="margin-top:5px; magin-bottom:5px;">
					<?php if($exibe['qt_estoque'] > 0) { ?>
					
					<a href="carrinho.php?cd=<?php echo $exibe['cd_produto'];?>">
					<button class="btn btn-lg btn-block btn-info">
						<span class="glyphicon glyphicon-usd"> Comprar</span>
					
					</button>
					</a>
					
					<?php } else { ?>
					
					<button class="btn btn-lg btn-block btn-danger" disabled>
						<span class="glyphicon glyphicon-remove-circle"> Indisponível</span>
					
					</button>
					
					<?php } ?>
					
				</div>
				
			</div>
		<?php } ?>
			
		</div><!--fechamento do class row-->
	</div> <!--Fechamento do container fluid-->
<?php	
	include 'rodape.html';
?>
</body> 
</html>
