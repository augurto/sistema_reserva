<?php
// Incluir el archivo de conexión
require_once('../conexion/connexion.php');

// Consulta SQL para obtener datos de la tabla de usuarios
$sql = "SELECT ID_Usuario, Nombres, Apellidos, Telefono_Principal, Telefono_Emergencia, Documento_Usuario, Nacionalidad, Rol_Usuario,Estado_Usuario
        FROM usuario";

$result = $conn->query($sql);

// Crear un array para almacenar los datos de los usuarios
$usuarios = [];

if ($result->num_rows > 0) {
    // Iterar sobre los resultados y agregarlos al array de usuarios
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = [
            'ID_Usuario' => $row['ID_Usuario'],  // Utiliza el nombre correcto del campo de ID de usuario
            'Nombres' => $row['Nombres'],
            'Apellidos' => $row['Apellidos'],
            'Telefono_Principal' => $row['Telefono_Principal'],
            'Telefono_Emergencia' => $row['Telefono_Emergencia'],
            'Documento_Usuario' => $row['Documento_Usuario'],
            'Nacionalidad' => $row['Nacionalidad'],
            'Rol' => ($row['Rol_Usuario'] == 0) ? 'Trabajador' : 'Administrador', // Convierte el valor numérico del rol a texto
            'Estado' => $row['Estado_Usuario']
        ];
    }
    
}

// Cerrar la conexión (opcional en este punto, ya que el script termina aquí)
$conn->close();

// Devolver los datos de usuarios como JSON
header('Content-Type: application/json');
echo json_encode($usuarios);
?>
