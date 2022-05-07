<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Inventario</title>
</head>

<link href="../../css/cssEstilosForms.css" rel="stylesheet" type="text/css">
<?php include '/../../../../Controlador/ControladorProducto/ControllerBuscarProducto.php'; ?>
<body>
    <div class="container">
        <div class="row header">
          <h1>BUSCAR &nbsp;</h1>
          <h3>Módulo Gestión Inventario - Buscar</h3>
        </div>
        <div class="row body">
          <form action="../../../../Controlador/ControladorProducto/ControllerBuscarProducto.php" method="post">
            <ul class="itemsForms">
            <?php include '../../../../Controlador/ControladorProducto/ControllerBuscarProducto.php'; ?>
                <li>
                    <label for="comments">Código</label>
                    <input type="number" name="codigoBuscar" required="Campo requerido" placeholder="Buscar por Código..." />
                </li>
                <li>
                  <input class="btn btn-submit" type="submit" value="Buscar" /> 
                  <a href="ModuloInventario.html" class="btn btn-submit"> Cancelar/Regresar </a>
                </li>
            
                <li>
                  <p class="">
                    <label for="first_name">Descripción</label>
                    <input type="text" name="descripcion" disabled value="<?php echo $result[0];?>" placeholder="Descripción..." readonly="readonly" />
                  </p>
                </li> 
                <li>
                  <p>
                    <label for="first_name">Precio</label>
                    <input type="text" name="precio" disabled value="<?php echo $result[1];?>" placeholder="Precio..." readonly="readonly" />
                  </p>
                </li>
                <li>
                  <p>
                    <label for="first_name">Cantidad Stock</label>
                    <input type="text" name="cantidad" disabled value="<?php echo $result[2];?>" placeholder="Cantidad..." readonly="readonly" />
                  </p>
                </li>
                <li>
                  <p>
                    <label for="first_name">Fecha Ingreso</label>
                    <input type="text" name="fechaIngreso" disabled value="<?php echo $result[3];?>" placeholder="Fecha Ingreso..." readonly="readonly" />
                  </p>
                </li>
                <li>
                  <p>
                    <label for="first_name">Fecha Vencimiento</label>
                    <input type="text" name="fechaVencimiento" disabled value="<?php echo $result[4];?>" placeholder="Fecha Vencimiento..." readonly="readonly" />
                  </p>
                </li>
            </ul>
          </form>
        </div>
      </div>
</body>
</html>