<?php
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
    <link rel="stylesheet" href="css/mdb.min.css">
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
                    <a class="nav-link" href="producto.html">Ofertas</a>
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
                <input class="form-control mr-sm-2" type="search" placeholder="Busqueda " aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
            </form>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="producto.html"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-gem"></i> Tu producto
            </div>
            <div class="card-body">
                <form action="producto_guarda.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Descripcion</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"> 
                    </div>
					<label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option value="">SELECCIONA</option>
                      <option value="">Pulsera</option>
                      <option value="">Anillo</option>
                      <option value="">Relojes</option>
                      <option value="">Pendientes</option>
					</select>
					<label for="exampleFormControlSelect1">Material</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option value="">SELECCIONA</option>
                      <option value="">Chapa de oro</option>
                      <option value="">Plata</option>
                      <option value="">Oro blanco</option>
                    </select>
					<label for="exampleFormControlSelect1">Costo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option value="">SELECCIONA</option>
                      <option value="">100</option>
                      <option value="">750</option>
                      <option value="">460</option>
                    </select>
                  </form>
                  <form class="md-form">
                    <div class="file-field">
                      <a class="btn-floating purple-gradient mt-0 float-left">
                        <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                        <input type="file">
                      </a>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Inserta imagen">
                      </div>
                    </div>
                  </form>
                    <a class="btn btn-primary btn-sm float-right"href="producto.php"><i class="fa fa-save"></i> Guardar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>