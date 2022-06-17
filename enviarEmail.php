<?php
include "conexao.php";

$recebe_email = $_POST['txtemail'];

$consultaEmail = $cn->query("select nm_usuario, ds_email, ds_senha from tbl_usuario where ds_email = '$recebe_email'");

if($consultaEmail->rowCount() == 0){
	header("location:erro3.php");
	
}
else {
	echo "Email já cadastrado";
	
}
?>