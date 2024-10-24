<?php
include "header.php";
?>
<!-- <form action"submit="">
<input type="text" name="txtBus" placeholder="buscar por descripcion o marca" name=search>
<input= -->
<form action="BuscarProd.php" method="post">
    <input type="text" name="txtBus" placeholder="buscar por descripcion o marca" name=search>
    <input type="submit" value="Buscar">

</form>
<?php
include "footer.php";
?>