function validacion() {
    var descProducto = document.getElementById("descProducto").value;
    var catProducto = document.getElementById("catProducto").value;
    var preProducto = document.getElementById("preProducto").value;
    var marca = document.getElementById("marca").value;
    var proveedor = document.getElementById("proveedor").value;

    if (descProducto == null || descProducto.length == 0) {
        // alert('[ERROR] El campo debe tener un valor de...');
        document.getElementById("error-descripcion").innerHTML = '[ERROR] El campo descripcion no puede estar vacío';
        return false;
    } else if (catProducto == null || catProducto.length == 0) {
        document.getElementById("error-categoria").innerHTML = '[ERROR] El campo categoria no puede estar vacío';
        return false;
    } else if (preProducto == null || preProducto.length == 0 || isNaN(preProducto)) {
        document.getElementById("error-precio").innerHTML = '[ERROR] El campo precio debe ser un número y no puede estar vacío';
        return false;
    } else if (marca == null || marca.length == 0) {
        document.getElementById("error-marca").innerHTML = '[ERROR] El campo marca no puede estar vacío';
        return false;
    } else if (proveedor == null || proveedor.length == 0) {
        document.getElementById("error-proveedor").innerHTML = '[ERROR] El campo proveedor no puede estar vacío';
        return false;
    } else {
        return true;
    }
}

