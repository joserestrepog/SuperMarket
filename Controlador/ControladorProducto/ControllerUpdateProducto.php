<?php
    $codigo=$_POST['codigoBuscar']; 
     $descripcion=$_POST['descripcion']; 
     $precio=$_POST['precio']; 
     $cantidad=$_POST['cantidad']; 
     $fecha_ingreso=$_POST['fechaIngreso']; 
     $fecha_vencimiento=$_POST['fechaVencimiento']; 
     include '../../Modelo/Servicios.php';
     
     $result=editarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento);
     if($result=="OK"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Se actualizó el producto.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Inventario\ModuloInventarioActualizar.html"); 
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al actualizar el producto.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Inventario\ModuloInventarioActualizar.html"); 
     }
?>