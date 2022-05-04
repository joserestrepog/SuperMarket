<?php
    include 'conexion.php';
    public function prueba(){
        $schema = '"ScSuperMarket"';
        $query = "SELECT id_usuario, nombre, rol, fk_id_sucursal, username, contrasena FROM ".$schema.".usuario;";
        
        $consulta = pg_query($conn, $query);
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