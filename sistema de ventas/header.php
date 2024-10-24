<?php
require_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munu de navegacion</title>
    <link rel="stylesheet" href="<?php echo $base_url;?>asset/estilos/style.css">
    <script src="asset/js/producto.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">inicio</a></li>
                <li><a href="<?php echo $base_url;?>MenuProducto.php">productos</a></li>
                <li><a href="<?php echo $base_url;?>MenuVentas.php">ventas</a></li>
                <li><a href="">ingreso</a></li>
                <li><a href="">personal</a></li>

            </ul>
        </nav>
    </header>
</html>

