<?php
     //nombre del servidor
     $servername = "localhost";
     // nombre de la bd
     $dbname = "esp_data";
     // usuario del servidor
     $username = "root";
     //contraseña del servidor
     $password = "";

function conexion() {
        global $servername, $username, $password, $dbname;
        // Realizar conexión
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Confirmar conexión
        if ($conn->connect_error) {
            die("Conexión fallada: " . $conn->connect_error);
        }
      
        $conn->close();
    }
conexion();


?>
