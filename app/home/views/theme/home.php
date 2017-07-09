<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Framework Shigoto</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap/dist/css/bootstrap.min.css">
    <!-- Theme CSS -->
    <link href="<?php echo baseUrl ?>assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Shigoto</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Documentación</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Acerca de</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo baseUrl ?>assets/img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name">Shigoto</h1>
                        <hr class="star-light">
                        <span class="skills">Development assistance framework</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Documentación</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                     <h3><center>Vista Global</center></h3>
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo baseUrl ?>assets/img/portfolio/cabin.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
<style type="text/css">
    .red{
        color:#FF7070;
    }
</style>
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Vista Global</h2>
                            <hr class="star-primary">

                        <div style="text-align: left; box-shadow: 0px 0px 4px #777;" class="modal-body">
                    
                        
                            <a href="#" style="font-size: 2em;"><center>App</center></a>
              
                            <b> Aqui se concentraran todos los modulos de tu aplicación web, ya que todos los modulos, los cuales tendran un flujo al estilo Hierarchical model–view–controller (HMVC) Eso quiere decir que cada modulo tiene sus propios.</b>
                            <hr>
                            <b class="red">CONTROLLERS</b>, los cuales serian el nucleo de la aplicación
                            <hr>
                            <b class="red">REPOSITORYS </b>, que no son mas que contenedores de los modelos y consultas a la base de datos.
                            <hr>
                            <b class="red">VIEWS</b>, es donde se encuentra las vistas y templates y todo lo que compete a diseño. 
                            <hr>
                            <b class="red">MODELS</b>, los modelos son si se podria decir las tablas virtuales de tu aplicación y estarian deplegadas en tu capreta APP.
                        </div>
                        <br><br>
                          <div style="text-align: left; box-shadow: 0px 0px 4px #777;" class="modal-body">
                    
                        
                            <a href="#" style="font-size: 2em;"><center>Assets</center></a>
                         <b>Aqui estaran ubicados todas las librerias estaticas de tu aplicación, imagenes, librerias, javascript, imagenes.</b>
                            <hr>
                            <b class="red">BOWER</b>, el framewrok viene por defecto con bower, asi que todas las librerias que instales mediante bower hara que dicha libreria se guarda en la carpeta con el mismo nombre, y se configure a la vez el archivo <b>bower.json</b>. 
                            <hr>
                            <b class="red">JS</b>, si usted no desea instalar librerias a travez de bower sientase en la libertad de ingresar en este directorio las que su proyecto vaya a usar.
                            <hr>
                            <b class="red">CSS</b>, diseño en cascada de el ssitema como tal, aunque puede agregar el de su proyecto.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- /container -->
      <!-- MENSAJES FLASH SWEET ALERT 2 -->
      <?php if (Message::hasMessages()): ?>
      <?php echo Message::show() ?>
      <?php endif ?>

      <?php if (Message::hasQuestion()): ?>
      <?php echo Message::showQuestion() ?>
      <?php endif ?>
    <!-- jQuery -->
    <script src="<?php echo baseUrl ?>assets/bower/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo baseUrl ?>assets/bower/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo baseUrl ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo baseUrl ?>assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo baseUrl ?>assets/js/freelancer.min.js"></script>

</body>
</html>
