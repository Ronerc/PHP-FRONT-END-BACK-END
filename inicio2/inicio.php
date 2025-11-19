<?php
//session_start(); // ¡Importante! Iniciar la sesión
//include("inicioo.php");
include("conexion.php");

// Verificar si el usuario está logueado
if (isset($_SESSION['usuario'])) {
    $saludo_bienvenida = "Bienvenido " . htmlspecialchars($_SESSION['usuario']);
} else {
    // Si no está logueado, redirigir o mostrar un mensaje genérico
    $saludo_bienvenida = "Bienvenido/a";
    // O podrías redirigir al login: header("Location: index.php"); exit();
}

// NOTA: Si `inicio.html` es el contenido principal, deberías incluirlo después.
?>