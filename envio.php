<?php
 
if($_POST) {
    $nombre = $_POST['name'];
	$email = $_POST['email'];
	$mensaje = $_POST['message'];
    $destinatario="gmitiweb@gmail.com";
    $asunto="Contacto Syslab web";

    $carta="De: $nombre /n";
    $carta="Correo: $email /n";
    $carta="Mensaje: $mensaje";

	mail($destinatario,$asunto,$carta);
 
?>