<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="/">
            <!-- <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">  -->
            <?php echo $tienda->nombreTienda();?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="quienes-somos"> <i class="fas fa-user-tie mr-3"></i> Quienes Somos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="desarrollos"> <i class="fas fa-drafting-compass mr-3 "></i> Desarrollos</a>
            </li>
            <li class="mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block nav-item"><a class="btn btn-primary" href="" data-toggle="modal" data-target="#staticBackdrop"> <i class="far fa-comment-alt ml-2 mr-2"></i> Contacto</a></li>
          </ul>
        </div>
    </nav>