<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    // Insertamos los datos en la tabla vehiculos
    $sql = "INSERT INTO vehiculos (placa, marca, modelo) VALUES ('$placa', '$marca', '$modelo')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Vehículo registrado con éxito');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Vehículos - Taller ALP</title>
    <style>
        body { font-family: Arial; padding: 20px; background-color: #e9ecef; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 10px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrar Nuevo Vehículo</h2>
        <form method="POST">
            <input type="text" name="placa" placeholder="Placa (ej: ABC-1234)" required>
            <input type="text" name="marca" placeholder="Marca (ej: Chevrolet)" required>
            <input type="text" name="modelo" placeholder="Modelo (ej: Sail)" required>
            <button type="submit">Guardar Vehículo</button>
        </form>
        <br>
        <a href="login.php">Cerrar Sesión</a>
    </div>
</body>
</html>

