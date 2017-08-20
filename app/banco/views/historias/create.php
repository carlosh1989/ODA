<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">HISTORIAL  MEDICO</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>banco/historias" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="donante_id" value="<?php echo $donante_id ?>">
      <div class="row">
        <?php foreach ($banco_historias as $h): ?>
        <div class="col-lg-4">
          <div class="panel panel-default animated fadeInUp">
            <div class="panel-body">
              <div class="col-lg-3">
                <div class="form-group">
                  <?php
                  $respuesta_donante = \App\DonanteHistoria::where('historia_id',$h->id)->where('donante_id',$donante_id)->first();
                  ?>
                  <select name="pregunta-<?php echo $h->id ?>" class="form-control" id="sel1">
                    <?php if ($respuesta_donante): ?>
                    <?php if ($respuesta_donante->respuesta == 'si'): ?>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                    <?php else: ?>
                    <option value="no">No</option>
                    <option value="si">Si</option>
                    <?php endif ?>
                    <?php else: ?>
                    <option value="no">No</option>
                    <option value="si">Si</option>
                    <?php endif ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-9">
                <h6 class="">
                <?php echo $h->pregunta ?>
                </h6>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <br>
      <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>