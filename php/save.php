<?php
    
    require ('bd.php');
    
    //Variables
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    $numero = $_GET['numero'];
    $email = $_GET['email'];
    $modelSelected = $_GET['modelSelected'];

    
    try {
        //Query para guardar
        $query = "INSERT INTO registros VALUES (
            null,
            '$nombre',
            '$edad',
            '$numero',
            '$email',
            '$modelSelected',
            '2023-11-15'
            );";
        
            $result = mysqli_query($con,$query);
        
                    
            //revisamos si se realizo la consulta
            if(!$result){
                die('Query failed...'.mysqli_error($con));
            }
               
            
        
   
        
        
        } catch (Exception $e) {
        echo $e;
    }
    
    
?>

<script>
  // Redirect to index.html using JavaScript
  window.location.href = "../index.html";
</script>