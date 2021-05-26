<?php
    global $servername, $username, $password, $dbname;
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Revisar si la conexión no se establece
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

?>
