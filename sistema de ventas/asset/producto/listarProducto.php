<?php
//include "../header.php";
include $_SERVER['DOCUMENT_ROOT'].'/sistema de ventas/header.php';
?>
<link rel="stylesheet" href="/sistema de ventas/asset/estilos/style.css">
<table class=""table">
    <thead>
        <tr>
            <th>Descripcion:</th>
            <th>Categoria:</th>
            <th>Precio:</th>
            <th>Marca:</th>
            <th>Proveedor:</th>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php

        $producto_sql =mysqli_query($conectador,"SELECT * FROM producto");
        if ($producto_sql) {
        while($producto=mysqli_fetch_array($producto_sql))

        {
        ?>
        <tr>
            <td><?php echo $producto[1];?></td>
            <td><?php echo $producto[2];?></td>
            <td><?php echo $producto[3];?></td>
            <td><?php echo $producto[4];?></td>
            <td><?php echo $producto[5];?></td>
            <td> <img src="asset/img/productos/<?php echo $producto[6];?>" alt="" style="width: 100px; height: 100px;"></td>

            <td>
                <button><a href=">Editar</a></button>
                <button><a href=">EliminarProducto.php?id=<?php echo $producto[0]?>">Eliminar</a></button>
            </td>
        </tr>
        <?php
        }
    } else {
        echo "<tr><td colspan='7'>No se encontraron productos</td></tr>";
    }
        ?>

     
    </tbody>
    </table>


<?php
//include "../footer.php";
include $_SERVER['DOCUMENT_ROOT'] . '/sistema de ventas/footer.php';
?>