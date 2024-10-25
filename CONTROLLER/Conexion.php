<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "gxdeve_apps";
$port = "3306";


//Create_Connection
$Conexion = mysqli_connect($server, $user, $password, $db);

//Check Connection
if (!$Conexion) {
    die("Conexion Fallida: ". mysqli_connect_error());
} else {
//    echo '<script>alert("Conexion Exitosa")</script>';
}
