<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">DATOS DE PACIENTE</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-3 dl-horizontal">
        <dt>Nombre:</dt>
        <dd><?php echo $paciente->nombre ?> <?php echo $paciente->apellido ?></dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Cedula:</dt>
        <dd>C.I.<?php echo $paciente->cedula ?> </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Telefono:</dt>
        <dd><?php echo $paciente->telefono ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-3 dl-horizontal">
        <dt>Fecha nacimiento:</dt>
        <dd><?php echo $paciente->fecha_nacimiento ?> </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Edad:</dt>
        <dd>
        <?php list($dia,$mes,$ano) = explode('/',$paciente->fecha_nacimiento) ?>
        <?php echo \Carbon\Carbon::createFromDate($ano,$mes,$dia)->age;  ?>
        </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Sexo:</dt>
        <dd><?php echo $paciente->sexo ?> </dd>
      </div>
    </div>
    <hr>
    <?php if ($paciente->id_autorizado): ?>
    <a class="btn btn-info" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $paciente->autorizado->id ?>"><i class="fa fa-search"></i> Ver autorizado</a>
    <?php else: ?>
    <a class="btn btn-success" href="<?php echo $baseUrl ?>admin/solicitudes/create?id_paciente=<?php echo $paciente->id ?>"><i class="fa fa-plus"></i> CREAR SOLICITUD </a>
    <?php endif ?>
  </div>
</div>