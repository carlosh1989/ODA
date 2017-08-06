
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">DONANTES DE SANGRE</h3>
  </div>
  <div class="panel-body">
      <form id="formulario" method="POST" action="<?php echo baseUrl ?>banco/donantes/busqueda">
        <?php echo Token::field() ?>
      <div class="col-md-12 animated fadeIn">
        <div class="col-lg-5">
          <div class="form-group">
            <input class="form-control" type="text" name="cedula" placeholder="Cédula" required>
          </div>
        </div>
        <div class="col-lg-1">
          <div class="form-group">
            <a class="btn btn-block btn-default animated" href="javascript:{}" onclick="$('#formulario').submit();"><i class="fa fa-search fa-2x text-primary"></i></a>
          </div>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-condensed table-responsive animated fadeIn" data-striped="true">
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
                    <li><a href="<?php echo $baseUrl ?>banco/donantes/<?php echo $c->id ?>"> <pre class="text-primary">VER DATOS <i class="fa fa-search"></i></pre></a></li>
                    <li> <a href="<?php echo $baseUrl ?>banco/donantes/<?php echo $c->id ?>/edit"> <pre class="text-success">EDITAR <i class="fa fa-pencil"></i></pre></a></li></a></li>
                    <li><a href="<?php echo $baseUrl ?>banco/donantes/<?php echo $c->id ?>/delete"><pre class="text-danger">ELIMINAR <i class="fa fa-times"></i></pre></a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>