<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Banco de Sangre</title>
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
        <style>
        .intro-text{
        color: #444;
        }
        </style>
        <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
        <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>
    </head>
    <body id="page-top" class="index">
        <div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
        <!-- Navigation -->
        <nav style="height: 70px;background: #3395FF;" id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <a style="position: absolute; margin-top: -30px;" class="navbar-brand" href="<?php echo baseUrl ?>home/principal"><i style="border-radius: 200px;border: 1px solid #777;padding: 25px;background: #fff;box-shadow:0px 0px 0px #555;background: #fff;color: #18BC9C;" class="fa fa-medkit fa-3x text-danger"></i></a>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <?php echo $content ?>
        <!-- /container -->
        <!-- MENSAJES FLASH SWEET ALERT 2 -->
        <?php if (Message::hasMessages()): ?>
        <?php echo Message::show() ?>
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