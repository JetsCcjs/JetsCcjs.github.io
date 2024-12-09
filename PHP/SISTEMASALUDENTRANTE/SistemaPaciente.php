<?php
session_start(); // Inicia la sesión

// Recupera los datos de la sesión
$cedula = isset($_SESSION['Cedula']) ? htmlspecialchars($_SESSION['Cedula']) : 'No se encontró cédula';
$password = isset($_SESSION['Password']) ? htmlspecialchars($_SESSION['Password']) : 'No se encontró contraseña';

// Opcional: Limpia los datos de la sesión después de usarlos
unset($_SESSION['cedula']);
unset($_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .message {
            text-align: center;
            padding: 20px;
            margin: 50px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="message">
        <p>Cédula: <?php echo $cedula; ?></p>
        <p>Contraseña: <?php echo $password; ?></p>
    </div>

</body>
</html>
