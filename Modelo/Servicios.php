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
    
    
?>