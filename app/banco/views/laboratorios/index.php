    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Cuentas de banco de sangre</h3>
  </div>
  <div class="panel-body">
    <a class="btn btn-default" href="<?php echo baseUrl ?>banco/laboratorios/create">  <i class="fa fa-plus text-primary"></i> Agregar Laboratorio</a>
    <br><br>
    <table class="table table-striped table-condensed table-responsive" data-striped="true">
      <thead>
        <tr>
          <th>id</th>
          <th>Razon Social</th>
          <th>Email</th>
          <th>Dirección</th>
          <th>Telefono</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($laboratorios as $c): ?>
        <tr>
          <td><?php echo $c->id ?></td>
          <td><?php echo $c->razon_social ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->direccion ?></td>
          <td><?php echo $c->telefono ?></td>
          <td width="15%">
            <!-- Single button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle fa fa-cog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $baseUrl ?>banco/laboratorios/<?php echo $c->id ?>"> <pre class="text-primary">VER DATOS <i class="fa fa-search"></i></pre></a></li>
                <li> <a href="<?php echo $baseUrl ?>banco/laboratorios/<?php echo $c->id ?>/edit"> <pre class="text-success">EDITAR <i class="fa fa-pencil"></i></pre></a></li></a></li>
                <li><a href="<?php echo $baseUrl ?>banco/laboratorios/<?php echo $c->id ?>/delete"><pre class="text-danger">ELIMINAR <i class="fa fa-times"></i></pre></a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  </div> <!-- /.box-footer-->
</div>