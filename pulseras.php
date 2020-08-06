<?php
include './conexion.php';
?>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulseras</title>
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
                    <a class="nav-link" href="formulario_perfil.html">Registrarse</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="alert alert-success">
        Pantalla de Mensaje...
        <a href="#" class="badge badge-success">Ver Carrito</a>
    </div>
    <?php
   $sentencia= $conexion ("SELECT * FROM 'items'");
    $sentencia->execute();
    $listaPulseras=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    print_r($listaPulseras); 
    
     ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-gem"> </i> Pulseras &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <h5><a class="btn btn-info float-right" href="catalogo.html" role="button">Regresar</a></h5>
         </div>
         <?php foreach ($listaPulseras as $producto) {?>
            
            <div class="container ">
                <div class="row">
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $producto['imagen'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><?php echo $producto['nombre'];?></p>
                                <p class="card-text">$<?php echo $producto['precio'];?></p>
                                <p class="card-text"><?php echo $producto['descripcion'];?></p>
                                <Form:post>
                                    <input type="text" name="id" id="id" values >
                                    <input type="text" name="nombre" id="precio">
                                    <input type="text" name="precio" id="precio">
                                    <input type="text" name="cantidad" id="cantidad">
                                <button type="submit" class="btn btn-dark">Comprar</button>
                                </Form:post>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="http://127.0.0.1/Proyecto/img_productos/p2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Hakimi: Linda pulsera de plata para dama con detalles en oro blanco de 8 kilates.</p>
                                <button type="submit" class="btn btn-dark">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/p3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Erling: Linda pulsera con piedras exoticas talladas y pulidas con liston de oro.</p>
                                <button type="submit" class="btn btn-dark">Comprar</button>
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