<?php
//Credenciales de la base de datos
$usuario = "tu_usuario";
$password = "tu_contraseña";
$servidor = "localhost"; 
$basededatos = "nombre_de_tu_base_de_datos";

// Crea la conexión a la base de datos con mysqli_connect()
$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

// Verifica si la conexión fue exitosa
if (!$conexion) {
    die("No se ha podido conectar al servidor de Base de datos: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a la base de datos.";
}

// Cierra la conexión
mysqli_close($conexion);
?>
