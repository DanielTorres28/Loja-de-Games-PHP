<?php
include 'conexao.php';

session_start(); //Iniciando uma sessão

//vai receber um email e senha
$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

//Verificar se os Dados estão chegando
//echo $Vemail.'<br>';
//echo $Vsenha.'<br>';

//vai consultar o banco de dados
$consulta = $cn->query("select cd_usuario, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email ='$Vemail' and ds_senha = '$Vsenha'");


if($consulta->rowCount() == 1){ //rowCount verifica se o usuario existe ou não
	//echo'usuario Está Cadastrado';
	$exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
	
	if($exibeUsuario['ds_status'] == 0){
		$_SESSION['ID'] = $exibeUsuario['cd_usuario'];
		$_SESSION['Status']=0;	
		header ('location:index.php');
	}
	else{
		$_SESSION['ID'] = $exibeUsuario['cd_usuario'];
		$_SESSION['Status']=1;	
		header ('location:index.php');
	}
}
else{
	//echo'usuario Não Cadastrado';
	header ('location:erro.php');
}
?>