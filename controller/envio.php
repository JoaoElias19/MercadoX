<?php

//  Configuracao do formulario Contato

$to      = Config::EMAIL_USER;
$subject = 'Contato - Mano Pipas';
$message = 'Email de ' . $_GET['txtinputnome'] . "\r\n" . $_GET['txtinputarea'];
$destinatario = $_GET['txtinputemail'];

$headers = "From: " . $destinatario;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!!')</script>
<!-- Para ficar na mesma pagina -->
<meta http-equiv="refresh" content="0; url=contato">