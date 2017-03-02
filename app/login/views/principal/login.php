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

</div>

 
<form action="<?php echo baseUrl ?>login/principal/csrf" method="POST">  
  <?php Token::field() ?>
  <input type="text" name="user" /><br/>
  <input type="text" name="password" />
  <br>
  <input type="submit" value="Login"/>
</form>

<i class="fa fa-user"></i>