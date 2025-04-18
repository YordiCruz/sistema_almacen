
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

const articuloscarrito = [];
document.addEventListener("DOMContentLoaded", () => {
    addListeners();
  });
  
  function addListeners() {
    const boton = document.getElementById("agregar");
    boton?.addEventListener("click", agregar); // el ? evita error si no existe el botón
  }
  
  function agregar() {
    const cliente = document.getElementById("cliente");
    const producto = document.getElementById("producto");
    const cantidad = parseInt(document.getElementById("cantidad").value, 10);  
    const carrito = document.getElementById("tbody");
   const selected = producto.options[producto.selectedIndex];
   const precio = selected.dataset.precio;
   // console.warn(precio);
    
    let total = precio * cantidad;
    console.warn(total);
    
    const dato = cliente.options[cliente.selectedIndex].text;
    const valor = cliente.value;
    const dato2 = producto.options[producto.selectedIndex].text;
    const valor2 = producto.value;
    const row = document.createElement("tr");
    row.innerHTML = `<td>${dato}</td><td>${dato2}</td><td>${cantidad}</td>`;
    carrito.appendChild(row);
    articuloscarrito.push(carrito.innerText) ;
    console.warn(articuloscarrito);
    
    //c
        
  }
  

