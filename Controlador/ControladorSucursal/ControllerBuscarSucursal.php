<?php
    $codigo=$_POST['codigoBuscar'];  
    include '../../Modelo/Servicios.php';
    $result=buscarSucursal($codigo);


    




    if(is_array($result) && $result!=null){

        echo $result[0];
        echo $result[1];
    }
    else{
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("No existe esta sucursal.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesBuscar.html");
    }   
?>