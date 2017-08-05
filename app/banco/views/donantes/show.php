<div class="panel panel-default">
  
  <ul class="nav nav-tabs">
    <li class="active"><a href="#datos" data-toggle="tab" aria-expanded="true">DATOS</a></li>
    <li class=""><a href="#historia" data-toggle="tab" aria-expanded="false">HISTORIA</a></li>
    <li class=""><a href="#serologia" data-toggle="tab" aria-expanded="false">SEROLOGIA</a></li>
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="datos">
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-4 dl-horizontal">
            <dt>Nombre:</dt>
            <dd><?php echo $donante->nombre_apellido ?></dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Cédula:</dt>
            <dd><?php echo $donante->cedula ?></dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Email:</dt>
            <dd><?php echo $donante->email ?> </dd>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-4 dl-horizontal">
            <dt>Telefono fijo:</dt>
            <dd><?php echo $donante->telefono_fijo ?> </dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Telefono celular:</dt>
            <dd><?php echo $donante->telefono_celular ?> </dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Dirección:</dt>
            <dd><?php echo $donante->direccion ?> </dd>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="historia">
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12 dl-horizontal">
            <?php if ($donante->historia): ?>

            <?php else: ?>
              <h5><?php echo ucwords($donante->nombre_apellido) ?> no tiene historia medica, desea creala? <a class="btn btn-primary" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>"><i class="fa fa-pencil"></i> Si</a></h5>              
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="serologia">
      <p>Serologia</p>
    </div>
  </div>
</div>