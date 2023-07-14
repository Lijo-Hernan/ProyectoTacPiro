<?php
$dni = $_POST ["dni"];
$apellido = $_POST ["apellido"];
$nombre = $_POST ["nombre"];
$email = $_POST ["email"];
$texto = $_POST ["texto"];

$mensaje = "Enviado por". $nombre . $apellido . $dni . ",\r\n";
$mensaje = "Email". $email . ",\r\n";
$mensaje = "escribio" . $texto . ",\r\n";
$mensaje = "Enviado el" . date("d/m/Y" . time ());

$destino = "tac.pirovano@gmail.com"
$asunto = "mensaje desde la pagina"

mail ($destino, $asunto, utf8_decode($mensaje), $header);

header ("Location:exito.html");



?>