<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!-- INCLUDE HEAD-->
    <head>
        <?php include_once("../head-pages.php"); ?>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">

	
	<!-- Google Analytics Tracking -->
	<?php include_once("../assets/php/analyticstracking.php") ?>
	
        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">    

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="../index.php">

                            <img src="../assets/images/logo-scroll.png" class="logo logo-display m-top-10" alt="">
                            <img src="../assets/images/logo-normal.png" class="logo logo-scrolled" alt="">

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">                  
                            <li><a href="#blog">.</a></li> 
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  
            </nav>


            <br/>
			<br/>
			<br/>
			
            <!--About Sections-->
            <section id="about" class="about roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-6">
                                <div class="about_content">
                                    <h2>EBOOK: Como se preparar para trabalhar em uma Startup</h2>
                                    <div class="separator_left"></div>
                                    <h4> Leia o E-Book!! </h4>
                                    <p>Esse E-book vai trazer para você uma nova percepçao de como anda o mercado,
                                    um novo jeito de pensar e uma nova forma de agir!!
                                    Deixe sua mochila para trás e experimente o novo jeito de aprender! </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
								
								<div class="col-md-12 lp-background-form">
									<form class="" action="../assets/php/save-lead-lp.php" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group text-center">
													<h3> Baixe gratuitamente!</h3>
													<br/>
													<p>Fique tranquilo! Nós odiamos SPAM tanto quanto você. 
													Seus dados estão seguros com a gente.</p>
													<br/>
												</div>
											</div>
											<div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <input id="name" name="name" type="text" placeholder="Nome" class="form-control" required="">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <input id="lastname" name="lastname" type="text" placeholder="Sobrenome" class="form-control" required="">
                                                </div>
                                            </div>

											<div class="col-sm-12">
												<div class="form-group">  
													<input id="email" name="email" type="text" placeholder="Email" class="form-control" required="required" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" />
												</div>
											</div>
											
											<div class="col-sm-12">
												<div class="form-group text-center">
													<input class="btn btn-primary btn-large" type="submit" value="RECEBER MATERIAL">
                                                    <input type="hidden" name="page-redirect" value="http://www.queroserumhulk.com.br/pages/lp-ebook-thankyou.php" />
                                                    <input type="hidden" name="source" value="form-ebook-page" />
												</div>
											</div>

                                            <div class="col-sm-12"><br/></div>

                                            <div class="col-sm-12">
                                                <div class="form-group text-center">
                                                    OBS.: O ebook será enviado em seu email!
                                                </div>
                                            </div>
										</div>
									</form>	
								</div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
             
				<br/>
				<br/>
				<br/>
			</section>
			
            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->


            <footer id="footer" class="footer bg-black">
                <div class="container">
                    <div class="row">
                        <div class="main_footer text-center p-top-40 p-bottom-30">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                Feito com 
                                <i class="fa fa-heart"></i>
                                por 
                                Gamáticos
                                2017. Todos os direitos reservados.
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

            <!-- JS includes -->

            <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
            <script src="../assets/js/vendor/bootstrap.min.js"></script>

            <script src="../assets/js/jquery.magnific-popup.js"></script>
            <script src="../assets/js/jquery.easing.1.3.js"></script>
            <script src="../assets/js/slick.min.js"></script>
            <script src="../assets/js/jquery.collapse.js"></script>
            <script src="../assets/js/bootsnav.js"></script>


            <!-- paradise slider js -->


            <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
            <script src="../assets/js/gmaps.min.js"></script>

            <script>
                            function showmap() {
                                var mapOptions = {
                                    zoom: 8,
                                    scrollwheel: false,
                                    center: new google.maps.LatLng(-34.397, 150.644),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                $('.mapheight').css('height', '350');
                                $('.maps_text h3').hide();
                            }

            </script>





            <script src="../assets/js/plugins.js"></script>
            <script src="../assets/js/main.js"></script>

    </body>
</html>
