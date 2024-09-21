<?php
    $servername = "localhost";
    $username = "admin";
    $password = "UGwBCcgJL";
    $dbname = "expedientes-graduacion";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connection){
        die("Connection Failed! ".mysqli_connect_error());
    } 

    function cerrarConexion($enlace){
        mysqli_close($enlace);
    }

?>