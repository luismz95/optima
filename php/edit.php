<?php
require('bd.php'); // Ajusta la ruta según sea necesario

// Verifica si se proporcionó el ID
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    echo $id;

    // Puedes redirigir a una página de edición con el ID o realizar otras acciones según tus necesidades
    //header("Location: ../edit_page.php?id=" . $id); // Cambia 'edit_page.php' según tu estructura

    //exit();
} else {
    echo "Error al procesar la solicitud";
}
?>
