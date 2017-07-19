<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!-- INCLUDE HEAD-->
    <head>
        <?php include_once("head.php"); ?>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">

	
	<!-- Google Analytics Tracking -->
	<?php include_once("assets/php/analyticstracking.php") ?>

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
                        <a class="navbar-brand" href="index.php">

                            <img src="assets/images/logo-scroll.png" class="logo logo-display m-top-10" alt="">
                            <img src="assets/images/logo-normal.png" class="logo logo-scrolled" alt="">

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">                  
                            <li><a href="blog/posts.php">Blog</a></li> 
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  

            </nav>


            <!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="home_text">
                                <h1 class="text-white">TRANSFORME-SE <br/> NO HULK!</h1>
                                <h5 class="text-white">Quer elevar 5 anos de suas habilidades em 5 semanas?</h5>
                            </div>

                            <div class="home_btns m-top-40">
                                <a href="#contact" class="btn btn-primary m-top-20">PARTICIPE DA PRÓXIMA EDIÇÃO!</a>
                            </div>

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="about" class="about roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-6">
                                <div class="about_content">

									<h4>PORQUE VOCÊ VAI QUERER SE TRANSFORMAR NO HULK?</h4>
                                    <div class="separator_left"></div>

                                    <p> A tranformação é muito mais que ficar monstruosamente forte,
                                        é um exercício pra mente e pro corpo,
                                        é um treinamento para profissionais
									 que buscam se capacitar profissionalmente e trabalhar no mercado de Startups.
									
									<p>Nesse treinamento são selecionados os melhores talentos do mercado e complementamos sua
									formação com uma imersão de 5 semanas, com palestras de grandes 
									profissionais e CEO’s de diversas startups e aulas específicas nas 
									áreas de Programação (Hackers), Design (Hipsters), Business/Vendas (Hustlers)
									e Marketing Digital (Hypers). </p>
									
									<p>Ao fim do processo, acontece uma feira com as
									startups parceiras para que elas conheçam, entrevistem e até ofereçam 
									propostas de trabalho aos nossos talentos formados.</p>
																	

                                </div>
                            </div>
							<div class="col-md-6 m-top-50">
								<div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/193412143"></iframe>
            </div>
							</div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
                <br />
                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />
                <div class="container">
                    <div class="row">
						<h2>COMO FUNCIONA?</h2>
						<br/>
						<br/>
                        <div class="about_bottom_content">
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont">1</i>
                                        </div>
                                        <h6 class="m-top-20"> PROCESSO SELETIVO</h6>
                                    </div>
                                    <p class="m-top-20">Você participa de um processo seletivo
										online para que seja possível avaliar seu nível de conhecimento e
										nos ajudar durante o seu treinamento. Selecionamos 100
										talentos para próxima etapa.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont">2</i>
                                        </div>
                                        <h6 class="m-top-20">HARD TRAINING DE 5 SEMANAS</h6>
                                    </div>
                                    <p class="m-top-20"> Os 100 selecionados participam de uma preparação
										intensiva de 5 semanas com aulas e mentoria com os principais nomes do
										mercado digital. CEOs e líderes das maiores startups serão seus professores. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont">3</i>
                                        </div>
                                        <h6 class="m-top-20">FEIRA DE CONTRATAÇÃO</h6>
                                    </div>
                                    <p class="m-top-20">Os sobreviventes ao final das 5 semanas participam de uma
										feira de contratação na qual as principais startups do país vão para contratar
										você para a equipe. 8 em cada 10 são contratados! </p>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="container">
                    <div class="row">
						<h2>É PRA VOCÊ?</h2>
						Se você responder SIM para qualquer uma das perguntas abaixo, então é!
						<br/>
						<br/>
                        <div class="about_bottom_content">
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-question"></i>
                                    <h6 class="m-top-30">É graduando ou recém-formado?</h6>
                                 </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-question"></i>
                                    <h6 class="m-top-30">Deseja trabalhar em uma startup?</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-question"></i>
                                    <h6 class="m-top-30">Quer desenvolver suas habilidades técnicas?</h6>
								</div>
                            </div>
							<div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-question"></i>
                                    <h6 class="m-top-30">Quer criar um networking com profissionais fantásticos?</h6>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
				<div class="container">
                    <div class="row">
						<h2>ONDE ACONTECE?</h2>
						<br/>
						<br/>
                        <div class="about_bottom_content">
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-location-arrow"></i>
                                    <h6 class="m-top-30">SÃO PAULO</h6>
                                 </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-location-arrow"></i>
                                    <h6 class="m-top-30">RIO DE JANEIRO</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-location-arrow"></i>
                                    <h6 class="m-top-30">BELO HORIZONTE</h6>
								</div>
                            </div>
							<div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont icofont-location-arrow"></i>
                                    <h6 class="m-top-30">FLORIANÓPOLIS</h6>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off About section -->

			<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
            <!--CTA SECTION -->
            <section id="impress" class="impress roomy-100">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_impress text-center">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="text-white text-uppercase">Gostou? Participe da próxima edição</h2>

                                <div class="impress_btns m-top-30">
                                    <a href="#contact" class="btn btn-primary m-top-20">PARTICIPE DA PRÓXIMA EDIÇÃO!</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!-- End off CTA section-->
			
			            
            <!--Service Section-->
            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="main_service roomy-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="head_title text-center">
                                    <h2>QUAL O SEU PERFIL?</h2>
                                    <div class="separator_auto"></div>
                                    <p>Para o programa são selecionados 100 talentos dividos em 
										4 perfis de profissionais de acordo com a demanda do mercado. </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont"><img src="assets/images/stacks/stack-hustler.png" width="30%"/></i>
                                    <h6 class="m-top-30">HUSTLER</h6>
									Vendas
                                    <div class="separator_small"></div>
                                    <p>Você possui uma boa argumentação e tem um bom relacionamento com seus clientes 
									e sabe entendê-los rapidamente ? Participe do Quero ser um Hulk, seja um Hustler 
									e aprenda mais sobre Customer Success, Inside Sales, Spin Selling e muito mais!</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont"><img src="assets/images/stacks/stack-hyper.png" width="30%"/></i>
                                    <h6 class="m-top-30">HYPER</h6>
									Marketing
                                    <div class="separator_small"></div>
                                    <p>Redes sociais é sua ferramenta de trabalho ? Se sente confortável  com novas 
									tecnologias  e é criativo? Participe do Quero ser um Hulk, seja um Hyper e aumente 
									seu potencial! </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont"><img src="assets/images/stacks/stack-hipster.png" width="30%"/></i>
                                    <h6 class="m-top-30">HIPSTER</h6>
									Design
                                    <div class="separator_small"></div>
                                    <p>Briefing, Branding, Design de Interação, Design Thinking  fazem parte do seu dia 
									a dia? Sempre está sendo procurado para algumas alterações rápidas? É bom no que 
									você faz? Participe do Quero ser um Hulk, seja um Hipster e aprenda  Spin Selling, 
									Customer Success, Inside Sales e muito mais!</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="service_item">
                                    <i class="icofont"><img src="assets/images/stacks/stack-hacker.png" width="30%"/></i>
                                    <h6 class="m-top-30">HACKER</h6>
									Programação
                                    <div class="separator_small"></div>
                                    <p>Desenvolve  sites, blogs, aplicativos e sistemas. Programar e resolver bugs é sua 
									paixão ? Entender códigos é o seu forte ? Participe do Quero ser um Hulk, seja um 
									Hacker e aprenda Scrum, Desenvolvimento Ágil e diversas outras ferramentas e 
									metodologias!</p>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section> <!--End off Featured section-->


          	<!--client brand section-->
            <section id="cbrand" class="cbrand">
                <div class="container">
                    <div class="row">
						<div class="head_title text-center">
							<h2>DEPOIMENTOS</h2>
							<div class="separator_auto"></div>
						</div>
                        <div class="text-center">
                            <div class="col-md-6 text-center embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/eixv4NGpzlM" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <div class="col-md-6 text-center embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/wrNwIeaLDFU" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Cbrand section -->
			
			<!--Skill Sections-->
            <section id="skill" class="skill roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="skill_bottom_content text-center">
                            <div class="col-md-6">
                                <div class="skill_bottom_item">
                                    <h2 class="">700+</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Alunos formados</em></h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill_bottom_item">
                                    <h2 class="">82%</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>dos formados foram contratados</em></h5>
                                </div>
                            </div>

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Skill section -->

            <!--client brand section-->
            <section id="cbrand" class="cbrand">
                <div class="container">
                    <div class="head_title text-center">
                        <h2>QUEM JÁ CONTRATOU NOSSOS HULKS</h2>
                        <div class="separator_auto"></div>
                    </div>
                    <div class="row">
                        <div class="main_cbrand text-center roomy-100">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/sympla.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/rockcontent.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img class="" src="assets/images/clients/meliuz.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/sambatech.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/appprova.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/bancointer.png" alt="" /></a> 
                                </div>
                            </div>
                            
                            <br/><br/><br/><br/><br/>

                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/maxmilhas.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/tracksale.png" alt="" /></a> 
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/getninjas.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/stone.png" alt="" /></a> 
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="assets/images/clients/neon.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10 m-top-80">
                                    <a href=""><img src="assets/images/clients/solides.jpg" alt="" /></a> 
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Cbrand section -->
			
			<!--CTA SECTION --
            <section id="impress" class="impress roomy-100">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_impress text-center">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="text-white text-uppercase">Gostou? Participe da próxima edição</h2>

                                <div class="impress_btns m-top-30">
                                    <a href="#contact" class="btn btn-primary m-top-20">QUERO PARTICIPAR!</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row --
                </div><!--End off container --
            </section><!-- End off CTA section-->
			
			<!-- FAQ SECTION -->
			<div class="container">
                <div class="row">
                    <div class="main_featured m-top-100">
                        <div class="col-sm-12">
                            <div class="head_title text-center">
                                <h2>DÚVIDAS FREQUENTES</h2>
                                <div class="separator_auto"></div>
                                
                            </div>
							<div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                        <h6><i class="fa fa-angle-right"></i> Qual conteúdo do programa? </h6>
                                        <div>
                                            <div class="content">
                                                <p>O Programa contém conteúdos em três vertentes:</p>

                                                <p><b>Palestras com CEOs</b> – Você vai conhecer empreendedores que construíram suas
                                                startups e hoje são referência no mercado. Eles irão contar quais foram as dificuldades,
                                                desafios, aprendizados e sucessos que encontraram na sua jornada.</p>

                                                <p><b>Startup Mindset </b>– Aulas sobre ferramentas que as startups usam para definir e escalar seu negócio.
                                                    Conteúdos como Lean Startup, Canvas, MVP, entre outros.</p>

                                                <p><b>Aulas específicas por stacks </b>– Você terá aulas com profissionais de referência no mercado
                                                    que vão ensinar tudo que aprenderam na prática. Esses são alguns exemplos das aulas específicas:</p>
                                                <ul>

                                                <b><li>Hackers</b> – Agile Development/Scrum, Arquiteturas de desenvolvimento web e mobile.</li>
                                                <b><li>Hipsters</b> – Design Thinking, Branding e UX Design.</li>
                                                <b><li>Hustlers</b> – Inside Sales, Outbound Sales.</li>
                                                <b><li>Hypers</b> – Inbound Marketing,Growth Hacking.</li>
                                                </ul>
                                                </p>

                                            </div>
                                        </div> <!-- End off accordion item-1 -->

                                        <h6 class="open"><i class="fa fa-angle-right"></i>Existe restriçōes para participar? </h6>
                                        <div class="open">
                                            <div class="content">
                                                <p>Não. A única exigência é ter conhecimentos prévios sobre a stack escolhida.
                                                    Não precisa ser mestre, mas é importante ter uma base. Isso é importante para que você consiga aproveitar de forma mais eficaz os conteúdos do programa.</p>

                                                    <p>Em média, os participantes do programa são universitários ou recém-formados há até dois anos,
                                                    se esse não for o seu caso, não tem problema! O importante é o alinhamento com a turma quanto às expectativas e conteúdo do programa. </p>
                                            </div>
                                        </div> <!-- End off accordion item-2 -->

                                        <h6> <i class="fa fa-angle-right"></i> Receberei um Certificado apōs o programa? </h6>
                                        <div>
                                            <div class="content">
                                                <p>Sim! Se você resistir às 5 semanas do programa, você receberá um certificado que contém tudo que você aprendeu e a carga horária.</p>
                                            </div>
                                        </div> <!-- End off accordion item-3 -->

                                        <h6><i class="fa fa-angle-right"></i> Eu serei contratado? </h6>
                                        <div>
                                            <div class="content">
                                                <p> O programa busca fazer um treinamento com o máximo de excelência. Por isso é oferecido aulas com profissionais de extrema
                                                    importância no mercado para transmitir conteúdos de qualidade, que sejam absorvidos e de fato mudem a vida
                                                    de nossos alunos e os capacitem para disputar as vagas de emprego nas startups. A feira que ocorrerá com as
                                                    startups parceiras ao final do programa, tem o intuito de proporcionar essas contratações, no entanto, cada empresa
                                                    tem seu processo de contratação, fit cultural e skills necessários. Se esforce ao máximo durante o treinamento
                                                    para que essas startups vejam o resultado do seu trabalho. </p>
                                            </div>
                                        </div> <!-- End off accordion item-4 -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <br/>
			<br/>
			<br/>
			<br/>
			<br/>
            <!--Contact Us Section-->
            <section id="contact" class="contact bg-mega fix">
                <div class="container">
                    <div class="row">
                        <div class="main_contact roomy-100 text-white">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6 sm-m-top-30">
								<h3>Participe da próxima edição</h3>
								<br/>
                                <form class="" action="assets/php/save-lead-index.php" method="post">
                                    <div class="row">
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
                                            <div class="form-group">  
                                                <select id="stack" name="stack" class="form-control">
													<option value="Hustler"> HUSTLER (Negócios / Vendas) </option>
													<option value="Hyper"> HYPER (Marketing)</option>
													<option value="Hipster"> HIPSTER (Design) </option>
													<option value="Hacker"> HACKER (Programação) </option>
												</select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group text-center">
                                                <input type="hidden" name="source" value="form-home-page" />
                                                <input class="btn btn-primary btn-large" type="submit" value="QUERO SABER MAIS">
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->


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

            <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
            <script src="assets/js/vendor/bootstrap.min.js"></script>

            <script src="assets/js/jquery.magnific-popup.js"></script>
            <script src="assets/js/jquery.easing.1.3.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.collapse.js"></script>
            <script src="assets/js/bootsnav.js"></script>


            <!-- paradise slider js -->


            <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
            <script src="assets/js/gmaps.min.js"></script>

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





            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
