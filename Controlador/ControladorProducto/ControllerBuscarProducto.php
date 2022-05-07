<?php
    $codigo=0;
    $codigo=$_POST['codigoBuscar'];  
    include '../../Modelo/Servicios.php';
        $result[0]="";
        $result[1]="";
        $result[2]="";
        $result[3]="";
        $result[4]="";
    $result=buscarProducto($codigo);

    if(is_array($result) && $result!=null){
        

        $result[0];
        $result[1];
        $result[2];
        $result[3];
        $result[4];

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