<?php
include 'conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$end = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

/*está exibindo o cadastro 

testando variaveis

echo $nome.'<br>';
echo $email.'<br>';
echo $senha.'<br>';
echo $ende.'<br>';
echo $cidade.'<br>';
echo $cep.'<br>';
*/

//vai procurar se existe o email na tabela
$consulta = $cn->query("select ds_email from tbl_usuario where ds_email='$email'");
$exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

//se tiver uma linha com este email vai constar email cadastrado
if($consulta->rowCount() == 1){
	header('location:erro1.php');
}
//se não existir esse email ele poderá ser cadastrado
else{
	$incluir =$cn->query("
		insert into tbl_usuario(nm_usuario, ds_email, ds_senha, ds_status, ds_endereco, ds_cidade, no_cep)
		values('$nome', '$email', '$senha', '0', '$end', '$cidade', '$cep')");
		header('location:ok.php');
		
	
}
?>

<!-- $variavel-->