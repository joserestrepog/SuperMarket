<?php
    
        $usuario=$_POST['id_usuario']; 
        $contrasena=$_POST['contrasena']; 
        #configurar ruta
        include '../ControllerInicio.php';     
        $result->iniciarSesion($usuario, $contrasena);

        if($result=="Administrador"){
            #configurar ruta
            include 'ModuloAdministrador.html':
        }
        else if($result=="Colaborador"){
            #configurar ruta
            include 'colaborador.html':
        }
        else if($result=="NOROL"){
            #mostrar dentro del index.html un mensaje de erroo
            #Usuario o contraseña invalidos
        }
    
?>