<?php
    $codigo=$_POST['codigoBuscar'];  
    include '../../Modelo/Servicios.php';
    $result=buscarProducto($codigo);
    
    $busqueda_nombre = $result[0];
    $busqueda_precio = $result[1];
    $busqueda_cantidad = $result[2];
    $busqueda_fecha_ing = $result[3];
    $busqueda_fecha_ven = $result[2];



    if(is_array($result) && $result!=null){
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Inventario/BuscarInventario.php");


        echo $result[0];
        echo $result[1];
        echo $result[2];
        echo $result[3];
        echo $result[4];

    }
    else{
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al eliminar el producto.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Inventario/ModuloInventarioBuscar.html");
    }
?>