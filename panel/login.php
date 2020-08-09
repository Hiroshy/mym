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
        <?php require_once('partes/identificacion_web.php'); ?>
        <title> <?php echo $tienda->nombreTienda();?> | <?php echo $tienda->titulOpcional();?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Mis estilos -->
        <link rel="stylesheet" href="../css/tema-web.css">
    </head>
  <body>
    
    <aside>

    <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
          <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
            <div class="mb-5"><img class="img-fluid mb-3" src="<?php echo $tienda->iconoAplicacionNav();?>" alt="..." style="max-width: 10rem;">
              <h2>Bienvenido Admin</h2>
            </div>
            <form class="form-validate">
              <div class="form-group">
                <label class="form-label" for="loginUsername"> Correo</label>
                <input class="form-control" name="loginUsername" id="loginUsername" type="email" placeholder="name@address.com" autocomplete="off" required="" data-msg="Please enter your email">
              </div>
              <div class="form-group mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="loginPassword"> Contraseña</label>
                  </div>
                  <div class="col-auto"><a class="form-text small" href="#">Olvidaste la contraseña ?</a></div>
                </div>
                <input class="form-control" name="loginPassword" id="loginPassword" placeholder="Password" type="password" required="" data-msg="Please enter your password">
              </div>
              <div class="form-group mb-4">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="loginRemember" type="checkbox">
                  <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">Recuerdame</span></label>
                </div>
              </div>
              <!-- Submit-->
              <button class="btn btn-lg btn-block btn-primary">Iniciar Sesión</button>
              <!-- <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
              <button class="btn btn btn-outline-primary btn-block btn-social mb-3"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
              <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button>
              <hr class="my-4"> -->
              <!-- <p class="text-center"><small class="text-muted text-center">Aún no tienes cuenta ? <a href="signup.html">                 </a></small></p> -->
            </form><a class="close-absolute mr-md-5 mr-xl-6 pt-5" href="index-2.html"> 
              <svg class="svg-icon w-3rem h-3rem">
                <use xlink:href="#close-1"> </use>
              </svg></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 mr-n3" style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg);"></div>
        </div>
      </div>
    </div>

    </aside>
    <footer class="container-fluid text-center bg-dark-hard py-4 mt-4 text-light">
        <span class="lead">© 2020 M&M | Todos los derechos reservados |</span> <a href="#" class="alert-link text-light">Aviso de Privacidad</a>
    </footer>

    <?php include("partes/metaweb.php");?>

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