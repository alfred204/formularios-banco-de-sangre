<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Configura los datos del servidor de correo
    $to = $correo;
    $subject = "Confirmación de Registro";
    $message = "Hola $nombre, ¡gracias por registrarte en nuestro sitio web!";
    $headers = "From: tu-correo@tudominio.com";

    // Envía el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "El correo de confirmación ha sido enviado a $correo.";
    } else {
        echo "Hubo un error al enviar el correo de confirmación.";
    }
}
?>
