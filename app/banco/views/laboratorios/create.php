<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-eyedropper fa-2x"></i><i class="fa fa-plus"></i> LABORATORIOS</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>banco/laboratorios" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-12 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="text" name="razon_social" placeholder="Razon Social" required>
          </div>
        </div>
        <div class="col-lg-12 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="text" name="direccion" placeholder="Dirección" required>
          </div>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="text" name="telefono" placeholder="Telefono" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>