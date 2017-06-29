<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">INGRESAR SOLICITUD</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitudes" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="id_paciente" value="<?php echo $id_paciente ?>">
      <div class="row">
        <div class="col-lg-12">
          <textarea name="observaciones" placeholder="Observaciones" class="form-control" ></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-4">
          HEMATOLOGIA
          <br>
          <input type='checkbox' name='hematologia[]' value='hematocrito'> hematocrito<br>
          <input type='checkbox' name='hematologia[]' value='hemoglobina'> hemoglobina<br>
          <input type='checkbox' name='hematologia[]' value='neutrofilos'> neutrofilos<br>
          <input type='checkbox' name='hematologia[]' value='linfocitos'> linfocitos<br>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>