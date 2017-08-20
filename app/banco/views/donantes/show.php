<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user fa-2x"></i>  <b><?php echo strtoupper($donante->cargo.' '.$donante->nombre_apellido) ?></b></h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn">
        <table class="table table-user-information panel panel-default animated fadeIn">
          <tbody>
            <tr>
              <td style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
              <td><?php echo ucwords($donante->nombre_apellido) ?></td>
            </tr>
            <tr>
              <td style="background: #E0E0E0;"><b><i class="fa fa-address-card"></i> Cédula:</b></td>
              <td><?php echo $donante->cedula ?></td>
            </tr>
            <tr>
              <td style="background: #E9E9E9;"><b><i class="fa fa-envelope"></i> Email:</b></td>
              <td><?php echo $donante->email ?></td>
            </tr>
            <tr>
              <td style="background: #E0E0E0;"><b><i class="fa fa-volume-control-phone"></i> Telefono Fijo:</b></td>
              <td><?php echo $donante->telefono_fijo ?></td>
            </tr>
            <tr>
              <td style="background: #E0E0E0;"><b><i class="fa fa-mobile"></i> Telefono Celular:</b></td>
              <td><?php echo $donante->telefono_celular ?></td>
            </tr>
            <tr>
              <td style="background: #E9E9E9;"><b><i class="fa fa-briefcase"></i> Cargo:</b></td>
              <td><?php echo ucfirst($donante->cargo) ?></td>
            </tr>
            <tr>
              <td style="background: #E9E9E9;"><b><i class="fa fa-map-signs"></i> Dirección:</b></td>
              <td><?php echo $donante->direccion ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6">
        <div class="panel panel-default animated fadeIn">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12 animated flash">
                <?php if ($donante->estatus): ?>
                <i class="fa fa-warning fa-2x text-warning animated tada"></i> <b>El paciente no tiene estatus asigando porque no ha hecho aun la serologia.</b>
                <?php else: ?>
                <i class="fa fa-warning fa-2x text-warning animated tada"></i> <b>El paciente no tiene estatus asigando porque no ha hecho aun la serologia.</b>
                <?php endif ?>
              </div>
              <div class="col-lg-12">
                <?php if ($donante->historia): ?>
                <a class="btn btn-default animated fadeInRight" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                  <i class="fa fa-address-card-o fa-2x text-primary" aria-hidden="true"></i> Ver Historia
                </a>
                <?php else: ?>
                <a class="btn btn-default animated fadeInRight" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                  <i class="fa fa-address-card-o fa-2x text-warning" aria-hidden="true"></i> Ingresar Historia
                </a>
                <?php endif ?>
              </div>
              <div class="col-lg-12">
                <?php if ($donante->serologia): ?>
                <a class="btn btn-primary animated fadeInUp" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
                  <i class="fa fa-address-card-o fa-2x text-primary" aria-hidden="true"></i> Ver Serologia
                </a>
                <?php else: ?>
                <a class="btn btn-default animated fadeInUp" href="<?php echo baseUrl ?>banco/historias/create/<?php echo $donante->id ?>">
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