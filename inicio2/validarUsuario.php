<?php
    function validarUsuario($usuarioIngresado, $passwordIngresado, $conexion)
    {
        // Preparamos la consulta para buscar el usuario
        $sql = "SELECT password FROM usuarios WHERE usuario = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $usuarioIngresado);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verificar si el usuario existe
        if ($resultado->num_rows === 0) {
            return false; // Usuario no encontrado
        }

        $row = $resultado->fetch_assoc();
        $passwordHashGuardado = $row['password'];

        // Verificar la contraseña con password_verify
        if (password_verify($passwordIngresado, $passwordHashGuardado)) {
            header("Location: principal.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>
