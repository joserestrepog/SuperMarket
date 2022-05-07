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
            
        return $rol;
        }

        function insertarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_producto FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $query2 = "INSERT INTO $schema.producto(id_producto, descripcion, precio, cantidad, fecha_ingreso, fecha_vencimiento) values ($codigo, '$descripcion', $precio, $cantidad, '$fecha_ingreso', '$fecha_vencimiento')";
                $sql = pg_query($conn,$query2);
                $res="OK";                
            }else if(pg_num_rows($sql) == 1){
                $res="ERROR";
            }            
            return $res;
        }

        function editarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_producto FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "UPDATE $schema.producto SET id_producto=$codigo, descripcion='$descripcion', precio=$precio, cantidad=$cantidad, fecha_ingreso='$fecha_ingreso', fecha_vencimiento='$fecha_vencimiento' WHERE id_producto=$codigo";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }
            return $res;
        }

        
        function buscarProducto($codigo){
            include 'conexion.php';
            $res=[];
            $query = "SELECT id_producto FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "SELECT descripcion, precio, cantidad, fecha_ingreso, fecha_vencimiento FROM $schema.producto WHERE id_producto=$codigo";
                while($Row=pg_fetch_assoc($sql)){
                    $res[0]=$Row['descripcion'];
                    $res[1]=$Row['precio'];
                    $res[2]=$Row['cantidad'];
                    $res[3]=$Row['fecha_ingreso'];
                    $res[4]=$Row['fecha_vencimiento'];
                }
            }
            return $res;
        }
        
        function eliminarProducto($codigo){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_producto FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }
            else if(pg_num_rows($sql) == 1){
                $query2 = "DELETE FROM $schema.producto WHERE id_producto=$codigo";
                $sql2 = pg_query($conn,$query2);
                $res="OK";
                 
            }
            return $res;
        }

        function insertarUsuario($id_usuario, $nombre, $contrasena, $rol, $sucursal){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_usuario FROM $schema.usuario WHERE id_usuario=$id_usuario";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){                
                $query2 = "INSERT INTO $schema.usuario(id_usuario, nombre, contrasena, rol, fk_id_sucursal) values ($id_usuario, '$nombre', '$contrasena', '$rol', '$sucursal')";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }else if(pg_num_rows($sql) == 1){
                $res="ERROR";                
            }
            return $res;
        }

        function editarUsuario($id_usuario, $nombre, $contrasena, $rol, $sucursal){
            include 'conexion.php';
            $res="";            
            $query = "SELECT id_usuario FROM $schema.usuario WHERE id_usuario=$id_usuario";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "UPDATE $schema.usuario SET id_usuario=$id_usuario, nombre='$nombre', contrasena='$contrasena', rol='$rol', fk_id_sucursal='$sucursal' WHERE id_usuario=$id_usuario";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }           
            return $res;
        }

        function buscarUsuario($codigo){
            include 'conexion.php';
            $res=[];
            $query = "SELECT id_usuario FROM $schema.usuario WHERE id_usuario=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "SELECT nombre, contrasena, rol, fk_id_sucursal FROM $schema.usuario WHERE usuario.fk_id_sucursal=sucursal.id_sucursal AND id_usuario=$codigo";
                $sql = pg_query($conn,$query2);
                while($Row=pg_fetch_assoc($sql)){
                    $res[0]=$Row['nombre'];
                    $res[1]=$Row['contrasena'];
                    $res[2]=$Row['rol'];
                    $res[3]=$Row['fk_id_sucursal'];
                }
                $res="OK";
            }            
            return $res;
        }

        function eliminarUsuario($id_usuario){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_usuario FROM $schema.usuario WHERE id_usuario=$id_usuario";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "DELETE FROM $schema.usuario WHERE id_usuario=$id_usuario";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }
            return $res;
        }

        function insertarSucursal($id_sucursal, $nombre, $direccion){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_sucursal FROM $schema.sucursal WHERE id_sucursal=$id_sucursal";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $query2 = "INSERT INTO $schema.sucursal(id_sucursal, nombre, direccion) values ($id_sucursal, '$nombre', '$direccion')";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }else if(pg_num_rows($sql) == 1){
                $res="ERROR";                
            }
            return $res;
        }

        function editarSucursal($id_sucursal, $nombre, $direccion){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_sucursal FROM $schema.sucursal WHERE id_sucursal=$id_sucursal";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "UPDATE $schema.sucursal SET id_sucursal=$id_sucursal, nombre='$nombre', direccion='$direccion' WHERE id_sucursal=$id_sucursal";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }
            return $res;
        }

        function buscarSucursal($codigo){
            include 'conexion.php';
            $res=[];
            $query = "SELECT id_sucursal FROM $schema.sucursal WHERE id_sucursal=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "SELECT nombre, direccion FROM $schema.sucursal WHERE id_sucursal=$codigo";
                $sql = pg_query($conn,$query2);
                while($Row=pg_fetch_assoc($sql)){
                    $res[0]=$Row['nombre'];
                    $res[1]=$Row['direccion'];
                }
                $res="OK";
            }            
            return $res;
        }

        function eliminarSucursal($id_sucursal){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_sucursal FROM $schema.sucursal WHERE id_sucursal=$id_sucursal";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "DELETE FROM $schema.sucursal WHERE id_sucursal=$id_sucursal";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }            
            return $res;
        }
?>