<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">INGRESAR HEMATOLOGIA</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/hematologias" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="id_solicitud" value="<?php echo $id_solicitud ?>">
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="hematocritos" placeholder="hematocritos " required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="hemoglobina" placeholder="hemoglobina" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="leucocitos" placeholder="leucocitos" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="neutrofilos" placeholder="neutrofilos" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="linfocitos" placeholder="linfocitos" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>