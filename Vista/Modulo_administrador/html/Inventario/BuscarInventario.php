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
<?php include '../../../../../Controlador/ControladorProducto/ControllerBuscarProducto.php';?>

    <div class="container">
        <div class="row header">
          <h1>BUSCAR &nbsp;</h1>
          <h3>Módulo Gestión Inventario - Buscar</h3>
        </div>
        <div class="row body">
          <form action="../../../Controlador/ControladorProducto/ControllerBuscarProducto.php" method="post">
            <ul class="itemsForms">
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
                    <input type="text" name="descripcion" disabled placeholder="Descripción..." readonly="readonly" value = "<?php echo $busqueda_nombre ?>" />
                  </p>
                </li> 
                <li>
                  <p>
                    <label for="first_name">Precio</label>
                    <input type="text" name="precio" disabled placeholder="Precio..." readonly="readonly" value= "<?php echo $busqueda_precio ?>" />
                  </p>
                </li>
                <li>
                  <p>
                    <label for="first_name">Cantidad Stock</label>
                    <input type="text" name="cantidad" disabled placeholder="Cantidad..." readonly="readonly" value= "<?php '$busqueda_cantidad' ?>" />
                  </p>
                </li>
                <li>
                  <p>
                    <label for="first_name">Fecha Ingreso</label>
                    <input type="text" name="fechaIngreso" disabled placeholder="Fecha Ingreso..." readonly="readonly" value= "<?php '$busqueda_fecha_ing' ?>" />
                  </p>
                </li>
                <li>
                  <p>
                    <label for="first_name">Fecha Vencimiento</label>
                    <input type="text" name="fechaVencimiento" disabled placeholder="Fecha Vencimiento..." readonly="readonly" value= "<?php '$busqueda_fecha_ven' ?>" />
                  </p>
                </li>
            </ul>
          </form>
        </div>
      </div>
</body>
</html>