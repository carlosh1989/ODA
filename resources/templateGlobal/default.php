<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Framework ODA</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/components-font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">

  <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-usb" aria-hidden="true"></i>

</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><i class="fa fa-usb" aria-hidden="true"></i>

</b>ODA </span>   </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
   

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo baseUrl ?>assets/img/system/avatar.png" class="user-image" alt="Imagen de Usuario">
              <span class="hidden-xs">Nombre de Usuario</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo baseUrl ?>assets/img/system/avatar.png" class="img-circle" alt="User Image">

                <p>
                  Nombre de Usuario
                </p>
              </li>
  
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo baseUrl ?>assets/img/system/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Nombre Usuario</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVEGACIÓN PRINCIPAL</li>
        <li class="active treeview">

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multinivel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Nivel Uno</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Nivel Uno
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Nivel Dos</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Nivel Dos
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Nivel Tres</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Nivel Tres</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Nivel Tres</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ODA Framework
        <small>HMVC</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
        <?php echo $content ?>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-chat" data-toggle="tab"><i class="fa fa-commenting-o"></i></a></li>
 <li><a href="#control-sidebar-config-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

    </ul>
    <!-- Tab panes -->
    <div class="tab-content">

   <!-- tab-pane. -->
      <div class="tab-pane active" id="control-sidebar-chat">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi dolorem consectetur excepturi, unde harum ad inventore, corporis doloremque neque praesentium cumque voluptatum laboriosam laudantium porro, necessitatibus vero, laborum quae officiis!

      </div>
      <!-- /.tab-pane -->

<div class="tab-pane" id="control-sidebar-config-tab">

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
    <li role="presentation" class="active"><a href="#Opciones" aria-controls="home" role="tab" data-toggle="tab">Layout</a></li>
    <li role="presentation"><a href="#Theme" aria-controls="profile" role="tab" data-toggle="tab">Theme</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Opciones">
       <h4 class="control-sidebar-heading">Opciones de Layout</h4>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            <input data-layout="fixed" class="pull-right" type="checkbox"> Fixed Layout</label>
        <p>Activa la fijación de layout. No puedes usar fixed and boxed layouts juntos.</p>
    </div>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            <input data-layout="layout-boxed" class="pull-right" type="checkbox"> Boxed Layout</label>
        <p>Activa la caja del layout</p>
    </div>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            <input data-layout="sidebar-collapse" class="pull-right" type="checkbox"> Toggle Sidebar</label>
        <p>Alternar el estado de la barra lateral izquierda (abrir o contraer)</p>
    </div>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            <input data-enable="expandOnHover" class="pull-right" type="checkbox"> Sidebar Expandir o Ocultar</label>
        <p>Deje que la barra lateral mini se expanda en vuelo fijo</p>
    </div>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            <input data-controlsidebar="control-sidebar-open" class="pull-right" type="checkbox"> Toggle Sidebar Derecho</label>
        <p>Alternar entre diapositivas sobre contenido y efectos de contenido de empuje</p>
    </div>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            <input data-sidebarskin="toggle" class="pull-right" type="checkbox"> Toggle Sidebar derecho Skin</label>
        <p>Alternar entre pieles oscuras y claras para la barra lateral derecha</p>
    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="Theme">
       <h4 class="control-sidebar-heading">Pieles</h4>
    <ul class="list-unstyled clearfix">
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin">Azul</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin">Negro</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin">Púrpura</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin">Verde</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin">Rojo</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin">Amarillo</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin" style="font-size: 12px">Azul Claro</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin" style="font-size: 12px">Negro Claro</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin" style="font-size: 12px">Púrpura Claro</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin" style="font-size: 12px">Verde Claro</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin" style="font-size: 12px">Rojo Claro</p>
        </li>
        <li style="float:left; width: 33.33333%; padding: 5px;">
            <a href="javascript:void(0);" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span>
                </div>
                <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                </div>
            </a>
            <p class="text-center no-margin" style="font-size: 12px;">Amarillo Claro</p>
        </li>
    </ul>
    </div>
  </div>

</div>

   
   
</div>

    </div>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- MENSAJES FLASH SWEET ALERT 2 -->
<?php if (Message::hasMessages()): ?>
  <?php echo Message::show() ?>  
<?php endif ?>


<!-- jQuery 2.2.3 -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo baseUrl ?>assets/bower/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo baseUrl ?>assets/bower/raphael-min/index.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo baseUrl ?>assets/bower/moment/min/moment.min.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo baseUrl ?>assets/bower/AdminLTE/dist/js/demo.js"></script>



<script>
  
</script>
</body>
</html>
