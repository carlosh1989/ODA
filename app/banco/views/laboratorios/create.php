<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">INGRESAR LABORATORIO</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>banco/laboratorios" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <input class="form-control" type="text" name="razon_social" placeholder="Razon Social" required>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <input class="form-control" type="text" name="direccion" placeholder="Dirección" required>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input class="form-control" type="text" name="telefono" placeholder="Telefono" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>