<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Inventario</title>
</head>

<link href="../Modulo_administrador/css/cssEstilosForms.css" rel="stylesheet" type="text/css">

<body>
    <div class="container">
        <div class="row header">
          <h1>BUSCAR &nbsp;</h1>
          <h3>Módulo Gestión Inventario - Buscar</h3>
        </div>
        <div class="card__content">
          
        </div>
        <div class="row body">
          <form action="../../../SuperMarket/Controlador/ControladorProducto/ControllerRolColaborador.php" method="post">
            <ul class="itemsForms">
                <li>
                    <label for="comments">Código</label>
                    <input type="number" name="codigoBuscar" required="Campo requerido" placeholder="Buscar por Código..." />
                </li>
                <li>
                  <input class="btn btn-submit" type="submit" value="Buscar" /> <br>
                  <a href="../../../SuperMarket/Vista/Login/index.html" class="btn btn-submit"> CERRAR SESION </a>
                </li>
            </ul>
          </form>
        </div>
      </div>
</body>
</html>