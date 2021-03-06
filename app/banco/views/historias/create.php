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
              <div class="col-lg-2">
                <input type="checkbox" data-off-label="false" data-on-label="false" data-off-icon-cls="fa fa-thumbs-o-down" data-on-icon-cls="fa fa-thumbs-o-up" name="respuestas[]" value="<?php echo $h->id ?>">
              </div>
              <div class="col-lg-10">
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