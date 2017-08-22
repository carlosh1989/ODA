<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user fa-2x"></i>  <b><?php echo strtoupper($donante->cargo.' '.$donante->nombre_apellido) ?></b></h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12 animated fadeIn">
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
    </div>
  </div>
</div>

