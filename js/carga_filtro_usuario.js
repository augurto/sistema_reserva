
    $(document).ready(function(){
        // Función para cargar y mostrar los datos de la tabla de usuarios
        function cargarUsuarios() {
            // Hacer una solicitud AJAX para obtener los datos de la tabla de usuarios
            $.ajax({
                url: 'includes/obtener_usuario.php', // URL del script PHP para obtener usuarios
                type: 'GET',
                success: function(response) {
                    // Limpiar el cuerpo de la tabla
                    $('#tableBody').empty();

                    // Iterar sobre los datos recibidos y agregar filas a la tabla
                    response.forEach(function(usuario) {
                        var row = `<tr>
                                        <td>${usuario.ID_Usuario}</td>
                                        <td>${usuario.Nombres}</td>
                                        <td>${usuario.Apellidos}</td>
                                        <td>${usuario.Telefono_Principal}</td>
                                        <td>${usuario.Telefono_Emergencia}</td>
                                        <td>${usuario.Documento_Usuario}</td>
                                        <td>${usuario.Nacionalidad}</td>
                                        <td>${usuario.Rol}</td>
                                        <td>${usuario.Estado_Usuario}</td>
                                        
                                   </tr>`;
                        $('#tableBody').append(row);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar usuarios:', error);
                }
            });
        }

        // Manejar el evento de carga inicial y al realizar cambios en el campo de búsqueda
        $('#searchInput').on('keyup', function(){
            var searchText = $(this).val().toLowerCase();
            // Filtrar filas de la tabla basadas en el texto de búsqueda
            $('#tableBody tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });

        // Cargar y mostrar los datos de la tabla de usuarios al cargar la página
        cargarUsuarios();
    });
