Avance: 1 (Proyecto Grupal)

📋 Descripción del Proyecto
Este sistema está diseñado para gestionar el taller mecánico, permitiendo el registro de clientes y vehículos. En este primer avance, se presenta la estructura funcional del backend en PHP y la conexión exitosa con la base de datos relacional para el almacenamiento de datos.

🛠️ Tecnologías y Requisitos
Lenguaje: PHP 8.x

Servidor Local: XAMPP / Apache

Base de Datos: MySQL / MariaDB (puerto 3307)

IDE: Apache NetBeans (v17 o superior)

📁 Estructura del Repositorio
Siguiendo los lineamientos de la tarea, el proyecto se organiza así:

/codigo/backend: Contiene los archivos lógicos (conexion.php, login.php).

/codigo/frontend: Archivos de vista (registro_vehiculo.php).

/codigo/sql: Script taller_alp.sql para generar la base de datos taller_alp_db.

/documentacion: Bitácora de actividades, artículo científico y capturas de evidencia.

🚀 Instrucciones de Ejecución
1. Configuración de la Base de Datos
Abra phpMyAdmin.

Cree la base de datos taller_alp_db.

Importe el archivo codigo/sql/taller_alp.sql. Esto creará las tablas de usuarios y vehiculos.

2. Configuración en NetBeans
Coloque la carpeta del proyecto dentro de C:\xampp\htdocs\taller_alp.

Abra el proyecto en NetBeans.

Verifique el archivo conexion.php:

PHP
<?php
$host = "localhost:3307"; // Puerto configurado en su XAMPP
$user = "root";
$pass = ""; 
$db = "taller_alp_db";
$conn = mysqli_connect($host, $user, $pass, $db);
?>
3. Prueba del Sistema
Inicie los módulos de Apache y MySQL en el panel de XAMPP.

Ejecute registro_vehiculo.php desde su navegador (localhost/taller_alp/registro_vehiculo.php).

Al llenar el formulario, deberá aparecer el mensaje de alerta: "Vehículo registrado con éxito".
