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
        <link rel="stylesheet" href="css/carrusel.css">
        <!-- Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    </head>
  <body>
    <?php include("partes/barra_navegacion.php");?>
    
    <aside>

    <?php include("partes/carousel.php");?>

    <section class="container-fluid">
        <div class="container py-5">
            <h3>Departamentos en <strong>ESTADO DE MÉXICO</strong></h3>
        </div>
        <!-- Swiper -->
        <div class="container">
            <div class="swiper-container pb-4">
                <div class="swiper-wrapper">
                <?php for ($i=0; $i < 10; $i++) { ?>
                <div class="swiper-slide">
                    <div class="col-lg-12 hover-animate">
                        <div class="card shadow border-0 h-100">
                            <a href="detalle-desarrollo">
                                <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                            alt="">
                            </a>
                          <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                            <h5 class="my-2">
                                <a class="text-dark" href="detalle-desarrollo">
                                    Autumn fashion tips and trick
                                </a>
                            </h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                            <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                feugiat vitae, ultricies ege...
                            </p>
                            <a class="btn btn-link pl-0 alert-link" href="detalle-desarrollo">
                               Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="py-4 position-relative dark-overlay">
        <img class="bg-image" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1497436072909-60f360e1d4b1.jpg" alt="">
        <div class="container">
          <div class="overlay-content text-white py-lg-5">
            <h3 class="display-3 font-weight-bold text-serif text-shadow mb-3">Estas listo para el depa de tus sueños ?</h3>
            <a class="btn btn-light" href="category-rooms.html">Lo quiero <i class="fas fa-heart"></i></a>
          </div>
        </div>
    </section>

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener("load",()=>{
            if(screen.width<500){
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay:{
                        delay:3000,
                    }
                });
            }else{
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay:{
                        delay:3000,
                    }
                });
            }
        })
    </script>
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