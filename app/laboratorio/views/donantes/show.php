<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
    DATOS DE DONANTE
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Nombre:</dt>
        <dd><?php echo $donante->nombre_apellido ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Cédula:</dt>
        <dd><?php echo $donante->cedula ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Email:</dt>
        <dd><?php echo $donante->email ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono fijo:</dt>
        <dd><?php echo $donante->telefono_fijo ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono celular:</dt>
        <dd><?php echo $donante->telefono_celular ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Dirección:</dt>
        <dd><?php echo $donante->direccion ?> </dd>
      </div>
    </div>
  </div>
</div>

