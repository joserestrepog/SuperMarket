<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Inventario</title>
</head>

<link href="../../css/cssEstilosForms.css" rel="stylesheet" type="text/css">

<body>
    <div class="container">
        <div class="row header">
          <h1>BUSCAR &nbsp;</h1>
          <h3>Módulo Gestión Inventario - Buscar</h3>
        </div>
        <div class="row body">
          <form action="../../../../Controlador/ControladorProducto/ControllerBuscarProducto.php" method="post">
            <ul class="itemsForms">
                <li>
                    <label for="comments">Código</label>
                    <input type="number" name="codigoBuscar" required="Campo requerido" placeholder="Buscar por Código..." />
                </li>
                <li>
                  <input class="btn btn-submit" type="submit" value="Buscar" /> 
                  <a href="ModuloInventario.html" class="btn btn-submit"> Cancelar/Regresar </a>
                </li>
            
            </ul>
          </form>
        </div>
      </div>
</body>
</html>