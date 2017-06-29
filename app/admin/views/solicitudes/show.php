<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
    SOLICITUD DE <b class="text-primary">
       <?php echo strtoupper($solicitud->paciente->nombre).' '.strtoupper($solicitud->paciente->apellido) ?>
    </b>
    DEL <b class="text-success"><?php echo $solicitud->fecha ?></b>
    </h3>
  </div>
  <div class="panel-body">
    <br>
    <div class="row">
      <div class="col-lg-12 dl-horizontal">
      <textarea  class="form-control">
       Observaciones:  <?php echo $solicitud->observaciones ?>
      </textarea>
      </div>
    </div>
    <br>
    <?php if ($solicitud->hematologia_resultados): ?>
    <div class="row">
      <div class="col-lg-4">
        <a class="btn btn-default btn-block" href="#">
          <i class="fa fa-check"></i> HEMATOLOGIA
        </a>
        <br>
        <ul>
          <li>Hematocritos: <?php echo $solicitud->hematologia_resultados->hematocritos ?></li>
          <li>Hemoglobina: <?php echo $solicitud->hematologia_resultados->hemoglobina ?></li>
          <li>Leucocitos: <?php echo $solicitud->hematologia_resultados->leucocitos ?></li>
          <li>Linfocitos: <?php echo $solicitud->hematologia_resultados->linfocitos ?></li>
          <li>Neutrofilos: <?php echo $solicitud->hematologia_resultados->neutrofilos ?></li>
        </ul>
      </div>
    </div>
    <?php else: ?>
      <div class="row">
        <div class="col-lg-3">
          <a class="btn btn-success btn-block" href="<?php echo baseUrl ?>admin/hematologias/create?id_solicitud=<?php echo $solicitud->id ?>">
            <i class="fa fa-external-link-square"></i> HEMATOLOGIA INGRESAR
          </a>
          <br>
          <ul>
            <?php foreach ($hematologia_seleccion as $h): ?>
              <li><?php echo $h ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    <?php endif ?>
  </div>
</div>