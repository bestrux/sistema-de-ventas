<?php
$host = "localhost";
$usuarioBD = "root";
$passwordBD = "";
$bd = "sistema_almacen";


$conectador = mysqli_connect($host, $usuarioBD, $passwordBD, $bd);

// // Verifica la conexión
 if (!$conectador) {
     die("Conexión fallida: " . mysqli_connect_error());
 } else {
//     echo "Conexión exitosa a la base de datos '$bd'";
 }

//ruta absoluta
$base_url="http://localhost/sistema_almacen";
