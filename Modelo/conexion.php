<?php
   
    $conn = pg_connect("host=192.168.1.150 port=5432 dbname=SuperMarket user=postgres password=postgres") or die('No se ha podido conectar: ' . pg_last_error());

    if ($conn){
        echo "Conexión exitosa";
    }
    $schema = '"ScSuperMarket"';
    $query = "SELECT nombre FROM ".$schema.".usuario;";
    $consulta = pg_query($conn,$query);
    if($consulta){
        while($obj=pg_fetch_object($consulta)){
            echo $obj->nombre."<br>";
        }
    }
           
 
?>