<?php 
    require_once('modelo/info.class.php'); 
    $tienda->asigna_metaDescription("Articulos para oficina,el hogar y soporte en Cómputo");
    $tienda->asigna_metaKeywords("clave1, clave2, clave3");
    $tienda->asigna_titulOpcional("Departamentos de Lujo");
?>
<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="<?php echo $tienda->metaDescription() ?>">
        <meta name="twitter:image" content="">
        <meta name="twitter:url" content="">
        <meta name="twitter:image:width" content="1200">
        <meta name="twitter:image:height" content="1200">
        <meta name="twitter:image:alt" content="">
        <meta property="og:locale" content="es_MX">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="<?php echo $tienda->nombreTienda();?>">
        <meta property="og:title" content=" | <?php echo $tienda->nombreTienda();?>">
        <meta property="og:description" content="<?php echo $tienda->metaDescription() ?> ">
        <meta property="og:image" content="">
        <meta property="og:image:url" content="">
        <meta property="og:image:secure_url" content="">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="1200">
        <meta property="og:image:alt" content="">
        <meta name="robots" content="index,follow">
        <meta name=description content="<?php echo $tienda->metaDescription() ?>">
        <meta name=keywords content="<?php echo $tienda->metaKeywords() ?>">
        <meta name=author content="<?php echo $tienda->autor();?>">
        <title> <?php echo $tienda->nombreTienda();?> | <?php echo $tienda->titulOpcional();?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Mis estilos -->
        <link rel="stylesheet" href="css/tema-web.css">
    </head>
  <body>
    <?php include("partes/barra_navegacion.php");?>
    
    <aside>
        <div class="container-fluid bg-cabecera-padre px-0"  style="background-image: url(media/desarrollos/satelite4.jpg);background-size: cover;">
            <div class="container-fluid px-0 bg-mask bg-cabecera text-center">
                <h1 class="text-light">Desarrollos / <small>Estado de México</small></h1>
            </div>
        </div>
        <div class="container-fluid col-lg-11 mx-auto">
            <div class="row pt-4">
                <div class="col-lg-3">
                    <div class="formulario-box">
                        <div class="bg-primary">
                            <div class="form-group text-center pt-3">
                                <img src="media/logo/logo-blanco.png" alt="" class="img-fluid">
                            </div>
                            <div class="container-fluid pb-4">
                                <form action="">
                                    <div class="form-group">
                                        <label for="estado" class="text-light">Estado</label>
                                        <select name="estado" class="custom-select">
                                            <option value="Estado de México" >EDOMEX</option>
                                            <option value="cdmx">CDMX</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="estado" class="text-light">Tipo</label>
                                        <select name="estado" class="custom-select">
                                            <option value="Estado de México" >Pre venta</option>
                                            <option value="cdmx">Entrega Inmediata</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                <?php for ($i=0; $i < 10; $i++) {  ?>
                    <div class="row pb-4">
                        <div class="col-lg-6 px-0 align-self-center">
                            <div id="carrusel1" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="media/desarrollos/demo.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="media/desarrollos/demo-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="media/desarrollos/demo-3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="media/desarrollos/demo-4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="media/desarrollos/demo-6.jpg" class="d-block w-100" alt="...">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carrusel1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carrusel1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-primary px-0">
                            <div class="form-group text-center pt-3">
                                <img src="media/logo/logo-blanco.png" alt="" class="img-fluid">
                            </div>
                            <style>
                                .box-contacta {
                                    width: 100%;
                                    height: 60px;
                                    background: #000;
                                    padding: 10px;
                                    bottom: 0;
                                    position: absolute;
                                    display: flex;
                                    justify-content: center;
                                    flex: 1;
                                    align-items: center;
                                }
                            </style>
                            <div class="container-fluid form-group px-2">
                                <div class="row text-light">
                                    <div class="col-md-5 col-lg-6 dflex">
                                        <i class="fas fa-bed fa-2x font-weight-bold"></i>
                                        <p class="lead px-4">
                                        <span class="font-weight-bold"> Desde: </span> <br> 1 Dormitorio
                                        </p>
                                    </div>
                                    <div class="col-md-5 col-lg-6 dflex">
                                        <i class="fas fa-bed fa-2x font-weight-bold"></i>
                                        <p class="lead px-4">
                                        <span class="font-weight-bold"> Hasta: </span> <br>  3 Dormitorios
                                        </p>
                                    </div>
                                </div>
                                <div class="row text-light">
                                    <div class="col-lg-4 dflex">
                                        <i class="fas fa-toilet fa-2x font-weight-bold"></i>
                                        <p class="lead px-3">
                                        <span class="font-weight-bold"> Desde: </span> <br> 1 Baño
                                        </p>
                                    </div>
                                    <div class="col-lg-4 dflex">
                                        <i class="fas fa-toilet fa-2x font-weight-bold"></i>
                                        <p class="lead px-3">
                                        <span class="font-weight-bold"> Hasta: </span> <br>  3 Baño
                                        </p>
                                    </div>
                                    <div class="col-lg-4 dflex">
                                        <p class="lead px-3">
                                            <span class="font-weight-bold"> A solo :</span> <br> <i class="fas fa-dollar-sign"></i> &nbsp;2,205,387
                                        </p>
                                    </div>
                                </div>
                                <div class="row text-light pt-4 text-center">
                                    <div class="col-lg-12">
                                        <a href="tel:5621429436" class="alert-link text-light lead px-3">
                                            <i class="fas fa-phone-volume font-weight-bold"></i> 
                                            Contactar
                                        </a>
                                        <a href="detalle-desarrollo" class="alert-link text-light lead px-3">
                                        <i class="fas fa-door-open font-weight-bold"></i>
                                            Ver Desarrollo
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <?php }  ?>
                </div>
            </div>
        </div>

    </aside>
    
    <footer class="container-fluid text-center bg-dark-hard py-4 mt-4 text-light">
        <span class="lead">© 2020 M&M | Todos los derechos reservados |</span> <a href="#" class="alert-link text-light">Aviso de Privacidad</a>
    </footer>

    <?php include("partes/modal.php");?>
    <?php include("partes/metaweb.php");?>
    <?php include("partes/plugin.php");?>

    <!-- Optional JavaScript -->
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- mi script -->
    <script src="js/tema.js"></script>
</body>
</html>