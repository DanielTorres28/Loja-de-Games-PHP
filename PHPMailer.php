<?php
//exibe é uma variavel de vetor recebe a consulta 
$exibe=$consultaEmail->FETCH(PDO::FETCH_ASSOC);

$recebe_nome=$exibe['nome']; //pega o nome do usuario do email
$recebe_nome=$exibe['senha']; //pega a senha do usuario do email


//incluindo as tres classes que importamos

include 'class.phpmailer.php';
include 'class.smtp.php';
include 'class.PHPMailerAutoload.php';


//criando uma nova classe
$mail= new PHPMailer;

$mail->isSMTP(); //parametro smtp
$mail->CharSet='UTF-8'; //evitando problemas de acentuação
$mail->SMTPDebug=2; //opção 2 significa porta de duas vias lado cliente e servidor
?>