<?php 
include 'parts/body_start.php';
include 'parts/nav.php';

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Usuario
</button>
<?php 
include './modal/modal_agregar_usuario.php';
?>

<!-- JavaScript para procesar el formulario -->
<script src="./js/guardar_usuario.js"></script>


<!-- INICIO TABLA -->

<div class="container mt-4">
    <h2>Tabla de Usuarios</h2>
    <!-- Campo de búsqueda -->
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Buscar...">

    <!-- Tabla -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono Principal</th>
                <th>Teléfono Emergencia</th>
                <th>Documento de Usuario</th>
                <th>Nacionalidad</th>
                <th>Rol</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Aquí se cargarán los datos de la tabla -->
        </tbody>
    </table>
</div>

<!-- Incluir Bootstrap y jQuery (necesario para algunos componentes de Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script personalizado para carga y filtrado de datos -->
<script src="./js/carga_filtro_usuario.js"></script>