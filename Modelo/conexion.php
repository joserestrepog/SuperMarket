<?php
   
    $conn = pg_pconnect("host=172.20.10.13 port=5432 dbname=SuperMarket user=postgres password=postgres") or die('No se ha podido conectar: ' . pg_last_error());
    if ($conn){
        $schema = '"ScSuperMarket"';
     }
    
?>