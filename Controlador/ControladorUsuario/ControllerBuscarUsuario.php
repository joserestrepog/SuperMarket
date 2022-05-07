<?php
    $codigo=$_POST['codigoBuscar'];  
    include '../../Modelo/Servicios.php';
    $result=buscarUsuario($codigo);

    $busqueda_nombre = $result[0];
    $busqueda_= $result[1];
    $busqueda_= $result[2];


    if(is_array($result) && $result!=null){
        echo $result[0];
        echo $result[1];
        echo $result[2];
        echo $result[3];
    }
    else{
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("No existe este usuario.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Colaboradores/ModuloColaboradorBuscar.html");
    }
?>