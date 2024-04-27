function guardarUsuario() {
    // Obtener los datos del formulario
    const formData = new FormData(document.getElementById('userForm'));

    // Enviar los datos mediante AJAX (por ejemplo, usando fetch)
    fetch('includes/guardar_usuario.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (response.ok) {
        alert('Usuario agregado correctamente.');
        document.getElementById('userForm').reset(); // Limpiar el formulario
        $('#exampleModal').modal('hide'); // Cerrar el modal
      } else {
        throw new Error('Error al agregar usuario.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error al agregar usuario. Por favor, inténtalo de nuevo.');
    });
  }