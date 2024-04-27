<?php 
include 'parts/body_start.php';
include 'parts/nav.php';
echo 'contenido 1';
?>
<div class="container mt-4">
    <h2>Tabla con Buscador</h2>
    <!-- Campo de búsqueda -->
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Buscar...">
    
    <!-- Tabla -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
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

<!-- Script personalizado para búsqueda en tiempo real -->
<script>
    $(document).ready(function(){
        // Manejar el evento de cambio en el campo de búsqueda
        $('#searchInput').on('keyup', function(){
            var searchText = $(this).val().toLowerCase();
            // Filtrar filas de la tabla basadas en el texto de búsqueda
            $('#tableBody tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
    });
</script>
