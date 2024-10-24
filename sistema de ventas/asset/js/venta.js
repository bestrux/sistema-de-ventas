/*================================================
agregar carrito
=================================================*/
var arregloCarrito=new Array();

function agregarCarrito(){
    let idProducto=document.getElementById("producto").value
    let selectProducto=document.getElementById("producto").value
    //console.log(selectProducto)
    
    let descProducto=selectProducto.options[selectProducto.selectedIndex].text

    let cantidad=document.getElementById("cantidad").value
    arregloCarrito.push({

        id:idProducto,
        descProducto:descProducto,
        cantidad:cantidad
    })
    console.log(arregloCarrito)
}
