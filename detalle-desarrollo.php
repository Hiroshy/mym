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
        <div class="container-fluid bg-cabecera-padre px-0"  style="background-image: url(media/desarrollos/satelite4.jpg);background-size: cover;">
            <div class="container-fluid px-0 bg-mask bg-cabecera text-center">
                <h1 class="text-light titulo-cabecera-propiedad">Edificio Golf Puerta Tlaneplanta</h1>
            </div>
        </div>

        <div class="col-lg-10 mx-auto">
            <div class="row">
                <div class="col-lg-4 pt-4 formulario-box">
                    <div class="col-md-12 bg-primary">
                        <div class="form-group text-center pt-3">
                            <img src="media/logo/logo-blanco.png" alt="" class="img-fluid">
                        </div>
                        <div class="container-fluid pb-4">
                            <form action="">
                                <div class="form-group">
                                    <input type="hidden" name="idPropiedad" id="idPropiedad" class="form-control" placeholder="idPropiedad" value="XXXXX" required min-lenght="5">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="Propiedad" id="Propiedad" class="form-control" placeholder="Propiedad" value="Edificio Golf Puerta Tlaneplanta" required min-lenght="5">
                                </div>
                                <div class="form-group">
                                    <label for="nombre" class="text-light">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" required min-lenght="5">
                                </div>
                                <div class="form-group">
                                    <label for="telefono" class="text-light">Teléfono</label>
                                    <input type="phone" name="telefono" id="telefono" class="form-control" placeholder="772-125-147" required min-lenght="5">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-light">Correo Electrónico</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="alguien@mail.com" required min-lenght="5">
                                </div>
                                <div class="form-group">
                                    <label for="nombre" class="text-light">Mensaje</label>
                                    <textarea name="nombre" id="nombre" class="form-control" placeholder="Escríbenos aquí.."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Enviar mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pt-4">
                   
                    <div class="form-group">
                        <a href="https://goo.gl/maps/JLwRtR2MNbiajbkYA" class="titulo-propiedad alert-link text-blue">Puerta Tlaneplanta <i class="fas fa-map-marker-alt"></i></a>
                    </div>
                 
                    <div class="form-group">
                        <p class="text-muted">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat rerum, possimus mollitia amet expedita laudantium! Similique, 
                            tempora totam voluptate perspiciatis nihil vel explicabo accusantium soluta laboriosam voluptatum ducimus itaque.
                        </p>
                    </div>
                    <div class="form-group">
                        <div class="container-fluid form-group">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 dflex dflex-start">
                                    <i class="fas fa-bed fa-2x font-weight-bold"></i>
                                    <p class="lead px-4">
                                       <span class="font-weight-bold"> Desde: </span> <br> 1 Dormitorio
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-4 dflex dflex-start">
                                    <i class="fas fa-bed fa-2x font-weight-bold"></i>
                                    <p class="lead px-4">
                                       <span class="font-weight-bold"> Hasta: </span> <br>  3 Dormitorios
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-4 dflex dflex-start">
                                    <i class="fas fa-bed fa-2x font-weight-bold"></i>
                                    <p class="lead px-4">
                                       <span class="font-weight-bold"> Hasta: </span> <br>  +5 Dormitorios
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 dflex dflex-start">
                                    <i class="fas fa-toilet fa-2x font-weight-bold"></i>
                                    <p class="lead px-3">
                                       <span class="font-weight-bold"> Desde: </span> <br> 1 Baño
                                    </p>
                                </div>
                                <div class="col-lg-4 dflex dflex-start">
                                    <i class="fas fa-toilet fa-2x font-weight-bold"></i>
                                    <p class="lead px-3">
                                       <span class="font-weight-bold"> Hasta: </span> <br>  3 Baño
                                    </p>
                                </div>
                                <div class="col-lg-4 dflex dflex-start">
                                    <i class="fas fa-dollar-sign fa-2x font-weight-bold"></i>
                                    <p class="lead px-3">
                                        <span class="font-weight-bold"> Reserva a solo :</span> <br>  &nbsp;2,205,387
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper-container pt-4">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="media/desarrollos/demo.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="swiper-slide">
                        <img src="media/desarrollos/demo-6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="swiper-slide">
                        <img src="media/desarrollos/demo-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="swiper-slide">
                        <img src="media/desarrollos/demo-4.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 pt-4 px-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.0479688901023!2d-99.21115468468253!3d19.539554042314187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d46e3841cf9%3A0x3c0d242ff22b2642!2sAv%20Sor%20Juana%20In%C3%A9s%20de%20La%20Cruz%20312%2C%20San%20Lorenzo%2C%2054069%20Tlalnepantla%20de%20Baz%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1595121321616!5m2!1ses-419!2smx" class="img-fluid" frameborder="0" style="border:0;height: 500px;width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <section class="container-fluid col-lg-11">
            <div class="container-fluid py-5">
                <h3> Desarrollos similares </h3>
            </div>
            <!-- Swiper -->
            <div class="container-fluid">
                <div class="swiper-containerT pb-4">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-lg-12 hover-animate">
                            <div class="card shadow border-0 h-100">
                                <a href="desarrollos.html">
                                    <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                alt="...">
                                </a>
                            <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                <h5 class="my-2">
                                    <a class="text-dark" href="desarrollos.html">
                                        Autumn fashion tips and trick
                                    </a>
                                </h5>
                                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                    feugiat vitae, ultricies ege...
                                </p>
                                <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="col-lg-12 hover-animate">
                                <div class="card shadow border-0 h-100">
                                    <a href="desarrollos.html">
                                        <img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" 
                                    alt="...">
                                    </a>
                                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">DEPTO </a>
                                    <h5 class="my-2">
                                        <a class="text-dark" href="desarrollos.html">
                                            Autumn fashion tips and trick
                                        </a>
                                    </h5>
                                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, 
                                        feugiat vitae, ultricies ege...
                                    </p>
                                    <a class="btn btn-link pl-0 alert-link" href="desarrollos.html">
                                    Ver desarrollo<i class="fa fa-long-arrow-alt-right ml-2"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
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

                var swiper2 = new Swiper('.swiper-containerT', {
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
                    slidesPerView: 2,
                    spaceBetween: 30,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay:{
                        delay:3000,
                    }
                });

                var swiper2 = new Swiper('.swiper-containerT', {
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