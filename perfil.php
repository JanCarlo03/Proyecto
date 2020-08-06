<?php
require_once './checa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.html"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="diamond.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.html">Ofertas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="perfil.html"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="compras.html"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="envio.html"><i class="fa fa-shipping-fast"> </i> Envio </a>
                        <a class="dropdown-item" href="catalogo.html"><i class="fa fa-images"> </i> Catalogo </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.html">Registrarse</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card testimonial-card">
                <div class="card-up rainy-ashville-gradient">
                </div>
                <div class="avatar mx-auto"><img src="img/yo.jpg" class="rounded-circle img-responsive" alt="Example photo">
                  <div class="card-body">
                    </div><div class="card">
                      <div class="card-header">
                        <h5><a class="btn btn-info float-right" href="formulario_perfil.html" role="button">Editar</a>Mi informacion </h5>
                      </div>
                      <div class="card-body">
                        <from action="envio_guarda.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Numero de envio</label>
                            <input type="text" class="form-control" id="idenvio" name="idenvio" required> 
                        </div>
                        <div class="form-group">
                            <label for="paterno">Numero de compra</label>
                            <input type="text" class="form-control" id="idventa" name="idventa" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_cita">Fecha del envio</label>
                            <input type="date" class="form-control form-control-sm" id="fecha" name="fecha" aria-describedby="fechaHelp" min="2020-06-10">
                            <small id="fechaHelp" class="form-text text-muted">Selecciona la fecha de envio </small>
                        </div>
                        <div class="form-group">
                            <label for="paterno">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>