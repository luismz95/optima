<?php
require('bd.php'); // Ajusta la ruta según sea necesario

// Verifica si se proporcionó el ID
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Realiza la eliminación
    $sql = "DELETE FROM registros WHERE id = $id";
    if ($con->query($sql) === TRUE) {
        header("Location: ../registros.php"); // Redirige de vuelta a la página principal
        exit();
    } else {
        echo "Error al eliminar el registro";
    }
} else {
    echo "Error al procesar la solicitud";
}

// Cierra la conexión
$con->close();
?>
<script>
  // Redirect to index.html using JavaScript
  window.location.href = "../registros.php";
</script>