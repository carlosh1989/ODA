<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Cuentas de banco de sangre</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <form id="formulario" method="POST" action="<?php echo baseUrl ?>laboratorio/donantes/busqueda">
      <?php echo Token::field() ?>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="cedula" placeholder="Cédula" required>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="form-group">
           <a class="btn btn-primary fa fa-search fa-2x" href="javascript:{}" onclick="$('#formulario').submit();"></a>
          </div>
        </div>
      </form>
      <div class="col-lg-6">
        <a class="btn btn-success pull-right" href="<?php echo baseUrl ?>laboratorio/donantes/create">  <i class="fa fa-plus"></i> Agregar Donante</a>
      </div>
    </div>
    <br><br>
    <table class="table table-striped table-condensed table-responsive" data-striped="true">
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Cédula</th>
          <th>Telefono celular</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($donantes as $c): ?>
        <tr>
          <td><?php echo $c->id ?></td>
          <td><?php echo $c->nombre_apellido ?></td>
          <td><?php echo $c->cedula ?></td>
          <td><?php echo $c->telefono_celular ?></td>
          <td width="15%">
            <!-- Single button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle fa fa-cog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $baseUrl ?>laboratorio/donantes/<?php echo $c->id ?>"> <pre class="text-primary">VER DATOS <i class="fa fa-search"></i></pre></a></li>
                <li> <a href="<?php echo $baseUrl ?>laboratorio/donantes/<?php echo $c->id ?>/edit"> <pre class="text-success">EDITAR <i class="fa fa-pencil"></i></pre></a></li></a></li>
                <li><a href="<?php echo $baseUrl ?>laboratorio/donantes/<?php echo $c->id ?>/delete"><pre class="text-danger">ELIMINAR <i class="fa fa-times"></i></pre></a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>