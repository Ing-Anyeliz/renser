<?php

$destino = "ventas@rensercolombia.com.co";
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$nombrepc = $_POST['nombrepc'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];
$otros = $_POST['otro'];
$mensaje = $_POST['mensajes'];
$contenido = "Empresa: " . $empresa . "\nTeléfono: " . $telefono . "\nContácto: " . $nombrepc . "\nCorreo: " . $correo . "\nCargo: " . $cargo . "\nOtros: " . $otros . "\nMensaje: " .$mensaje;
mail($destino, "Contácto vía web", $contenido);
header("Location: mensaje_enviado.html")

 ?>
