<?php
include 'conexion.php'; // Usamos la conexión que ya probaste y funciona

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $pass = $_POST['contrasena'];

    // Buscamos al usuario en la tabla que creamos en phpMyAdmin
    $sql = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Si los datos coinciden, nos manda al registro de vehículos
        header("Location: registro_vehiculo.php");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Taller ALP</title>
    <style>
        body { font-family: Arial; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        input { display: block; width: 100%; margin-bottom: 10px; padding: 8px; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Acceso al Taller</h2>
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
