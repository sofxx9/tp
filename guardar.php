<?php
include "conexion.php"; 

$nombre = $_REQUEST ["nombre"]; 
$contrasena = password_hash( $_REQUEST ["contrasena"]);
$fecha= $_REQUEST ["fecha"]; 

$SQL = "INSERT INTO usuario (nombre, contrasena, fecha) VALUES ('$nombre','$contrasena', '$fecha')"; 

$con->query ($SQL); 

?>