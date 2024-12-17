<?php


$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['email'];
$mensaje=$_POST['mensaje'];


$destinatario="pazbelen.c.1404@gmail.com";
$asunto="solicitud de inscripcion en taller de verano-shuffle Basico";

$carta="De: $nombre /n";
$carta="Whatsapp: $telefono /n";
$carta="Correo: $correo /n";
$carta="Mensaje: $mensaje /n";


mail($destinatario,$asunto,$carta);
header('Location:mensaje-enviado.php');
?>