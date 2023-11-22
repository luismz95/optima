<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .btn {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 6px 8px;
      font-size: 16px;
      cursor: pointer;
    }
    
    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
      color: white;
    }

    .btnDel {
      background-color: rgb(255, 41, 30);
      border: none;
      color: white;
      padding: 6px 8px;
      font-size: 16px;
      cursor: pointer;
    }
    
    /* Darker background on mouse-over */
    .btnDel:hover {
      background-color: rgb(225, 65, 65);
    }
    </style>
</head>
<body>

<div class="container">
  <h2>Mis registros</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Modelo</th>
        <th>Fecha</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
 
        <?php

        // Establish a connection to the database
        require ('php/bd.php');


      
        // Fetch data from the database
        $sql = "SELECT id, nombre, telefono, email, modelo, fecha FROM registros";
        $result = $con->query($sql);
  
        // Display data in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["telefono"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["modelo"] . "</td>";
                echo "<td>" . $row["fecha"] . "</td>";
                echo '<td><form action="editar.php" method="post">
                <input type="hidden" name="id" value="' . $row["id"] . '">
                <button type="submit" class="btn">
                    <i class="fa fa-pencil"></i>
                </button>
            </form></td>';
                echo '<td><form action="php/delete.php" method="post">
                <input type="hidden" name="id" value="' . $row["id"] . '">
                <button type="submit" class="btnDel" onclick="return confirm(\'¿Seguro que deseas eliminar este registro?\')">
                    <i class="fa fa-trash"></i>
                </button>
                </form></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
  
        // Close the connection
        $con->close();
        ?>
  
      
    </tbody>
  </table>
</div>

</body>
</html>
