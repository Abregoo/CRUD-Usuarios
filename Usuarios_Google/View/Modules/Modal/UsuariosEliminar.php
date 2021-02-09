<div class="modal fade" id="modal_usuarios_eliminar" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Eliminar Usuario</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times text-white"></i>
        </button>
      </div>

      <form method="POST">
        <div class="modal-body">
          <h2 class="text-danger">Esta seguro de Eliminar este Usuario?</h2>

          <input type="number" name="idUsuarios_e" class="form-control ocultar" id="idUsuarios_e" readonly>

          <div class="form-group">
            <input type="text" class="form-control" id="usuarios_nombres_e" readonly>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="usuarios_apellidos_e" readonly>
          </div>

          <div class="form-group">
            <input type="date" class="form-control" id="usuarios_fecha_nacimiento_e" readonly>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

          <?php $request = $usuariosController->eliminarUsuario(); ?>
          <?php if ($request) { ?>
            <script type="text/javascript">
              window.location.href = "Usuarios";
            </script>
          <?php } ?>
        </div>
      </form>
    </div>
  </div>
</div>