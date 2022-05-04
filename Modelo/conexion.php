<?php
   
    $conn = pg_connect("host=192.168.1.150 port=5432 dbname=SuperMarket user=postgres password=postgres") or die('No se ha podido conectar: ' . pg_last_error());

    if ($conn){
        echo "Conexión exitosa"."<br>"."<br>";
    }
    $schema = '"ScSuperMarket"';
    $query = "SELECT id_usuario, nombre, rol, fk_id_sucursal, username, contrasena FROM ".$schema.".usuario;";
    $consulta = pg_query($conn,$query);
    if($consulta){
    while($obj=pg_fetch_object($consulta)){
            echo $obj->id_usuario."<br>";
        echo $obj->nombre."<br>";
        echo $obj->rol."<br>";
        echo $obj->fk_id_sucursal."<br>";
        echo $obj->username."<br>";
        echo $obj->contrasena."<br>"."<br>";
    }
    }
           
 
?>