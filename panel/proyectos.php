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
      <div class="col-lg-11 mx-auto">
        <div class="row">
          <div class="col-lg-3 mr-lg-auto">
            <?php include("partes/panel.php");?>
          </div>
          <div class="col-lg-9 pl-lg-5">
            <h1 class="hero-heading mb-0">Proyectos Registrados!</h1>
            <div class="text-block">
              <p> <span class="badge badge-secondary-light">Ultima actualización:&nbsp;&nbsp;&nbsp; 10/11/12 &nbsp;&nbsp;&nbsp;&nbsp; 13:12</span></p>
            </div>
            <div class="text-block">
            <table id="myTable" class="table table-responsive-lg" style="width:100%;">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Resumen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < 99; $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $i+1 ;?></th>
                        <td><a href="interesado?">Mark<?php echo $i ;?></a></td>
                        <td><a href="tel:5555555555">5555555555<?php echo $i ;?></a></td>
                        <td><a href="interesado?">Chrome<?php echo $i ;?></a></td>
                        <td style="text-overflow: ellipsis;"> 
                            <a href="interesado?">
                                10/11/12 10:3<?php echo $i ;?> am
                            </a>
                        </td>
                        <td style="text-overflow: ellipsis;"> 
                            <a href="interesado?">
                                12<?php echo $i ;?>.0.0.1
                            </a>
                        </td>
                        <td style="text-overflow: ellipsis;"> 
                            <a href="editar-proyecto" class="mx-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="proyectos?eliminar=1" class="mx-1" data-toggle="modal" data-target="#elimina">
                                <i class="fas fa-trash-alt"></i>
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

    <!-- Modal -->
    <div class="modal fade" id="elimina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Proyecto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ¿Estas seguro que quieres eliminar este proyecto? &nbsp;&nbsp;&nbsp;Esta acción es permanente y no se podra recuperar.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-secondary ">Borralo!</button>
        </div>
        </div>
    </div>
    </div>

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