<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-eyedropper fa-2x"></i> LABORATORIO</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-4">
        <table class="table table-user-information panel panel-default animated fadeIn">
          <tbody>
            <tr>
              <td style="background: #E0E0E0;"><b>Razon social:</b></td>
              <td><?php echo ucwords($laboratorio->razon_social) ?></td>
            </tr>
            <tr>
              <td style="background: #E9E9E9;"><b>Email:</b></td>
              <td><?php echo $laboratorio->email ?></td>
            </tr>
            <tr>
              <td style="background: #E0E0E0;"><b>Telefono:</b></td>
              <td><?php echo $laboratorio->telefono ?></td>
            </tr>
            <tr>
              <td style="background: #E9E9E9;"><b>Dirección:</b></td>
              <td><?php echo $laboratorio->direccion ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-4">
      <?php if ($laboratorio->laboratorio_imagenes): ?>
        <img class="img-responsive panel panel-default animated pulse" src="<?php echo $laboratorio->laboratorio_imagenes->first()->imagen_medio ?>" alt="">
        <?php else: ?>
        <h4>No hay imagenes</h4>
        <?php endif ?>
      </div>
      <div class="col-lg-4">
 
      </div>
    </div>
    <?php if ($laboratorio->laboratorio_personal): ?>
    <h5 class="text-muted" style="text-align: center;">
    Personal laboratorio</h5>
    <a class="btn btn-default pull-right animated fadeIn" href="<?php echo baseUrl ?>banco/laboratoriosPersonal/create/<?php echo $laboratorio->id ?>">  <i class="fa fa-plus text-primary"></i> Agregar Personal</a>
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