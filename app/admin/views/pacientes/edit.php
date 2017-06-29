<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-muted">INGRESAR PACIENTE</h3>
  </div>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/pacientes/<?php echo $paciente->id ?>" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="number" name="cedula" placeholder="Ingrese Cedula" value="<?php echo $paciente->cedula ?>" required>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="apellido" placeholder="Ingrese Apellido" value="<?php echo $paciente->apellido ?>" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese Nombre" value="<?php echo $paciente->nombre ?>" required>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" data-mask="99/99/9999" type="text" name="fecha_nacimiento" value="<?php echo $paciente->fecha_nacimiento ?>" placeholder="Fecha nacimiento" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select class="form-control" name="sexo" id="" required>
            <?php if ($paciente->sexo == 'Masculino'): ?>
              <option value="Masculino">Masculino</option>
            <?php else: ?>
              <option value="Femenino">Femenino</option>
            <?php endif ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="number" name="telefono" placeholder="Ingrese telefono" value="<?php echo $paciente->telefono ?>" required>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-12">
          <textarea placeholder="Dirección" class="form-control" name="direccion">
            <?php echo $paciente->direccion ?>
          </textarea>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>