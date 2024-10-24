<?php

$base_url = 'http://localhost/sistema de ventas/';

// Incluir el archivo de estilo CSS
echo '<link rel="stylesheet" href="' . $base_url . 'asset/estilos/style.css">';


require_once "conexion.php";

//recupera datos de index
// $usuario= $_POST["nomUsuario"];
// $password= $_POST["passUsuario"];
$usuario = mysqli_real_escape_string($conectador, $_POST['nomUsuario']);
$password = mysqli_real_escape_string($conectador, $_POST['passUsuario']);

//consultar a la base de datos
$acceso_sql= mysqli_query($conectador, "SELECT * FROM usuario WHERE login_usuario='$usuario' AND password='$password'");



//var_dump($acceso_sql);
//$acceso=mysqli_fetch_row($acceso_sql);
$acceso = mysqli_fetch_assoc($acceso_sql);
//ojo var_dump($acceso);

if ($acceso){
    // "pagina principal";
    header("Location:panel_principal.php");
    exit;
}else{
    //echo "error no tengo acceso";
    include "index.php";
    echo "<p class='error-acceso'>Error de acceso, intenta de nuevo</p>";
    
}
?>