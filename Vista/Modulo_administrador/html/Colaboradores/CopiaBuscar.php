<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Controlador/ControladorProducto/ControllerBuscarProducto.php'; ?>
    <title>Módulo Colaborador</title>
</head>
<link href="../../css/cssEstilosForms.css" rel="stylesheet" type="text/css">
<body>
  
    <div class="container">
        <div class="row header">
          <h1>BUSCAR &nbsp;</h1>
          <h3>Módulo Gestión Colaborador - Buscar</h3>
        </div>
        <div class="row body">
          <form action="../../../../Controlador/ControladorUsuario/ControllerBuscarUsuario.php" method="post">
            <ul class="itemsForms">
                
              <li>
                <label for="comments">Código</label>
                <input type="number" name="codigoBuscar" required="Campo requerido" placeholder="Buscar por Código..." />
            </li>
            <li>
              <input class="btn btn-submit" type="submit" value="Buscar" /> 
              <a href="ModuloColaborador.html" class="btn btn-submit"> Cancelar/Regresar </a>
            </li>
            <li>
                 
              <li>
                <p class="">
                  <label for="first_name">Nombre</label>
                  <input type="text" name="name" disabled placeholder="Nombre..." readonly="readonly" value="<?php $busqueda_nombre?>"  />
                </p>      
              <li>
                <p>
                    <label for="first_name">Contraseña</label>
                    <input type="text" name="contraseña" disabled placeholder="Contraseña..." readonly="readonly" />
                </p>
              </li>
              <li>
                <p>
                    <label for="first_name">Rol</label>
                    <input type="text" name="rol" disabled placeholder="Rol..." />
                </p>
              </li>
              <li>
                <p>
                    <label for="first_name">Sucursal a cargo</label>
                    <input type="number" name="sucursal" disabled placeholder="Sucursal a cargo..." readonly="readonly" />
                </p>
              </li>
            </ul>
          </form>
        </div>
      </div>
</body>
</html>