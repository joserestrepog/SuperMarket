<?php
    #$codigo=$_POST['codigoBuscar'];  
    include '../../Modelo/Servicios.php';
    $result=buscarProducto(1234);
    echo $result->id_producto."<br>";
    echo $result->descripcion."<br>";
    echo $result->precio."<br>";
    echo $result->cantidad."<br>";
    echo $result->fecha_ingreso."<br>";
    echo $result->fecha_vencimiento."<br>"."<br>";
?>