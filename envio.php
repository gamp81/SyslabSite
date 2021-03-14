<?php
 

    $nombre = $_POST['name'];
	$email = $_POST['email'];
	$mensaje = $_POST['message'];
    $destinatario="gmitiweb@gmail.com";
    $asunto="Contacto Syslab web";
    $header="From: $email /r/n";
    $header="To: $destinatario /r/n";
    $header="X-Mailer: PHP/".phpversion();

    $carta="De: $nombre /n";
    $carta="Correo: $email /n";
    $carta="Mensaje: $mensaje";

	$mail=mail($destinatario,$asunto,$carta,$header);
    if ($mail) {
        # code...
        echo "<h3>Mail envio exitosamente</h3>";
    }
 
?>