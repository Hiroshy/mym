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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    </head>
  <body>
  <?php include("partes/barra_navegacion.php");?>
    <aside>
    <div class="container-fluid py-5"></div>
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mr-lg-auto">
            <div class="card border-0 shadow mb-6 mb-lg-0">
              <div class="card-header bg-gray-100 py-4 border-0 text-center"><a class="d-inline-block" href="#"><img class="d-block avatar avatar-xxl p-2 mb-2" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" alt=""></a>
                <h5>Administrador</h5>
                <p class="text-muted text-sm mb-0">Azcapotzalco, CDMX  </p>
              </div>
              <div class="card-body p-4">
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                    <svg class="svg-icon text-primary svg-icon-md">
                      <use xlink:href="#diploma-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body">
                    <p class="mb-0">2877 Proyectos</p>
                  </div>
                </div>
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                    <svg class="svg-icon text-primary svg-icon-md">
                      <use xlink:href="#checkmark-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body">
                    <p class="mb-0">258 Interesados</p>
                  </div>
                </div>
                <hr>
                <h6>Enlaces</h6>
                <ul class="card-text text-muted">
                  <li>Proyectos</li>
                  <li>Leads</li>
                  <li>Recopilación de datos</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 pl-lg-5">
            <h1 class="hero-heading mb-0">Hola, Admin!</h1>
            <div class="text-block">
              <p> <span class="badge badge-secondary-light">Ultima sesión:&nbsp;&nbsp;&nbsp; 10/11/12 &nbsp;&nbsp;&nbsp;&nbsp; 13:12</span></p>
            </div>
            <div class="text-block">
            <table id="myTable" class="table" style="width:100%;">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Navegador</th>
                    <th scope="col">Hora de entrada</th>
                    <th scope="col">IP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < 99; $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $i ;?></th>
                        <td><a href="interesado?">Mark</a></td>
                        <td><a href="tel:5555555555">5555555555</a></td>
                        <td><a href="interesado?">Chrome</a></td>
                        <td style="text-overflow: ellipsis;"> 
                            <a href="interesado?">
                                10/11/12 10:32 am
                            </a>
                        </td>
                        <td style="text-overflow: ellipsis;"> 
                            <a href="interesado?">
                                127.0.0.1
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    </aside>
    <footer class="container-fluid text-center bg-dark-hard py-4 mt-4 text-light">
        <span class="lead">© 2020 M&M | Todos los derechos reservados |</span> <a href="#" class="alert-link text-light">Aviso de Privacidad</a>
    </footer>

    <?php include("partes/metaweb.php");?>

    <!-- Optional JavaScript -->
    <!-- Place your kit's code here -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- mi script -->
    <script src="js/tema.js"></script>
</body>
</html>