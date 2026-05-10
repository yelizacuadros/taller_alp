<?php
$host = "localhost";
$user = "root";
$db   = "taller_alp_db"; // El nombre que pusimos arriba
$port = 3307;
$pass = ""; // Déjalo vacío si entraste sin clave, o pon '1234' si esa usaste

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "¡Conexión exitosa al sistema del taller!";
}
?>