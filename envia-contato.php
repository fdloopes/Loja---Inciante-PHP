<?php

session_start();

require_once("PHPMailerAutoload.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer(); // Cria um novo email

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "aluraloja@gmail.com";
$mail->Password = "12345678,";

$mail->setFrom("alura.php.e.mysql@gmail.com", "Alura Curso PHP e MySQL");
$mail->addAddress("aluraloja@gmail.com");

$mail->Subject = "Email de contato da loja do curso alura";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();
