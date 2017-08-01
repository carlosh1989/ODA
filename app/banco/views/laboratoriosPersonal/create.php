<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">INGRESAR PERSONAL</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>banco/laboratoriosPersonal" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="laboratorio_id" value="<?php echo $laboratorio_id ?>">
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nombre" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="cedula" placeholder="Cédula" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="telefono_fijo" placeholder="Telefono fijo" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="telefono_celular" placeholder="Telefono celular" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="fecha_nacimiento" placeholder="Fecha nacimiento" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="cargo" placeholder="Cargo" required>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <input class="form-control" type="text" name="direccion" placeholder="Dirección" required>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
    <h5 class="text-muted" style="text-align: center;">Datos de Acceso</h5>
    <hr>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Email" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>