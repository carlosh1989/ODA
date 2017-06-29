<div class="panel panel-default">
  <br>
  <div class="panel-heading">
    <h3 class="panel-title">INGRESAR USUARIO</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/usuarios" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese Nombre" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="apellido" placeholder="Ingrese Apellido" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Ingrese Usuario" required>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="cargo" placeholder="Ingrese Cargo" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="password" placeholder="Ingrese Password" required>
          </div>
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-success pull-right"> Guardar <i class="fa fa-save"></i></button>
    </form>
  </div>
</div>