
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Formulario de Usuario -->
        <form id="userForm">
          <div class="mb-3">
            <label for="inputNombres" class="form-label">Nombres:</label>
            <input type="text" class="form-control" id="inputNombres" name="nombres" required>
          </div>
          <div class="mb-3">
            <label for="inputApellidos" class="form-label">Apellidos:</label>
            <input type="text" class="form-control" id="inputApellidos" name="apellidos" required>
          </div>
          <div class="mb-3">
            <label for="inputTelefono" class="form-label">Teléfono Principal:</label>
            <input type="tel" class="form-control" id="inputTelefono" name="telefono_principal">
          </div>
          <div class="mb-3">
            <label for="inputTelefonoEmergencia" class="form-label">Teléfono de Emergencia:</label>
            <input type="tel" class="form-control" id="inputTelefonoEmergencia" name="telefono_emergencia">
          </div>
          <div class="mb-3">
            <label for="inputDocumento" class="form-label">Documento de Identidad:</label>
            <input type="text" class="form-control" id="inputDocumento" name="documento_usuario" required>
          </div>
          <div class="mb-3">
            <label for="inputNacionalidad" class="form-label">Nacionalidad:</label>
            <input type="text" class="form-control" id="inputNacionalidad" name="nacionalidad">
          </div>
          <div class="mb-3">
            <label for="inputRol" class="form-label">Rol:</label>
            <select class="form-select" id="inputRol" name="rol_usuario" required>
              <option value="0">Trabajador</option>
              <option value="1">Administrador</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="inputContrasena" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="inputContrasena" name="contrasena" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarUsuario()">Guardar</button>
      </div>
    </div>
  </div>
</div>