<?php
include $_SERVER['DOCUMENT_ROOT'].'/sistema de ventas/header.php';
?>
<link rel="stylesheet" href="/sistema de ventas/asset/estilos/style.css">

<form action="registroProducto.php" method="post" class="formulario-row" enctype="multipart/form-data" onsubmit="return validacion();">
        <div class="col-50">
          <label for="">Descripcion</label>
          <input type="text" class"form-control" name="descProducto" id="descProducto">
          <p id="error descripcion" clase="error"></p>

          <label for="">Categoria</label>
          <input type="text" class"form-control" name="catProducto" id="catProducto">
          <p id="error categoria" clase="error"></p>

          <label for="">Precio</label>
          <input type="text" class"form-control" name="preProducto" id="preProducto">
          <p id="error precio" clase="error"></p>

          <input type="button" class="cancelar" value="cancelar">

        </div>
        <div class="col 50">
            <label for="">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca">
            <p id="error marca" clase="error"></p>

            <label for="">Proveedor</label>
            <input type="text" class="form-control" name="proveedor" id="proveedor">
            <p id="error proveedor" clase="error"></p>

            <label for="">Imagen</label>
            <input type="file" class="form-control" name="imgProducto">
            <input type="submit" class="form-control" value="guardar">

        </div>
        
    </form>
    

<?php
//include "../footer.php"
include $_SERVER['DOCUMENT_ROOT'] . '/sistema de ventas/footer.php';
?>
