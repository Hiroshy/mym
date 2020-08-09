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
        
        <!-- Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/nosotros.css">
    </head>
  <body>
    <?php include("partes/barra_navegacion.php");?>
    
    <aside>
        <ul class="navigator-page">
            <li class="navigator-link">
                <a href="#" class="alert-link" data-toggle="tooltip" data-placement="left" title="Inicio">
                    <i class="fas fa-circle-notch fa-2x font-weight-bold"></i>
                </a>
            </li>
            <li class="navigator-link">
                <a href="#historia" class="alert-link" data-toggle="tooltip" data-placement="left" title="Historia">
                    <i class="fas fa-circle-notch fa-2x font-weight-bold"></i>
                </a>
            </li>
            <li class="navigator-link">
                <a href="#galeria" class="alert-link" data-toggle="tooltip" data-placement="left" title="Galeria">
                    <i class="fas fa-circle-notch fa-2x font-weight-bold"></i>
                </a>
            </li>
            <li class="navigator-link">
                <a href="#proyectos" class="alert-link" data-toggle="tooltip" data-placement="left" title="Proyectos">
                    <i class="fas fa-circle-notch fa-2x font-weight-bold"></i>
                </a>
            </li>
        </ul>
        <div class="container-fluid bg-cabecera-padre px-0"  style="background-image: url(media/desarrollos/satelite4.jpg);background-size: cover;">
            <div class="container-fluid px-0 bg-mask bg-cabecera text-center">
                <h1 class="text-light titulo-cabecera-propiedad">M&M</h1>
            </div>
        </div>

        <div class="container-fluid bg-primary text-center py-3 text-light">
            <div class="container">
                <h1 class="text-responsive">Los departamentos van de los 155 m2 hasta 255 m2.</h1>
            </div>
        </div>

        <div id="historia" class="container-fluid py-4 fullscreen" style="background:#F8F9FA">
            <div class="container row">
                <div class="col-md-6 align-self-center">
                    <h1 class="titulo-cabecera-propiedad titulo-propiedad">M&M</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut magnam praesentium quisquam nemo minus dolore aperiam iste natus, qui excepturi id fugit reiciendis? Nulla quisquam, quia porro fuga enim iure!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse fuga accusamus ea repudiandae perspiciatis unde, nemo asperiores maxime repellat laborum velit non cum quo quas voluptatibus voluptates beatae facilis necessitatibus.
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <img src="media/desarrollos/demo-2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        
        <div id="galeria" class="container-fluid bg-nosotros">
            <!-- Swiper -->
            <div class="swiper-container pt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(media/desarrollos/demo.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(media/desarrollos/demo-6.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(media/desarrollos/demo-3.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(media/desarrollos/demo-4.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(media/desarrollos/demo-2.jpg)"></div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>

        <div id="proyectos" class="container py-4 fullscreen">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div id="carrusel3" class="carousel slide carousel-fade form-group" data-ride="carousel">
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
                        <a class="carousel-control-prev" href="#carrusel3" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carrusel3" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <h1 class="titulo-cabecera-propiedad titulo-propiedad">M&M PROYECTOS</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut magnam praesentium quisquam nemo minus dolore aperiam iste natus, qui excepturi id fugit reiciendis? Nulla quisquam, quia porro fuga enim iure!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse fuga accusamus ea repudiandae perspiciatis unde, nemo asperiores maxime repellat laborum velit non cum quo quas voluptatibus voluptates beatae facilis necessitatibus.
                    </p>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener("load",()=>{
          var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
          });
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