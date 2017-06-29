<div class="panel panel-default">
<br>
  <div class="panel-heading">
    <h3 class="panel-title">USUARIOS</h3>
  </div>
  <div class="panel-body">
    <table class="table" data-striped="true">
      <thead>
        <tr>
          <th>id</th>
          <th>Usuario </th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>rol</th>
          <th>cargo</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $u): ?>
        <tr>
          <td><?php echo $u->id ?></td>
          <th><?php echo $u->usuario ?></th>
          <td><?php echo $u->nombre ?></td>
          <td><?php echo $u->apellido ?></td>
          <td><?php echo $u->rol ?></td>
          <td><?php echo $u->cargo ?></td>
          <td>
            <!--<a class="btn btn-primary fa fa-search" href="<?php echo $baseUrl ?>admin/usuario<?php echo $u->id ?>"></a>-->
            <a class="btn btn-info fa fa-pencil" href="<?php echo $baseUrl ?>admin/usuarios/<?php echo $u->id ?>/edit"></a>
            <a class="btn btn-danger fa fa-times" href="<?php echo $baseUrl ?>admin/usuarios/<?php echo $u->id ?>/delete"></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>