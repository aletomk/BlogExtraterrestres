<?php

$nombre = $_POST["nombre"];
$mail =	$_POST["correo"];
$genero = $_POST["genero"];
$lugar = $_POST["lugar"];
	
$cuerpo = <<<MAIL
El usuario $nombre, ha reportado un avistamiento en $lugar, de un extraterrestre del genero $genero. <br />	
Información adicional: $_POST[mensaje];
MAIL;

$informacion_adicional = 'MIME-Version: 1.0' . "\r\n"; 
$informacion_adicional .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
$informacion_adicional .= 'From: '.$nombre.'<'.$mail.'>' . "\r\n"; 
$infromacion_adicional .= 'Reply-to: '. $nombre.' <'.$mail.'>'. "\r\n";

	
mail( 'byale99yt11@gmail.com', 'Reporte desde Extraterrestres entre nosotros', $cuerpo, $informacion_adicional );

header( "Location: gracias.html" );
?>