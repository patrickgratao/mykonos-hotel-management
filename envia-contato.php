<?php 

require_once("inicia-sessao.php");
require_once("mailer/PHPMailer.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "ppgratao@gmail.com";
$mail->Password = "123456";
$mail->setFrom("ppgratao@gmail.com", "Sistema Mykonos");
$mail->addAdress("patryckgratao@gmail.com");
$mail->Subject = "Email de contato do Mykonos";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	$_SESSION['success'] = "Mensagem enviada com sucesso!";
	header("Location: index.php");
} else {
	$_SESSION['danger'] = "Erro ao enviar mensagem ".$mail->ErrorInfo;
	header("Location: contato.php");
}
die();




