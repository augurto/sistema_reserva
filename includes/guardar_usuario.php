<?php
// Verificar si se ha recibido una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefonoPrincipal = $_POST['telefono_principal'];
    $telefonoEmergencia = $_POST['telefono_emergencia'];
    $documentoUsuario = $_POST['documento_usuario'];
    $nacionalidad = $_POST['nacionalidad'];
    $rolUsuario = $_POST['rol_usuario'];
    $contrasena = $_POST['contrasena'];

    // Incluir el archivo de conexión
    require_once('../conexion/connexion.php');

    // Preparar la consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuario (nombres, apellidos, telefono_principal, telefono_emergencia, documento_usuario, nacionalidad, rol_usuario, contrasena)
            VALUES ('$nombres', '$apellidos', '$telefonoPrincipal', '$telefonoEmergencia', '$documentoUsuario', '$nacionalidad', '$rolUsuario', '$contrasena')";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Usuario agregado correctamente";
    } else {
        echo "Error al agregar usuario: " . $conn->error;
    }

    // Cerrar la conexión (opcional en este punto, ya que el script termina aquí)
    $conn->close();
} else {
    echo "Error: Método no permitido";
}
?>
