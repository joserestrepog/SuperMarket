<?php
    
        $usuario=$_POST['id_usuario']; 
        $contrasena=$_POST['contrasena']; 
        include '../Modelo/Servicios.php';
        
        $result=iniciarSesion($usuario, $contrasena);

        if($result=="Administrador"){
            include '../Vista/Modulo_administrador/html/ModuloAdministrador.html';
        }
        else if($result=="Colaborador"){
            #configurar ruta
            include '../Vista/Modulo_colaborador/colaborador.html';
        }
        else if($result=="NOROL"){
            #mostrar dentro del index.html un mensaje de erroo
            #Usuario o contraseña invalidos
        }
?>