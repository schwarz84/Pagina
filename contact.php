<?php 

$para = "schwarz-fischer@hotmail.com";

$asunto = "Contacto desde la pagina";

$mailheader = "From: ". $_POST['email'] . "\r\n";
$mailheader .= "Reply to: " . $_POST['email'] . "\r\n";
$mailheader .= "Content type: text/html; chartset=utf-8\r\n";

$MESSAGE_BODY = "Nombre: ". $_POST['name'] . "\n";
$MESSAGE_BODY .= "\n<br>Email: ". $_POST['email']. "\n";
$MESSAGE_BODY .= "\n<br> Mensaje: ". nl2br($_POST['message']) . "\n";




mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("No se pudo enviar el Correo");

header('Location:C:\xampp\htdocs\07-ProyectoPractico\Pagina\index.html')

?>