
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="/">
          <!-- <img src="<?php echo $tienda->iconoAplicacionNav();?>" alt="Directory logo"> -->
          <?php echo $tienda->nombreTienda();?>
          </a>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline mt-4 mb-2 d-sm-none" action="#" id="searchcollapsed">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label class="label-absolute" for="searchcollapsed_search"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="searchcollapsed_search" placeholder="Search" aria-label="Search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="index">Inicio</a></li>
              <!-- Megamenu-->
              <li class="nav-item"><a class="nav-link" href="index#proyectos">Proyecto</a></li>
              <!-- /Megamenu end-->
              <li class="nav-item"><a class="nav-link" href="interesados">Citas</a></li>
              <li class="nav-item"><a class="nav-link" href="datos">Recopilación</a></li>
              <li class="nav-item dropdown ml-lg-3"><a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar avatar-sm avatar-border-white mr-2" src="https://d19m59y37dris4.cloudfront.net/directory/1-5/img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Jack London"></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdownMenuLink">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt mr-2 text-muted"></i> Salir</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>