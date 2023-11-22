<?php

require('bd.php');

// Variables
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$numero = $_GET['numero'];
$email = $_GET['email'];
$modelSelected = "ok";

try {
    // Query para actualizar
    $query = "UPDATE registros SET
                nombre = '$nombre',
                edad = '$edad',
                numero = '$numero',
                email = '$email',
                modelo = '$modelSelected'
              WHERE id = $id";
    
    $result = mysqli_query($con, $query);

    // Revisamos si se realizó la consulta
    if (!$result) {
        die('Query failed...' . mysqli_error($con));
    }

} catch (Exception $e) {
    echo $e;
}

?>
<!-- 

<script>
  // Redirect to index.html using JavaScript
  window.location.href = "../registros.php";
</script> -->