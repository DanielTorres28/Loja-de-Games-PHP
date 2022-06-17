	<nav class="navbar-inverse"><!--Editar cor da barra onde aparece as informações de home, lançamentos, categorias-->
  <div class="container-fluid"> <!-- Criação de uma margem-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="https://www.instagram.com/spartaplay145/" target="blank">Sparta-Games</a></a> 
    </div>
	
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
		
        <li><a href="Lancamento.php">Lançamentos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="categoria.php?cat=console PS4">Consoles PS4 <img src="play.png" height="30px" width="30px" style="width:20%"></a></li>
			<li><a href="categoria.php?cat=Jogos PS4">Jogos PS4 <img src="Controlex.png" height="30px" width="30px" style="width:20%"></a></li>
			<li role="separator" class="divider"></li>
            <li><a href="categoria.php?cat=console XBOX ONE">Consoles Xbox <img src="xbox.png" height="30px" width="30px" style="width:20%"></a></li>
            <li><a href="categoria.php?cat=Jogos XBOX ONE">Jogos Xbox-One <img src="Controlex.png" height="30px" width="30px" style="width:20%"></a></li>
			<li role="separator" class="divider"></li>
			<li><a href="categoria.php?cat=PC GAMER">PC Gamer  <img src="pc.png" height="30px" width="30px" style="width:20%"></a></li>
			<li><a href="categoria.php?cat=Gabinete Gamer">Gabinetes PC  <img src="pc.png" height="30px" width="30px" style="width:20%"></a></li>
			<li role="separator" class="divider"></li>
            <li><a href="categoria.php?cat=Mouse Gamer">Mouse Gamer  <img src="mouse.png" height="30px" width="30px" style="width:20%"></a></li>   
			<li><a href="categoria.php?cat=Teclado Gamer">Teclado Gamer  <img src="teclado.png" height="30px" width="30px" style="width:20%"></a></li>  
            <li><a href="categoria.php?cat=Headset Gamer">Headset  Gamer  <img src="Headset.png" height="30px" width="30px" style="width:20%"></a></li>
			<li><a href="categoria.php?cat=Controle Gamer">Controles  <img src="Controlex.png" height="30px" width="30px" style="width:20%"></a></li>
          </ul>
        </li>
      </ul>
	  
	  
      <form class="navbar-form navbar-left" role="search" name="frmpesquisa" method="get" action="busca.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar" name="txtBuscar">
        </div>
        <button type="Submit" class="btn btn-default">Pesquisar</button>
      </form>
	  
      <ul class="nav navbar-nav navbar-right">
	    <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        <li><a href="#">Contato   <height="30px" width="30px" style="width:20%"></a></li>
		
		<?php if (empty($_SESSION['ID'])) {?> <!--se estiver vazio a sessão id mostra menu logon-->
		<li><a href="FormLogon.php"><span class="glyphicon glyphicon-log-in"></span> Logon</a></li>
		<?php } else { //senão estiver vazio a sessão id verifica
			
		if($_SESSION['Status'] == 0) { //se a a sessão status valer 0 mostrar nome do usuário
			$consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
			$exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
			?>
			
			<li><a href="areaUser.php"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['nm_usuario'];?></a></li>
			<li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
		<?php } else { ?> <!--senão a sessão id só pode valer 1, sendo assim criar um botão-->
				<li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
				<li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
				
		<?php } } ?>
			
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


