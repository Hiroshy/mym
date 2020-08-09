<!-- mi modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Contácta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="nombre" class="text-dark">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" required min-lenght="5">
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="text-dark">Teléfono</label>
                        <input type="phone" name="telefono" id="telefono" class="form-control" placeholder="772-125-147" required min-lenght="5">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-dark">Correo Electrónico</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="alguien@mail.com" required min-lenght="5">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-dark">Desarrollo :</label>
                        <select name="" id="" class="custom-select">
                          <option value="">Elige</option>
                          <option value="desarrollo 1">desarrollo 1</option>
                          <option value="desarrollo 1">desarrollo 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="text-dark">Mensaje</label>
                        <textarea name="nombre" id="nombre" class="form-control" placeholder="Escríbenos aquí.."></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <button type="submit" class="btn btn-dark">Enviar mensaje</button>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
              <button type="button" class="btn btn-primary">Contactar</button>
            </div>
          </div>
        </div>
    </div>