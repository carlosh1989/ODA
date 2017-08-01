<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">DATOS DE LABORATORIO</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Nombre:</dt>
        <dd><?php echo $usuario->name ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Cédula:</dt>
        <dd><?php echo $usuario->laboratorio_personal->cedula ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Email:</dt>
        <dd><?php echo $usuario->email ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono fijo:</dt>
        <dd><?php echo $usuario->laboratorio_personal->telefono_fijo ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono celular:</dt>
        <dd><?php echo $usuario->laboratorio_personal->telefono_celular ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Cargo:</dt>
        <dd><?php echo $usuario->laboratorio_personal->cargo ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Role:</dt>
        <dd><?php echo $usuario->role ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Dirección:</dt>
        <dd><?php echo $usuario->laboratorio_personal->direccion ?> </dd>
      </div>
    </div>
    <br>
    <hr>
  </div>
</div>