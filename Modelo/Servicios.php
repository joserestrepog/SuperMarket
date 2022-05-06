<?php
   
        function iniciarSesion($id_usuario, $contrasena){
            $rol="";
            include 'conexion.php';
            $query = "SELECT id_usuario, rol, contrasena FROM $schema.usuario WHERE id_usuario=$id_usuario AND contrasena='$contrasena'";
            $sql = pg_query($conn,$query);
            
            
            if(pg_num_rows($sql) == 0){
                $rol="NOROL";
            }
            else{

                $query2 = "SELECT rol FROM $schema.usuario WHERE id_usuario=$id_usuario AND rol='Administrador'";
                $sql1=pg_query($conn,$query2);
                if(pg_num_rows($sql1) == 0){
                    $rol="Colaborador";
                }
                if(pg_num_rows($sql1)==1){
                    $rol="Administrador";
                }
            }
            pg_close($conn);
            
        return $rol;
        }

        function insertarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento){
            include 'conexion.php';
            $res="";
            $query = "INSERT INTO $schema.producto(id_producto, descripcion, precio, cantidad, fecha_ingreso, fecha_vencimiento) values ($codigo, '$descripcion', $precio, $cantidad, '$fecha_ingreso', '$fecha_vencimiento')";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        function editarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento){
            include 'conexion.php';
            $res="";
            $query = "UPDATE $schema.producto SET id_producto=$codigo, descripcion='$descripcion', precio=$precio, cantidad=$cantidad, fecha_ingreso='$fecha_ingreso', fecha_vencimiento='$fecha_vencimiento' WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        
        function buscarProducto($codigo){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_producto, descripcion, precio, cantidad, fecha_ingreso, fecha_vencimiento FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            while($obj=pg_fetch_object($sql)){
                $obj->id_producto."<br>";
                $obj->descripcion."<br>";
                $obj->precio."<br>";
                $obj->cantidad."<br>";
                $obj->fecha_ingreso."<br>";
                $obj->fecha_vencimiento."<br>"."<br>";
            }
            pg_close($conn);
            return $obj;
        }

        function eliminarProducto($codigo){
            include 'conexion.php';
            $res="";
            $query = "DELETE FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        function insertarUsuario($id_usuario, $nombre, $contrasena, $rol, $sucursal){
            include 'conexion.php';
            $res="";
            $query = "INSERT INTO $schema.usuario(id_usuario, nombre, contrasena, rol, fk_id_sucursal) values ($id_usuario, '$nombre', '$contrasena', '$rol', '$sucursal')";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        function editarUsuario($id_usuario, $nombre, $contrasena, $rol, $sucursal){
            include 'conexion.php';
            $res="";
            $query = "UPDATE $schema.usuario SET id_usuario=$id_usuario, nombre='$nombre', contrasena='$contrasena', rol='$rol', fk_id_sucursal='$sucursal' WHERE id_usuario=$id_usuario";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        function buscarUsuario(){

        }

        function eliminarUsuario($id_usuario){
            include 'conexion.php';
            $res="";
            $query = "DELETE FROM $schema.usuario WHERE id_usuario=$id_usuario";
            $sql = pg_query($conn,$query);
            if (!$sql){
                $res="ERROR";
            }
            else{
                $res="OK";
            }
            pg_close($conn);
            return $res;
        }

        function insertarSucursal($id_sucursal, $nombre, $direccion){
            include 'conexion.php';
            $res="";
            $query = "INSERT INTO $schema.sucursal(id_sucursal, nombre, direccion) values ($id_sucursal, '$nombre', '$direccion')";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        function editarSucursal($id_sucursal, $nombre, $direccion){
            include 'conexion.php';
            $res="";
            $query = "UPDATE $schema.sucursal SET id_sucursal=$id_sucursal, nombre='$nombre', direccion='$direccion' WHERE id_sucursal=$id_sucursal";
            $sql = pg_query($conn,$query);
            $status = pg_result_status($sql);
            if ($status == PGSQL_COMMAND_OK){
                $res="OK";
            }
            else{
                $res="ERROR";
            }
            pg_close($conn);
            return $res;
        }

        function buscarSucursal(){

        }

        function eliminarSucursal($id_sucursal){
            include 'conexion.php';
            $res="";
            $query = "DELETE FROM $schema.sucursal WHERE id_sucursal=$id_sucursal";
            $sql = pg_query($conn,$query);
            if (!$sql){
                $res="ERROR";
            }
            else{
                $res="OK";
            }
            pg_close($conn);
            return $res;
        }
?>