
        <!-- Header -->
        <header style="background: #fff;background-image: url('http://barcelonamedicaldestination.com/wp-content/themes/bmdcustom/img/carousel/carousel_02.jpg');background-repeat: no-repeat;background-position: center center;background-attachment: fixed;background-size: cover;">
            <div class="container" id="maincontent" tabindex="-1">
                <div class="row">
                    <div class="col-lg-12">
                        <img width="200" class="img-responsive" src="<?php echo baseUrl ?>assets/img/doctor.png" alt="">
                        <div class="intro-text">
                            <h1 class="name">{{$titulo}}</h1>
                            <hr class="star-light">
                            <span class="skills">Donar es dar vida.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Portfolio Grid Section -->
        <section id="consulta">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Verifique su tipo de sangre</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="<?php echo baseUrl ?>home/principal/consultar" method="POST">
                        <?php echo Token::field(); ?>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cedula">Cédula</label>
                                    <input name="cedula" type="number" class="form-control" placeholder="Ingrese su Cedúla" id="cedula" required data-validation-required-message="Porfavor ingrese un cedula de identidad.">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg pull-right">Consultar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section class="success" id="laboratorios">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Laboratorios Inscritos al programa</h2>
                        <hr class="star-light">
                    </div>
                </div>
                <div class="row">
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJAW7MQOeI2ZgWp58Zdphfa9F7AQy3YRI&sensor=false&libraries=places"></script>
                    <div class="col-lg-12 text-center">
                        <div id="map" style="width: auto; height: 500px;"></div>
                    </div>
                    <script type="text/javascript">
                    var locations = [
                    <?php foreach (\App\Laboratorio::all() as $la): ?>
                    ['<?php echo $la->razon_social ?>','<?php echo $la->laboratorio_imagenes->first()->imagen_medio ?>','<?php echo baseUrl.''.$la->id ?>',<?php echo $la->lat ?>,<?php echo $la->lng ?>,'<?php echo $la->telefono ?>','<?php echo $la->email ?>'],
                    <?php endforeach ?>
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                    },
                    {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                    },
                    {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                    },
                    {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                    },
                    {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                    },
                    {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                    },
                    {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                    },
                    {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#746855'}]
                    },
                    {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                    },
                    {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#f3d19c'}]
                    },
                    {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                    },
                    {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                    },
                    {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#17263c'}]
                    },
                    {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                    },
                    {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                    }
                    ],
                    scrollwheel: false,
                    center: new google.maps.LatLng(8.5969467, -70.1872551,15),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                    var infowindow = new google.maps.InfoWindow();
                    var marker, i;
                    for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][3], locations[i][4]),
                    map: map
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                    infowindow.setContent(
                    '<div id="content">'+
                        '<h5 class="text-muted">'+locations[i][0]+'</h5>'+
                        '<hr>'+
                        '<img width="300px" src="'+locations[i][1]+'">'+
                        '<hr>'+
                        '<b class="text-justify text-muted"><i class="fa fa-phone"></i></b> '+'<label class="text-muted">'+locations[i][5]+'</label>'+
                        '<hr>'+
                        '<b class="text-justify text-muted"><i class="fa fa-envelope-o"></i></b> '+'<label class="text-muted">'+locations[i][6]+'</label>'+
                        '<hr>'
                        );
                        infowindow.open(map, marker);
                        }
                        })(marker, i));
                        }
                        </script>
                    </div>
                </div>
            </section>
            <!-- Contact Section -->
<!--             <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Contact Me</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                         <!--   <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="message">Message</label>
                                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br>
                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" class="btn btn-success btn-lg">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Footer -->
            <footer class="text-center">
                <div class="footer-above">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col col-md-4">
                                <h3>Localización</h3>
                                <p>Barinas,
                                <br>Hospital Luis Razzetti</p>
                            </div>
                            <div class="footer-col col-md-4">
                                <h3>ALREDEDOR DE LA WEB</h3>
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
                                <h3>Sobre Nosotros</h3>
                                <p>La Sociedad Venezolana de Hematología es una organización científica integrada por profesionales de la Hematología con el fin de promover el desarrollo de la especialidad, fomentar la investigación, la docencia y la práctica médica guiada por rigor científico y principios de bioética, para el beneficio de la población venezolana.</p>
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
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo baseUrl ?>assets/img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo baseUrl ?>assets/img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo baseUrl ?>assets/img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
