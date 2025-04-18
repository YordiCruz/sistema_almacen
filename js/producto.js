
function validar() {
   
    
    const descripcion = document.getElementById("descrip").value;
    const precio = document.getElementById("precio").value;           
    const marca = document.getElementById("marc").value;           
    const proveedor = document.getElementById("prov").value;       
    const categoria = document.getElementById("catego").value;          
    

    if (descripcion == null || descripcion.length == 0) {
        document.getElementById("error-descri").innerHTML = "El campo Descripción es obligatorio";
        return false;
    }else if (categoria == null || categoria.length == 0) {
        document.getElementById("error-cate").innerHTML = "El campo Categoría es obligatorio";
        return false;
    }
    else if (isNaN(precio) || precio.length == 0) {
        document.getElementById("error-precio").innerHTML = "El campo Precio debe ser un numero obligatorio";
        return false;

    }else if (marca == null || marca.length == 0) {
        document.getElementById("error-marca").innerHTML = "El campo Marca es obligatorio";
        return false;
    }else if (proveedor == null || proveedor.length == 0) {
        document.getElementById("error-provee").innerHTML = "El campo Proveedor es obligatorio";
        return false;
    }
        
    return true;
}
