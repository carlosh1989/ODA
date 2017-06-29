<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">SOLICITUDES DE <b class="text-primary">
    <?php echo strtoupper($paciente->nombre).' '.strtoupper($paciente->apellido) ?>
    </b></h3>
  </div>
  <div class="panel-body">
    <table id="tablePagination" class="table table-striped table-condensed table-responsive" data-striped="true">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Proceso</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($paciente->solicitudes->sortByDesc('id') as $p): ?>
        <tr>
          <td><?php echo $p->fecha ?></td>
          <td>
            <?php if ($p->hematologia_resultados): ?>
            <i class="fa fa-check fa-2x text-success" aria-hidden="true"></i>
            <?php else: ?>
            <i class="fa fa-clock-o fa-2x text-primary" aria-hidden="true"></i>
            <?php endif ?>
          </td>
          <td width="15%">
            <!-- Single button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle fa fa-cog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $baseUrl ?>admin/solicitudes/<?php echo $p->id ?>"> <b class="text-primary">VER SOLICITUD <i class="fa fa-search"></i></b></a></li>
                <li> <a href="<?php echo $baseUrl ?>admin/pacientes/<?php echo $p->id ?>/edit"> <b class="text-success">EDITAR <i class="fa fa-pencil"></i></b></a></li></a></li>
                <li><a href="<?php echo $baseUrl ?>admin/pacientes/<?php echo $p->id ?>/delete"><b class="text-danger">ELIMINAR <i class="fa fa-times"></i></b></a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>