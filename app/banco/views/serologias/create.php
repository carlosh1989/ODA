
<style>
  select{
    width: 100px;
  }
</style>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-eercast fa-2x"></i> INGRESAR SEROLOGIA DE <b><?php echo strtoupper($donante->nombre_apellido) ?></b> PARA FECHA <?php echo \Carbon\Carbon::now(); ?></h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>banco/serologias" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="donante_id" value="<?php echo $donante->id ?>">
      <input type="hidden" name="fecha" value="<?php echo \Carbon\Carbon::now() ?>">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <input class="form-control" type="text" name="responsable" placeholder="Responsable" required>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            <select name="VIH" required="">
              <option value="">VIH</option>
              <option value="positivo">Positivo</option>
              <option value="negativo">Negativo</option>
            </select>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            <select name="HBSAG" required="">
              <option value="">HBSAG</option>
              <option value="positivo">Positivo</option>
              <option value="negativo">Negativo</option>
            </select>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            <select name="ANTIVHC" required="">
              <option value="">ANTIVHC</option>
              <option value="positivo">Positivo</option>
              <option value="negativo">Negativo</option>
            </select>
          </div>
        </div>
       
        <div class="col-lg-3">
          <div class="form-group">
            <select name="SIFILIS" required="">
              <option value="">SIFILIS</option>
              <option value="positivo">Positivo</option>
              <option value="negativo">Negativo</option>
            </select>
          </div>
        </div>
       

        <div class="col-lg-3 top-buffer">
          <div class="form-group">
            <select name="CHAGAS" required="">
              <option value="">CHAGAS</option>
              <option value="positivo">Positivo</option>
              <option value="negativo">Negativo</option>
            </select>
          </div>
        </div>

      </div>
      <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>