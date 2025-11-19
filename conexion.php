<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";  
    $db   = "biblioteca";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        echo "Error de conexión: " . $conn->connect_error;    
    }
?>