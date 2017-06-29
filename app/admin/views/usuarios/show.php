<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">USUARIO</h3>
  </div>
  <div class="panel-body">
    <h4>Usuario: <?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?> </h4>
    <hr>
    <div class="row">
      <div class="col-lg-3 dl-horizontal">
        <dt>usuario:</dt>
        <dd><?php echo $usuario->usuario ?></dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>cargo:</dt>
        <dd><?php echo $usuario->cargo ?></dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>rol:</dt>
        <dd><?php echo $usuario->rol?> </dd>
      </div>
    </div>
    <br>
  </div>
</div>