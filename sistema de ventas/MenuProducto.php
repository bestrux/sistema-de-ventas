<?php
include "header.php";
?>
<link rel="stylesheet" href="/sistema de ventas/asset/estilos/style.css">

<table class="tabla-menu">
    <caption><b> Menu Producto</b></caption>
        <tr>
            <td><img src="asset/img/create.png" alt="" class"img_menu"></td>
            <td><img src="asset/img/buscar.png" alt="" class"img_menu"></td>
            <td><img src="asset/img/lista-de-verificacion.png" alt="" class="img_menu"></td>
        </tr>
        <tr> 
            <td> <a href="/sistema de ventas\asset\producto/FR.egProducto.php">registrar</a> </td>
            <td> <a href="/sistema de ventas\asset\producto/formBuscarProd">Buscar</a></td>
            <td> <a href="/sistema de ventas\asset\producto/listarProducto.php">Listar</a></td>
        </tr>
    </table>
    

<?php
include "footer.php";
?>