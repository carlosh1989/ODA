<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-eyedropper fa-2x"></i> LABORATORIO</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Razon Social:</dt>
        <dd><?php echo $laboratorio->razon_social ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Dirección:</dt>
        <dd><?php echo $laboratorio->direccion ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Email:</dt>
        <dd><?php echo $laboratorio->email ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono:</dt>
        <dd><?php echo $laboratorio->telefono ?> </dd>
      </div>
    </div>
    <hr>
    <?php if ($laboratorio->laboratorio_personal): ?>
    <h5 class="text-muted" style="text-align: center;">
    <a class="btn btn-success pull-right" href="<?php echo baseUrl ?>banco/laboratoriosPersonal/create/<?php echo $laboratorio->id ?>">  <i class="fa fa-plus"></i> Personal</a>
    Personal laboratorio</h5>
    <br>
    <table class="table table-striped table-condensed table-responsive" data-striped="true">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Ver</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($laboratorio->laboratorio_personal as $c): ?>
        <tr>
          <td><?php echo $c->nombre_apellido ?></td>
          <td><?php echo $c->usuario->email ?></td>
          <td><?php echo $c->telefono_celular ?></td>
          <td width="15%">
            <a class="btn btn-default" href="<?php echo baseUrl ?>banco/laboratoriosPersonal/<?php echo $c->id ?>"><i class="fa fa-search text-primary"></i></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <?php else: ?>
    <h3>no Hay</h3>
    <?php endif ?>
  </div>
</div>