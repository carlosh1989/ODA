
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">PACIENTES</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/principal/busqueda" method="GET">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="number" name="cedula" placeholder="Ingrese Cédula" required>
          </div>
        </div>
        <div class="col-lg-1">
          <button type="submit" class="btn btn btn-primary"><i class="fa fa-search fa-2x"></i></button>
        </div>
      </div>
    </form>
    <br>
    <table id="tablePagination" class="table table-striped table-condensed table-responsive" data-striped="true">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cedula</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pacientes as $p): ?>
        <tr>
          <td><?php echo $p->nombre ?></td>
          <td><?php echo $p->apellido ?></td>
          <td><?php echo $p->cedula ?></td>
          <td width="15%">
            <!-- Single button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle fa fa-cog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $baseUrl ?>admin/pacientes/<?php echo $p->id ?>"> <b class="text-primary">VER DATOS <i class="fa fa-search"></i></b></a></li>
                <li> <a href="<?php echo $baseUrl ?>admin/pacientes/<?php echo $p->id ?>/edit"> <b class="text-success">EDITAR <i class="fa fa-pencil"></i></b></a></li></a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

