<?php
$destino = "anyelizrico@gmail.com";
$nombre = $_POST['empresa'];
$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensajes'];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino, "Contacto_Web", $contenido);
header("Location: mensaje_enviado.html")
 ?>
