
        <!-- Portfolio Grid Section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>LOGIN</h3>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="<?php echo baseUrl ?>auth/login/verificar" method="POST" >
                        <?php echo Token::field() ?>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">EMAIL</label>
                                    <input name="username" type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Ingrese email de sessión.">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="password">CLAVE</label>
                                    <input name="password" type="password" class="form-control" placeholder="Clave" id="password" required data-validation-required-message="Ingrese su clave de sessión.">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg pull-right">Aceptar</button>
                                </div>
                            </div>
                        </form>
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