<?php

define("DB_HOST", "mx102.hostgator.mx");//DB_HOST:  generalmente suele ser "127.0.0.1"
define("DB_NAME", "luisang3_optima");//Nombre de la base de datos
define("DB_USER", "luisang3_admin");//Usuario de tu base de datos
define("DB_PASS", "mSiOudP42EHw");//Contrase�a del usuario de la base de datos


    try {
    # conectare la base de datos
    $con=@mysqli_connect("mx102.hostgator.mx", "luisang3_admin", "mSiOudP42EHw", "luisang3_optima");

    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }

    if (@mysqli_connect_errno()) {
        die("Conexi�n fall�: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

    } catch (\Throwable $th) {
        echo $th;
    }
?>