<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['assunto']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "form@produceria.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "trafego@produceria.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato formmail"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Assunto = $assunto \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>Produceria</title>

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="57x57" href="favicon.ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon.ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon.ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon.ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon.ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon.ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon.ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon.ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon.ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon.ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico/favicon-16x16.png">
  <link rel="manifest" href="favicon.ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon.ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/linecons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">

  <!-- FONT -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

  <!-- JS -->
  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>

  <script type="text/javascript">
   $(document).ready(function(e) {
    $('.res-nav_click').click(function(){
      $('ul.toggle').slideToggle(600)	
    });	

    $(document).ready(function() {
      $(window).bind('scroll', function() {
       if ($(window).scrollTop() > 0) {
         $('#header_outer').addClass('fixed');
       }
       else {
         $('#header_outer').removeClass('fixed');
       }
     });

    });


  });	
   function resizeText() {
     var preferredWidth = 767;
     var displayWidth = window.innerWidth;
     var percentage = displayWidth / preferredWidth;
     var fontsizetitle = 25;
     var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
     $(".divclass").css("font-size", newFontSizeTitle)
   }
 </script>
</head>
<body>
  
  

  <!--Header_section-->
  <header id="header_outer">
    <div class="container">
      <div class="header_section">
        <div class="logo fadeInDown animated"><a href="#top_content"><img src="img/produceria-logo.png" alt=""></a></div>
        <nav class="nav" id="nav">
          <ul class="toggle">
            <li><a href="http://localhost/SiteProduceria/index.php#top_content">Home</a></li>
            <li><a href="http://localhost/SiteProduceria/index.php#service">Serviços</a></li>
            <li><a href="http://localhost/SiteProduceria/index.php#work_outer">Trabalhos</a></li>
            <li><a href="http://localhost/SiteProduceria/index.php#Portfolio">Portifólio</a></li>
            <li><a href="http://localhost/SiteProduceria/index.php#client_outer">Sobre Nós</a></li>
            <li><a href="http://localhost/SiteProduceria/index.php#team">Equipe</a></li>
            <li><a href="http://localhost/SiteProduceria/index.php#contact">Contato</a></li>
          </ul>
          <ul class="">
            <li><a href="#top_content">Home</a></li>
            <li><a href="#service">Serviços</a></li>
            <li><a href="#work_outer">Trabalhos</a></li>
            <li><a href="#Portfolio">Portifólio</a></li>
            <li><a href="#client_outer">Sobre Nós</a></li>
            <li><a href="#team">Equipe</a></li>
            <li><a href="#contact">Contato</a></li>
          </ul>
        </nav>
        <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a>
      </div>
    </div>
  </header>
  <!--Header_section--> 

  <!--Top_content-->
  <section id="top_content" class="top_cont_outer">
    <div class="top_cont_inner fadeInRight animated">
      <div class="container">
        <div class="top_content">
          <div class="row">
            <div class="col-lg-5 col-sm-7">
              <div class="top_left_cont flipInY wow animated">
                <h3>Produção Full Service</h3>
                <h2>Depois da criação
                vem a Produceria!</h2>
                <p>A Produceria é uma equipe-beta de profissionais, com uma abordagem única de produção, remodelando função através de processos e suas variadas aplicações.</p>
                <a href="#service" class="learn_more2">Saiba mais</a> </div>
              </div>
              <div class="col-lg-7 col-sm-5"> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Top_content--> 

    <!--Service-->
    <section  id="service">
      <div class="container">
        <h2>Serviços</h2>
        <div class="service_area">
          <div class="row">
            <div class="col-lg-3">
              <div class="service_block">
                <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa-star"></i></span> </div>
                <h3 class="animated fadeInUp wow">Projetos Especiais</h3>
                <p class="animated fadeInDown wow">Toda e qualquer ideia-demanda que excede as técnicas conhecidas, ou que requeira um tratamento de produção diferenciado.</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_block">
                <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa-sitemap"></i></span> </div>
                <h3 class="animated fadeInUp wow">Projetos Estruturais</h3>
                <p class="animated fadeInDown wow">Análise interna da área de produção, detecção de pontos frágeis, desde equipe a processos e proposta de estruturação às necessidades.</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_block">
                <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa-print"></i></span> </div>
                <h3 class="animated fadeInUp wow">Projetos Gráficos</h3>
                <p class="animated fadeInDown wow">Um execelente design precisa ser complementado com uma ótima técnica de produção gráfica. Nossa equipe de projeto irá ajudá-lo a desenvolvê-lo.</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_block">
                <div class="service_icon icon4  delay-03s animated wow zoomIn"> <span><i class="fa-code"></i></span> </div>
                <h3 class="animated fadeInUp wow">Projetos Digitais</h3>
                <p class="animated fadeInDown wow">Vamos ajudá-lo desde a ideia até a aplicação final. Desenvolvemos para web com foco em design, conteúdo e uma excelente experiência do usuário.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Service-->

    <section id="work_outer"><!--main-section-start-->
      <div class="top_cont_latest fadeInRight animated">
        <div class="container">
          <h2>Trabalhos</h2>
          <div class="work_section">
            <div class="row">
              <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
                <div class="service-list">
                  <div class="service-list-col1"> <i class="icon-doc"></i> </div>
                  <div class="service-list-col2">
                    <h3>Mídia Impressa</h3>
                    <p>Produzimos para veículos de comunicação como jornais, revistas, informativos, ou em peças avulsas como flyers, folders, mala-direta, etc.</p>
                  </div>
                </div>
                <div class="service-list">
                  <div class="service-list-col1"> <i class="icon-photo"></i> </div>
                  <div class="service-list-col2">
                    <h3>Mídia Exterior</h3>
                    <p>Produzimos para exibidoras de out of home como relógios de rua, mobiliário urbano, estações de metro e trem, outdoors, frontlight, backlight, etc.</p>
                  </div>
                </div>
                <div class="service-list">
                  <div class="service-list-col1"> <i class="icon-desktop"></i> </div>
                  <div class="service-list-col2">
                    <h3>Mídia Digital</h3>
                    <p>Produzimos para mídias digitais, peças animadas ou estáticas, desenvolvemos para web e-mail marketing, landing pages, websites, etc.</p>
                  </div>
                </div>
                <div class="service-list">
                  <div class="service-list-col1"> <i class="icon-videocam"></i> </div>
                  <div class="service-list-col2">
                    <h3>Motion & Filme</h3>
                    <p>Produzimos materiais em motion graphics, 3D estáticas ou animadas, edição com intercessões entre as técnicas, etc.</p>
                  </div>
                </div>
                <div class="service-list">
                  <div class="service-list-col1"> <i class="icon-star"></i> </div>
                  <div class="service-list-col2">
                    <h3>Projetos Especiais</h3>
                    <p>Produzimos materiais especiais que podem ser feitos em diversos substratos papéis, plásticos, adesivos, madeira, etc.</p>
                  </div>
                </div>
                <div class="work_bottom"> <span>Pronto para produzir?</span> <a href="#contact" class="contact_btn">Fale conosco</a> </div>
              </div>
              <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
            </div>
          </div>
        </div>
        <!-- <div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div> -->
      </div>
    </section>
    <!--main-section-end--> 

    <!--new_portfolio--> 

    <!-- Portfolio -->
    <section id="Portfolio" class="content"> 

      <!-- Container -->
      <div class="container portfolio-title"> 

        <!-- Section Title -->
        <div class="section-title">
          <h2>Portifólio</h2>
        </div>
        <!--/Section Title --> 

      </div>
      <!-- Container -->

      <div class="portfolio-top"></div>

      <!-- Portfolio Plus Filters -->
      <div class="portfolio"> 

        <!-- Portfolio Filters -->
        <div id="filters" class="sixteen columns">
          <ul class="clearfix">
            <li><a id="all" href="#" data-filter="*" class="active">
              <h5>All</h5>
            </a></li>
            <li><a class="" href="#" data-filter=".midiaImpressa">
              <h5>Mídia Impressa</h5>
            </a></li>
            <li><a class="" href="#" data-filter=".midiaExterior">
              <h5>Mídia Exterior</h5>
            </a></li>
            <li><a class="" href="#" data-filter=".midiaDigital">
              <h5>Mídia Digital</h5>
            </a></li>
            <li><a class="" href="#" data-filter=".motionGraphics">
              <h5>Motion & Filme</h5>
            </a></li>
            <li><a class="" href="#" data-filter=".projetosEspeciais">
              <h5>Projetos Especiais</h5>
            </a></li>
          </ul>
        </div>
        <!--/Portfolio Filters --> 

        <!-- Portfolio Wrap -->
        <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap"> 

          <!-- Portfolio - A Raquete do Jogo  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaDigital isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-a-raquete-do-jogo-ldc-guga-kuerten.jpg"  alt="A Raquete do Jogo"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-a-raquete-do-jogo-modal">
                  <h4 class="project-name">A Raquete do Jogo</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - A Raquete do Jogo  -->

          <!-- Portfolio - Mub Perfumado  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaExterior isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-mub-perfumado-ldc-loccitane.jpg"  alt="Mub Perfumado"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-mub-perfumado-modal">
                  <h4 class="project-name">Mub Perfumado</h4>
                  <p class="project-categories">Mídia Exterior</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Mub Perfumado  -->

          <!-- Portfolio - Zoetrope Olinda  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais motionGraphics isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-zoetrope-olinda-ldc-loccitane.jpg"  alt="Zoetrope Olinda"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-zoetrope-olinda-modal">
                  <h4 class="project-name">Zoetrope Olinda</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Zoetrope Olinda  -->

          <!-- Portfolio - A Livraria Vazia  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais motionGraphics isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-a-livraria-vazia-loducca-shopping-villa-lobos.jpg"  alt="A Livraria Vazia"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-a-livraria-vazia-modal">
                  <h4 class="project-name">A Livraria Vazia</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - A Livraria Vazia  -->

          <!-- Portfolio - Cada Gota Conta  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-cada-gota-conta-loducca-bodytech.jpg"  alt="Cada Gota Conta"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-cada-gota-conta-modal">
                  <h4 class="project-name">Cada Gota Conta</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Cada Gota Conta  -->

          <!-- Portfolio - Balões - A Música não para  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais motionGraphics isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-baloes-a-musica-nao-para-loducca-mtv.jpg"  alt="Balões - A Música não para"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-baloes-a-musica-nao-para-modal">
                  <h4 class="project-name">Balões - A Música não para</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Balões - A Música não para  -->

          <!-- Portfolio - Green Picks Recycle Machine  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-green-picks-recycle-machine-loducca-mtv.jpg"  alt="Green Picks Recycle Machine"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-green-picks-recycle-machine-modal">
                  <h4 class="project-name">Green Picks Recycle Machine</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Green Picks Recycle Machine  -->

          <!-- Portfolio - Anúncio com Bafômetro  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-anuncio-com-bafometro-loducca-ccr.jpg"  alt="Anúncio com Bafômetro"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-anuncio-com-bafometro-modal">
                  <h4 class="project-name">Anúncio com Bafômetro</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Anúncio com Bafômetro  -->

          <!-- Portfolio - Anúncio de Asfalto  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-anuncio-de-asfalto-loducca-ccr.jpg"  alt="Anúncio de Asfalto"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-anuncio-de-asfalto-modal">
                  <h4 class="project-name">Anúncio de Asfalto</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Anúncio de Asfalto  -->

          <!-- Portfolio - Movimento CYAN  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa midiaDigital isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-movimento-cyan-loducca-ambev.jpg"  alt="Movimento CYAN"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-movimento-cyan-modal">
                  <h4 class="project-name">Movimento CYAN</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Movimento CYAN  -->

          <!-- Portfolio - Anúncio com Airbag  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-anuncio-com-airbag-loducca-peugeot.jpg"  alt="Anúncio com Airbag"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-anuncio-com-airbag-modal">
                  <h4 class="project-name">Anúncio com Airbag</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Anúncio com Airbag  -->

          <!-- Portfolio - Anúncio Comestível  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-anuncio-comestivel-loducca-mtv.jpg"  alt="Anúncio Comestível"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-anuncio-comestivel-modal">
                  <h4 class="project-name">Anúncio Comestível</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Anúncio Comestível  -->

          <!-- Portfolio - Anúncio de Parafina  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-anuncio-de-parafina-loducca-peugeot.jpg"  alt="Anúncio de Parafina"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-anuncio-de-parafina-modal">
                  <h4 class="project-name">Anúncio de Parafina</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Anúncio de Parafina  -->

          <!-- Portfolio - Cinta que Liga  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-cinta-que-liga-loducca-nextel.jpg"  alt="Cinta que Liga"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-cinta-que-liga-modal">
                  <h4 class="project-name">Cinta que Liga</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Cinta que Liga  -->

          <!-- Portfolio - Anúncio de Pano  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-anuncio-de-pano-loducca-coquel.jpg"  alt="Anúncio de Pano"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-anuncio-de-pano-modal">
                  <h4 class="project-name">Anúncio de Pano</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Anúncio de Pano  -->

          <!-- Portfolio - Cinta Alarme  -->
          <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four projetosEspeciais midiaImpressa isotope-item">
            <div class="portfolio-image"> <img src="img/projeto-especial-cinta-alarme-loducca-fort-knox.jpg"  alt="Cinta Alarme"> </div>
            <div class="project-overlay">
              <div class="project-info">
                <div class="zoom-icon"></div>
                <a data-toggle="modal" data-target=".bs-cinta-alarme-modal">
                  <h4 class="project-name">Cinta Alarme</h4>
                  <p class="project-categories">Projeto Especial</p>
                </a>
              </div>
            </div>
          </div>
          <!--/Portfolio - Cinta Alarme  -->
        </div>
        <!--/Portfolio Wrap --> 
      </div>

      <!-- Potifolio Modal - A Raquete do Jogo-->
      <div class="modal fade bs-a-raquete-do-jogo-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="a-raquete-do-jogo-modal">A Raquete do Jogo</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-a-raquete-do-jogo-ldc-guga-kuerten.jpg"  alt="A Raquete do Jogo" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/cEP_jcTzTEo?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>  
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Guga Kuerten</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>A Raquete do Jogo</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>LDC</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Exposição, Internet, TV, Anúncio Jornal e Revista</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - A Raquete do Jogo-->

      <!-- Potifolio Modal - Mub Perfumado-->
      <div class="modal fade bs-mub-perfumado-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="mub-perfumado-modal">MUB Perfumado</h4>
            </div>
            <div class="modal-body">  
              <img src="img/projeto-especial-mub-perfumado-ldc-loccitane.jpg"  alt="Mub Perfumado" class="center-block img-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>L’Occitane</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>MUB Perfumado</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>LDC</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Out of Home - Ponto de Onibus - Exibidora Otima</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Mub Perfumado-->

      <!-- Potifolio Modal - Zoetrope Olinda-->
      <div class="modal fade bs-zoetrope-olinda-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="zoetrope-olinda-modal">Zoetrope Olinda</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-zoetrope-olinda-ldc-loccitane.jpg"  alt="Zoetrope Olinda" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/pDNVsJhyVOc?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>  
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>L’Occitane</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Zoetrope Olinda</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>LDC</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Exposição - Internet - Ação Solidária</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Zoetrope Olinda-->

      <!-- Potifolio Modal - A Livraria Vazia-->
      <div class="modal fade bs-a-livraria-vazia-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="a-livraria-vazia-modal">A Livraria Vazia</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-a-livraria-vazia-loducca-shopping-villa-lobos.jpg"  alt="A Livraria Vazia" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/O-pN4ywfInw?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>  
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Shopping Villa Lobos</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>A Livraria Vazia</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Exposição - Internet - Ação Solidária</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - A Livraria Vazia-->

      <!-- Potifolio Modal - Cada Gota Conta-->
      <div class="modal fade bs-cada-gota-conta-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="cada-gota-conta-modal">Cada Gota Conta</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-cada-gota-conta-loducca-bodytech.jpg"  alt="Cada Gota Conta" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe src="https://player.vimeo.com/video/101249927" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Bodytech</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Cada Gota Conta</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Cada Gota Conta-->

      <!-- Potifolio Modal - Balões - A Música não para-->
      <div class="modal fade bs-baloes-a-musica-nao-para-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="baloes-a-musica-nao-para-modal">Balões - A Música não para</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-baloes-a-musica-nao-para-loducca-mtv.jpg"  alt="Balões - A Música não para" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/hEu2hfSukec?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>MTV</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Balões - A Música não para</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Balões - A Música não para-->

      <!-- Potifolio Modal - Green Picks Recycle Machine-->
      <div class="modal fade bs-green-picks-recycle-machine-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="green-picks-recycle-machine-modal">Green Picks Recycle Machine</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-green-picks-recycle-machine-loducca-mtv.jpg"  alt="Green Picks Recycle Machine" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/et7QGMouFxw?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>MTV</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Green Picks Recycle Machine</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Green Picks Recycle Machine-->

      <!-- Potifolio Modal - Anúncio com Bafômetro-->
      <div class="modal fade bs-anuncio-com-bafometro-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="anuncio-com-bafometro-modal">Anúncio com Bafômetro</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-anuncio-com-bafometro-loducca-ccr.jpg"  alt="Anúncio com Bafômetro" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/AnNYCk3eLyg?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>CCR</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Anúncio com Bafômetro</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Anúncio com Bafômetro-->

      <!-- Potifolio Modal - Anúncio de Asfalto-->
      <div class="modal fade bs-anuncio-de-asfalto-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="anuncio-de-asfalto-modal">Anúncio de Asfalto</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-anuncio-de-asfalto-loducca-ccr.jpg"  alt="Anúncio de Asfalto" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/sAs1JlsCGIM?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>CCR</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Anúncio de Asfalto</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Anúncio de Asfalto-->

      <!-- Potifolio Modal - Movimento CYAN-->
      <div class="modal fade bs-movimento-cyan-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="movimento-cyan-modal">Movimento CYAN</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-movimento-cyan-loducca-ambev.jpg"  alt="Movimento CYAN" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/-WrQXETQ-CI?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>AMBEV</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Movimento CYAN</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Movimento CYAN-->

      <!-- Potifolio Modal - Anúncio com Airbag-->
      <div class="modal fade bs-anuncio-com-airbag-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="anuncio-com-airbag-modal">Anúncio com Airbag</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-anuncio-com-airbag-loducca-peugeot.jpg"  alt="Anúncio com Airbag" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/wlzyU-cjork?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Peugeot</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Anúncio com Airbag</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Anúncio com Airbag-->

      <!-- Potifolio Modal - Anúncio Comestível-->
      <div class="modal fade bs-anuncio-comestivel-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="anuncio-comestivel-modal">Anúncio Comestível</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-anuncio-comestivel-loducca-mtv.jpg"  alt="Anúncio Comestível" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/ZFdejdwRRT0?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>MTV</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Anúncio Comestível</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Anúncio Comestível-->

      <!-- Potifolio Modal - Anúncio de Parafina-->
      <div class="modal fade bs-anuncio-de-parafina-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="anuncio-de-parafina-modal">Anúncio de Parafina</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-anuncio-de-parafina-loducca-peugeot.jpg"  alt="Anúncio de Parafina" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/iy_J-OKcuBw?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Peugeot</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Anúncio de Parafina</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Anúncio de Parafina-->

      <!-- Potifolio Modal - Cinta que Liga-->
      <div class="modal fade bs-cinta-que-liga-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="cinta-que-liga-modal">Cinta que Liga</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-cinta-que-liga-loducca-nextel.jpg"  alt="Cinta que Liga" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/9HnouFYvozk?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Nextel</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Cinta que Liga</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Cinta que Liga-->

      <!-- Potifolio Modal - Anúncio de Pano-->
      <div class="modal fade bs-anuncio-de-pano-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="anuncio-de-pano-modal">Anúncio de Pano</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-anuncio-de-pano-loducca-coquel.jpg"  alt="Anúncio de Pano" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/oJuGsJMdE74?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Coquel</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Anúncio de Pano</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Anúncio de Pano-->

      <!-- Potifolio Modal - Cinta Alarme-->
      <div class="modal fade bs-cinta-alarme-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="cinta-alarme-modal">Cinta Alarme</h4>
            </div>
            <div class="modal-body">  
              <!-- <img src="img/projeto-especial-cinta-alarme-loducca-fort-knox.jpg"  alt="Cinta Alarme" class="center-block img-responsive"> -->
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/MlVTTfbdXHk?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="100px">Ficha Técnica</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Cliente</th>
                    <td>Fort Knox</td>
                  </tr>
                  <tr>
                    <th>Título</th>
                    <td>Cinta Alarme</td>
                  </tr>
                  <tr>
                    <th>Agência</th>
                    <td>Loducca</td>
                  </tr>
                  <tr>
                    <th>Mídia</th>
                    <td>Educação Ambiental - TV - Internet</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Potifolio Modal - Cinta Alarme-->

      <!--/Portfolio Plus Filters -->
      <div class="portfolio-bottom"></div>

      <!-- Project Page Holder-->
      <div id="project-page-holder">
        <div class="clear"></div>
        <div id="project-page-data"></div>
      </div>
      <!--/Project Page Holder--> 

    </section>
    <!--/Portfolio --> 


    <section class="main-section" id="client_outer"><!--main-section client-part-start-->
      <h2>Sobre Nós</h2>
      <h6>Somos a Produceria. Simples assim!</h6><br>
      <h6 class="text-left">Aqui, o negócio é viabilizar as criações dos nossos clientes, projetos especiais, projetos estruturais, projetos gráficos e projetos digitais.<br><br>
        Uma turma de profissionais maduros, com expertise em todos os processos de produção, desde a entrada até a entrega, equipe preparada para definir e executar as melhores estratégias de produção para sua empresa. E se for algo bem específico, não se preocupe: temos uma rede de colaboradores que entendem!<br><br>
        Nascemos durante uma mudança do mercado publicitário, com necessidade das empresas em viabilizarem seus projetos e sair dos formatos padrões apresentados pelas mídias.<br><br>
      Começamos com pequenos projetos, mas com o tempo, outros trabalhos vieram, hoje atendemos algumas agências e diversos clientes. E temos orgulho de ver muitos clientes atingirem seus objetivos com a nossa ajuda.</h6><br>
      <h6>Produceria... Por quê?</h6>
      <div class="client_area ">
        <div class="client_section animated  fadeInUp wow">
          <div class="client_profile">
            <div class="client_profile_pic"><img src="img/tipografia.png" alt=""></div>
            <!-- <h3>Guga Ketzer</h3> -->
            <!-- <span>Chief Executive Officer</span>  -->
          </div>
          <div class="quote_section">
            <div class="quote_arrow"></div>
            <p><b><img src="img/quote_sign_left.png" alt=""></b> Produzir é um estado em constante transformação: de formatos, materiais, linguagens, referências, de processos. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="client_section animated  fadeInDown wow">
          <div class="client_profile flt">
            <div class="client_profile_pic"><img src="img/offset.png" alt=""></div>
            <!-- <h3>Rodrigo Bombana</h3> -->
            <!-- <span>Diretor de Criação</span>  -->
          </div>
          <div class="quote_section flt">
            <div class="quote_arrow2"></div>
            <p><b><img src="img/quote_sign_left.png" alt=""></b> Pelas possíveis capacidades potenciais que a produção<br> –em todos os estados– pode proporcionar. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </section>
    <!--main-section client-part-end-->

    <div class="c-logo-part"><!--c-logo-part-start-->
      <div class="container">
        <ul class="delay-06s animated  bounce wow">
          <li><a href="javascript:void(0)"><img src="img/localiza-hertz-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/vivara-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/bradesco-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/bayer-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/sesc-cliente-produceria.png" alt=""></a></li>
        </ul>
        <ul class="delay-12s animated  bounce wow">
          <li><a href="javascript:void(0)"><img src="img/eisenbahn-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/nubank-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/localiza-seminovos-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/doritos-cliente-produceria.png" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="img/baden-baden-cliente-produceria.png" alt=""></a></li>
        </ul>
      </div>
    </div>
    <!--c-logo-part-end-->
    <section class="main-section team" id="team"><!--main-section team-start-->
      <div class="container">
        <h2>Equipe</h2>
        <h6>A Produceria é uma equipe-beta de profissionais, com uma abordagem única de produção, remodelando função através de processos e suas variadas aplicações.</h6>
        <div class="team-leader-block clearfix">
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-03s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-sid-fernandes.jpg" alt="">
              <ul>
                <li><a href="tel:11994687742" data-toggle="tooltip" data-placement="botton" title="+55 11 99468-7742" class="fa-phone"></a></li>
                <li><a href="mailto:sid@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="sid@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-03s">Sid Fernandes</h3>
            <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
            <!-- <p class="wow fadeInDown delay-03s">sid@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader  wow fadeInDown delay-06s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-carol-galastri.jpg" alt="">
              <ul>
                <li><a href="tel:11982666283" data-toggle="tooltip" data-placement="botton" title="+55 11 98266-6283" class="fa-phone"></a></li>
                <li><a href="mailto:carol.galastri@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="carol.galastri@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-06s">Carol Galastri</h3>
            <span class="wow fadeInDown delay-06s">Art Buyer</span>
            <!-- <p class="wow fadeInDown delay-06s">carol.galastri@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-09s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-celso-dal-sasso.jpg" alt="">
              <ul>
                <li><a href="tel:11947696879" data-toggle="tooltip" data-placement="botton" title="+55 11 94769-6879" class="fa-phone"></a></li>
                <li><a href="mailto:celso.sasso@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="celso.sasso@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-09s">Celso Dal Sasso</h3>
            <span class="wow fadeInDown delay-09s">Arte Finalista</span>
            <!-- <p class="wow fadeInDown delay-09s">celso.sasso@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-12s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-cleusa-quadros.jpg" alt="">
              <ul>
                <li><a href="tel:11982087347" data-toggle="tooltip" data-placement="botton" title="+55 11 98208-7347" class="fa-phone"></a></li>
                <li><a href="mailto:cleusa.quadros@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="cleusa.quadros@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-12s">Cleusa Quadros</h3>
            <span class="wow fadeInDown delay-12s">Revisora</span>
            <!-- <p class="wow fadeInDown delay-12s">cleusa.quadros@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-15s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-daniel-costa.jpg" alt="">
              <ul>
                <li><a href="tel:11953231343" data-toggle="tooltip" data-placement="botton" title="+55 11 95323-1343" class="fa-phone"></a></li>
                <li><a href="mailto:daniel@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="daniel@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-15s">Daniel Costa</h3>
            <span class="wow fadeInDown delay-15s">Produtor</span>
            <!-- <p class="wow fadeInDown delay-15s">daniel@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-18s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-eduardo-coleoni.jpg" alt="">
              <ul>
                <li><a href="tel:11941308506" data-toggle="tooltip" data-placement="botton" title="+55 11 94130-8506" class="fa-phone"></a></li>
                <li><a href="mailto:eduardo.coleoni@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="eduardo.coleoni@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-18s">Eduardo Coleoni</h3>
            <span class="wow fadeInDown delay-18s">Tráfego</span>
            <!-- <p class="wow fadeInDown delay-18s">eduardo.coleoni@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader  wow fadeInDown delay-03s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-leader-pic3.jpg" alt="">
              <ul>
                <li><a href="tel:1138548035" data-toggle="tooltip" data-placement="botton" title="+55 11 3854-8035" class="fa-phone"></a></li>
                <li><a href="mailto:contato@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="contato@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-03s">Glaucia Agianig</h3>
            <span class="wow fadeInDown delay-03s">Financeiro</span>
            <!-- <p class="wow fadeInDown delay-03s">luciano@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader  wow fadeInDown delay-06s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-luciano-marangoni.jpg" alt="">
              <ul>
                <li><a href="tel:11992946520" data-toggle="tooltip" data-placement="botton" title="+55 11 99294-6520" class="fa-phone"></a></li>
                <li><a href="mailto:luciano@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="luciano@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-06s">Luciano Marangoni</h3>
            <span class="wow fadeInDown delay-06s">Produtor</span>
            <!-- <p class="wow fadeInDown delay-06s">luciano@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader  wow fadeInDown delay-09s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-marcelo-tonet.jpg" alt="">
              <ul>
                <li><a href="tel:11998719700" data-toggle="tooltip" data-placement="botton" title="+55 11 99871-9700" class="fa-phone"></a></li>
                <li><a href="mailto:marcelo.tonet@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="marcelo.tonet@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-09s">Marcelo Tonet</h3>
            <span class="wow fadeInDown delay-09s">Programador</span>
            <!-- <p class="wow fadeInDown delay-09s">marcelo.tonet@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-12s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-pablo-alcantara.jpg" alt="">
              <ul>
                <li><a href="tel:11986682660" data-toggle="tooltip" data-placement="botton" title="+55 11 98668-2660" class="fa-phone"></a></li>
                <li><a href="mailto:pablo.alcantara@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="pablo.alcantara@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-12s">Pablo Alcantara</h3>
            <span class="wow fadeInDown delay-12s">Diretor de Arte</span>
            <!-- <p class="wow fadeInDown delay-12s">pablo.alcantara@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-15s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-sergio-virgilio.jpg" alt="">
              <ul>
                <li><a href="tel:11982877854" data-toggle="tooltip" data-placement="botton" title="+55 11 98287-7854" class="fa-phone"></a></li>
                <li><a href="mailto:sergio.virgilio@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="sergio.virgilio@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-15s">Sergio Virgilio</h3>
            <span class="wow fadeInDown delay-15s">Roterista</span>
            <!-- <p class="wow fadeInDown delay-15s">sergio.virgilio@produceria.com.br</p> -->
          </div>
          <div class="team-leader-box">
            <div class="team-leader wow fadeInDown delay-18s">
              <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
              <img src="img/team-silvio-takeshi.jpg" alt="">
              <ul>
                <li><a href="tel:11996855236" data-toggle="tooltip" data-placement="botton" title="+55 11 99685-5236" class="fa-phone"></a></li>
                <li><a href="mailto:takeshi@produceria.com.br" data-toggle="tooltip" data-placement="botton" title="takeshi@produceria.com.br" class="fa-envelope-o"></a></li>
              </ul>
            </div>
            <h3 class="wow fadeInDown delay-18s">Silvio Takeshi</h3>
            <span class="wow fadeInDown delay-18s">Arte Finalista</span>
            <!-- <p class="wow fadeInDown delay-18s">takeshi@produceria.com.br</p> -->
          </div>
        </div>
      </div>
    </section>
    <!--main-section team-end-->

    <section class="twitter-feed"><!--twitter-feed-->
      <div class="container  animated fadeInDown delay-07s wow">
        <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
        <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
        and how often should you be drinking coffee?</p>
        <span>About 28 mins ago</span> </div>
      </section>
      <!--twitter-feed-end-->
      <footer class="footer_section" id="contact">
        <div class="container">
          <section class="main-section contact" id="contact">
            <div class="contact_section">
              <h2>Contato</h2>
              <div class="row">
                <div class="col-lg-3">
                  <div class="contact_block">
                    <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
                    <span><a href="https://goo.gl/maps/NRtnJcRhgUK2" target="_blank">R. Sarita Cyrillo, 288 - Jardim Paulista<br>01435-060 | São Paulo | SP </a></span>
                  </div>
                  <br>
                </div>
                <div class="col-lg-3">
                  <div class="contact_block">
                    <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
                    <span>Ligue para nós <br> 
                      <a href="tel:1138548035">+55 11 3854-8035</a> </span>
                    </div>
                    <br>
                  </div>
                  <div class="col-lg-3">
                    <div class="contact_block">
                      <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
                      <span>Envie um e-mail <br>
                        <a href="mailto:contato@produceria.com.br">contato@produceria.com.br</a> </span>
                      </div>
                      <br>
                    </div>
                    <div class="col-lg-3">
                      <div class="contact_block">
                        <div class="contact_block_icon icon4 rollIn animated wow"><span><i class="fa-clipboard"></i></span></div>
                        <span><a href="trabalhe-conosco/index.php">Solicitação de Trabalho<br>
                          Checklist</a> </span>
                        </div>
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                      <div class="contact-info-box address clearfix">
                        <h3>Quer saber mais?<br>Entre em contato!</h3>
                    <!-- <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
                      <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquampor id.</p> -->
                    </div>
                    <ul class="contact-info-box address clearfix">
                      <li class="animated bounceIn wow delay-02s"><a href="mailto:orcamento@produceria.com.br">orcamento@produceria.com.br</a></li>
                      <li class="animated bounceIn wow delay-03s"><a href="https://produceria.wetransfer.com/" target="_blank">produceria.wetransfer.com</a></li>
                      <li class="animated bounceIn wow delay-04s"><a href="trabalhe-conosco/index.php">Trabalhe conosco</a></li>
                      <li class="animated bounceIn wow delay-05s"><a href="fornecedores/index.php">Seja nosso fornecedor</a></li>
                    </ul>
                    <ul class="social-link">
                      <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
                      <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
                      <li class="instagram animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-instagram"></i></a></li>
                      <li class="linkedin animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-linkedin"></i></a></li>
                      <li class="youtube animated bounceIn wow delay-06s"><a href="https://wetransfer.com/" target="_blank"><i class="fa-youtube"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6 wow fadeInUp delay-06s">
                    <div class="form">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <form action="<? $PHP_SELF; ?>" method="POST"> 
                        <div class="form-group">
                          <input type="text" name="name" class="form-control input-text" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control input-text" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                          <div class="validation"></div>
                        </div>

                        <button type="submit" class="btn input-btn" name="BTEnvia" value="Enviar">ENVIAR MENSAGEM</button>
                      </form>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="container">
              <div class="footer_bottom"> 
                <span>Produceria | Direitos reservados © 2018</span>
              </div>
            </div>
          </footer>
          <script type="text/javascript">
            $(document).ready(function(e) {
              $('#header_outer').scrollToFixed();
              $('.res-nav_click').click(function(){
                $('.main-nav').slideToggle();
                return false    

              });

            });
          </script>
          <script>
            wow = new WOW(
            {
              animateClass: 'animated',
              offset:       100
            }
            );
            wow.init();
            document.getElementById('').onclick = function() {
              var section = document.createElement('section');
              section.className = 'wow fadeInDown';
              section.className = 'wow shake';
              section.className = 'wow zoomIn';
              section.className = 'wow lightSpeedIn';
              this.parentNode.insertBefore(section, this);
            };
          </script> 
          <script type="text/javascript">
           $(window).load(function(){

            $('a').bind('click',function(event){
             var $anchor = $(this);

             $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top - 91
            }, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
          })
        </script> 

        <script type="text/javascript">


          jQuery(document).ready(function($){     
// Portfolio Isotope
var container = $('#portfolio-wrap');	


container.isotope({
  animationEngine : 'best-available',
  animationOptions: {
   duration: 200,
   queue: false
 },
 layoutMode: 'fitRows'
});	

$('#filters a').click(function(){
  $('#filters a').removeClass('active');
  $(this).addClass('active');
  var selector = $(this).attr('data-filter');
  container.isotope({ filter: selector });
  setProjects();		
  return false;
});


function splitColumns() { 
 var winWidth = $(window).width(), 
 columnNumb = 1;


 if (winWidth > 1024) {
  columnNumb = 4;
} else if (winWidth > 900) {
  columnNumb = 2;
} else if (winWidth > 479) {
  columnNumb = 2;
} else if (winWidth < 479) {
  columnNumb = 1;
}

return columnNumb;
}		

function setColumns() { 
 var winWidth = $(window).width(), 
 columnNumb = splitColumns(), 
 postWidth = Math.floor(winWidth / columnNumb);

 container.find('.portfolio-item').each(function () { 
  $(this).css( { 
   width : postWidth + 'px' 
 });
});
}		

function setProjects() { 
 setColumns();
 container.isotope('reLayout');
}		

container.imagesLoaded(function () { 
 setColumns();
});


$(window).bind('resize', function () { 
 setProjects();			
});

});
          $( window ).load(function() {
           jQuery('#all').click();
           return false;
         });
    </script>

     </body>
     </html>