<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">login</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo baseUrl ?>login/principal/verificar" method="POST">  
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text" name="clave" placeholder="Clave">
            <br><br>
            <button type="submit" class="btn btn-sm btn-success">Login</button>
          </form>
          <hr>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
</div>

<?php
session_start();
include 'csrf.class.php';
 
$csrf = new csrf();
 
 
// Genera un identificador y lo valida
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
 
// Genera nombres aleatorios para el formulario
$form_names = $csrf->form_names(array('user', 'password'), false);
 
 
if(isset($_POST[$form_names['user']], $_POST[$form_names['password']])) {
        // Revisa si el identificador y su valor son válidos.
        if($csrf->check_valid('post')) {
                // Get the Form Variables.
                $user = $_POST[$form_names['user']];
                $password = $_POST[$form_names['password']];
 
                // La función Form va aquí
        }
        // Regenera un valor aleatorio nuevo para el formulario.
        $form_names = $csrf->form_names(array('user', 'password'), true);
}
 
?>
 
<form action="index.php" method="post">
<input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
<input type="text" name="<?= $form_names['user']; ?>" /><br/>
<input type="text" name="<?= $form_names['password']; ?>" />
<input type="submit" value="Login"/>
</form>