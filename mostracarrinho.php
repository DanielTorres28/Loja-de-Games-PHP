<style>	
	h1
	{
		color:white;
		font-family: sans-serif;
	}
	
	
	h4
	{
		color:white;
		font-family: sans-serif;
		margin-top:5%;
	}
</style>



<div class="container-fluid">
	
	<div class="row text-center" style="margin-top: 15px;">
		<h1>Carrinho de Compras</h1>
	</div>
	
	
	<?php
	
	$total = null; // variavel total que recebe valor nulo
	
	//se não houver a sessão carrinho exiba ela  mesmo vazia
	if(!isset($_SESSION['carrinho'])){
		$_SESSION['carrinho'] = array();
	}

    // criando um loop para sessão carrinho recebe o $cd e a quantidade
    foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $cn->query("SELECT * FROM tbl_produto WHERE cd_produto='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $produto = $exibe['nm_produto'];  // variável que recebe o livro
    $preco = number_format(($exibe['vl_produto']),2,',','.'); // variável que recebe o preço
    $total += $exibe['vl_produto'] * $qnt; // variável que recebe preço * quantidade
	
	?>
	
	
	
	
	
	<div class="row" style="margin-top: 15px;">
		
		
		
		<div class="col-sm-1 col-sm-offset-1">
			<img src="imagens/<?php echo $exibe['ds_img']; ?>" class="img-responsive">
		</div>
		
		
		<div class="col-sm-4">
			<h4 style="padding-top:20px"><?php echo $produto ; ?></h4>
		</div>	
		
		
		<div class="col-sm-2">
			<h4 style="padding-top:20px">R$ <?php echo $preco; ?></h4>
		</div>		
		<div class="col-sm-2" style="padding-top:20px">
			<h4><?php echo $qnt; ?> </h4>
		</div>
		
		<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
		
		<!--remove o item do carrinho pelo codigo -->
		<a href="removeCarrinho.php?cd=<?php echo $cd;?>">	
		<button class="btn btn-lg btn-block btn-danger">
		<span class="glyphicon glyphicon-remove"></span>		
		</button>
			</a>
		</div> 
				
	</div>	
	
	
	<?php } ?>