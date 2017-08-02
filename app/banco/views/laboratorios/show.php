  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">DATOS DE LABORATORIO</h3>
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
          <th>id</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($laboratorio->laboratorio_personal as $c): ?>
        <tr>
          <td><?php echo $c->id ?></td>
          <td><?php echo $c->nombre_apellido ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->telefono_celular ?></td>
          <td width="15%">
            <!-- Single button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle fa fa-cog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $baseUrl ?>banco/laboratoriosPersonal/<?php echo $c->id ?>"> <pre class="text-primary">VER DATOS <i class="fa fa-search"></i></pre></a></li>
                <li> <a href="<?php echo $baseUrl ?>banco/laboratoriosPersonal/<?php echo $c->id ?>/edit"> <pre class="text-success">EDITAR <i class="fa fa-pencil"></i></pre></a></li></a></li>
                <li><a href="<?php echo $baseUrl ?>banco/laboratoriosPersonal/<?php echo $c->id ?>/delete"><pre class="text-danger">ELIMINAR <i class="fa fa-times"></i></pre></a></li>
              </ul>
            </div>
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