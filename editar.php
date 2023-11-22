<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <div class="container">
        <?php 

         // Establish a connection to the database
         require ('php/bd.php');

         $id = $_POST['id'];

      
         // Fetch data from the database
         $sql = "SELECT id, nombre, telefono, email, modelo, fecha, edad FROM registros WHERE id = $id";
         $result = $con->query($sql);


         // Check if a record is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['modelo'];
        echo "<form action='php/edit.php'  class='formulario'>";
        echo   " <input type='text' hidden name='id' id='id' value='" . $id . "'>";
        echo "<input type='text' name='nombre' id='nombre' value='" . $row['nombre'] . "'>";
        echo   "<label for='edad'>Edad</label>";
        echo   "<input type='text' name='edad' id='edad' value='" . $row['edad'] . "'>";
        echo   " <label for='numero'>Numero de Teléfono</label>";
        echo   " <input type='text' name='numero' id='numero' value='" . $row['telefono'] . "'>";
        echo   " <label for='email'>Correo Electrónico</label>";
        echo   " <input type='text' name='email' id='email' value='" . $row['email'] . "'>";

        echo    "<label for='cars'>Auto de interés:</label>";
         echo"   <select name='cars' id='cars'>";
         echo"       <option value='null' selected disabled>Seleccione uno</option>";
         echo"       <option value='kia'>Kia</option>";
          echo"      <option value='ford'>Ford</option>";
          echo"      <option value='nissan'>Nissan</option>";
         echo"   </select>";

         echo"   <label for='models' name='modelSelected'>Modelo de interés:</label>";
         echo"   <select id='models'>
         <option value='".$row['modelo']."' selected disabled>" . $row['modelo'] . "</option></select>";
         echo"   <br><br>";
         echo"   <input type='submit' value='Actualizar'>";
       echo" </form>";
    }
        ?>
    </div>
    <script src="js/index.js"></script>

</body>

</html>