<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">DONANTE</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-5">
        <table class="table table-user-information panel panel-default">
          <tbody>
            <tr>
              <td><b>Nombre y Apellido:</b></td>
              <td><?php echo ucwords($donante->nombre_apellido) ?></td>
            </tr>
            <tr>
              <td><b>Cédula:</b></td>
              <td><?php echo $donante->cedula ?></td>
            </tr>
            <tr>
              <td><b>Email:</b></td>
              <td><?php echo $donante->email ?></td>
            </tr>
            <tr>
              <td><b>Telefono fijo:</b></td>
              <td><?php echo $donante->telefono_fijo ?></td>
            </tr>
            <tr>
              <td><b>Telefono celular:</b></td>
              <td><?php echo $donante->telefono_celular ?></td>
            </tr>
            <tr>
              <td><b>Direcíón:</b></td>
              <td>lorem</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-7">
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <?php if ($donante->estatus): ?>
                  <i class="fa fa-warning fa-2x text-warning"></i> <b>El paciente no tiene estatus asigando porque no ha hecho aun la serologia.</b>
                  <?php else: ?>
                  <i class="fa fa-warning fa-2x text-warning"></i> <b>El paciente no tiene estatus asigando porque no ha hecho aun la serologia.</b>
                  <?php endif ?>
                </div>
                <div class="col-lg-12">
                  <?php if ($donante->historia): ?>
                  <a class="btn btn-default" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                    <i class="fa fa-address-card-o fa-2x text-primary" aria-hidden="true"></i> Ver Historia
                  </a>
                  <?php else: ?>
                  <a class="btn btn-default" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                    <i class="fa fa-address-card-o fa-2x text-warning" aria-hidden="true"></i> Ingresar Historia
                  </a>
                  <?php endif ?>
                </div>
                <div class="col-lg-12">
                  <?php if ($donante->serologia): ?>
                  <a class="btn btn-primary" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                    <i class="fa fa-address-card-o fa-2x text-primary" aria-hidden="true"></i> Ver Serologia
                  </a>
                  <?php else: ?>
                  <a class="btn btn-default" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                    <i class="fa fa-user-md fa-2x" aria-hidden="true"></i> Ingresar Serologia
                  </a>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>