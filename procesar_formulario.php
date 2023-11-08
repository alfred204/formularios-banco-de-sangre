<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $grupo_sanguineo = $_POST["grupo_sanguineo"];
    $fecha_donacion = $_POST["fecha_donacion"];

    // Aquí puedes realizar acciones como almacenar los datos en una base de datos
    // o realizar cualquier otra operación necesaria.

    echo "Información del donante guardada con éxito.";
}
?>
