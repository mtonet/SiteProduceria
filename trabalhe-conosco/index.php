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
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/linecons.css" rel="stylesheet" type="text/css">
  <link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="../css/responsive.css" rel="stylesheet" type="text/css">
  <link href="../css/animate.css" rel="stylesheet" type="text/css">

  <!-- FONT -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

  <!-- JS -->
  <script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="../js/jquery.isotope.js"></script>
  <script type="text/javascript" src="../js/wow.js"></script>
  <script type="text/javascript" src="../js/classie.js"></script>

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

 <?php include '../includes/menu.php';?>

  <!--Trabalhe Conosco--> 
  <footer class="footer_section" id="contact">
    <div class="container">
      <section class="main-section contact" id="contact">
        <div class="contact_section">
          <h2>Trabalhe Conosco</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Quer fazer parte da nossa equipe?<br>Envie seu currículo!</h3>
              <p>Sempre que precisamos de um profissional, buscamos em nosso banco de talentos.<p>
                <p>Preencher o formulário e enviar seu currúclo em pdf.</p>
              </div>
            </div>
            <div class="col-lg-9 wow fadeInUp delay-06s">
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group col-lg-12">
                    <input type="text" name="nomeCompleto" class="form-control input-text" id="nomeCompleto" placeholder="Nome Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="documentoCPF" class="form-control input-text" id="documentoCPF" placeholder="Documento (CPF)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                   <select class="form-control input-text" name="Gênero" id="genero" value="">
                    <option value="Feminino">Gênero Feminino</option>
                    <option value="Masculino">Gênero Masculino</option>
                  </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-4">
                  <input type="text" name="dataNascimento" class="form-control input-text" id="dataNascimento" placeholder="Data de Nascimento" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="form-group col-lg-4">
                 <select class="form-control input-text" name="estadoCivil" id="estadoCivil" value="">
                  <option value="Casado (a)">Casado (a)</option>
                  <option value="Divorciado (a)">Divorciado (a)</option>
                  <option value="Separado (a)">Separado (a)</option>
                  <option value="Desquitado (a)">Desquitado (a)</option>
                  <option value="Solteiro (a)">Solteiro (a)</option>
                  <option value="Viuvo (a)">Viuvo (a)</option>
                </select>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-4">
               <select class="form-control input-text" name="nascionalidade" id="nascionalidade" value="">
                <option value="Brasileiro (a)">Brasileiro (a)</option>
                <option value="Estrangeiro (a)">Estrangeiro (a)</option>
              </select>
              <div class="validation"></div>
            </div>
            <div class="form-group col-lg-4">
              <input type="tel" name="telefone" class="form-control input-text" id="telefone" placeholder="Telefone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>


            <div class="form-group col-lg-6">
              <input type="email" class="form-control input-text" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-lg-6">
              <input type="text" name="link" class="form-control input-text" id="link" placeholder="Link de Trabalhos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-lg-4">
             <select class="form-control input-text" name="escolaridade" id="escolaridade" value="">
              <option value="Doutorado Completo">Doutorado Completo</option>
              <option value="Doutorado Incompleto">Doutorado Incompleto</option>
              <option value="Mestrado Completo">Mestrado Completo</option>
              <option value="Mestrado Incompleto">Mestrado Incompleto</option>
              <option value="Pós-graduação Completa">Pós-graduação Completa</option>
              <option value="Pós-graduação Incompleta">Pós-graduação Incompleta</option>
              <option value="Superior Completo">Superior Completo</option>
              <option value="Superior Incompleto">Superior Incompleto</option>
              <option value="Ensino Médio Técnico">Ensino Médio Técnico (2º Grau) Completo</option>
              <option value="Ensino Médio Completo">Ensino Médio (2º Grau) Completo</option>
              <option value="Ensino Médio Técnico Incompleto">Ensino Médio Técnico (2º Grau) Incompleto</option>
              <option value="Ensino Médio Incompleto">Ensino Médio (2º Grau) Incompleto</option>
              <option value="Ensino Fundamental Completo">Ensino Fundamental (1º Grau) Completo</option>
              <option value="Ensino Fundamental Incompleto">Ensino Fundamental (1º Grau) Incompleto</option>
              <option value="Não Alfabetizado">Não Alfabetizado</option>
            </select>
            <div class="validation"></div>
          </div>
          <div class="form-group col-lg-4">
           <select class="form-control input-text" name="areaCargo" id="areaCargo" value="">
            <option value="Administrativo">Administrativo</option>
            <option value="Art Buyer">Art Buyer</option>
            <option value="Arte Finalista">Arte Finalista</option>
            <option value="Atendimento">Atendimento</option>
            <option value="Diretor de Arte">Diretor de Arte</option>
            <option value="Estágiario">Estágiario</option>
            <option value="Financeiro">Financeiro</option>
            <option value="Gerente de Projetos">Gerente de Projetos</option>
            <option value="Ilustrador">Ilustrador</option>
            <option value="Marketing">Marketing</option>
            <option value="Planejamento">Planejamento</option>
            <option value="Produtor Gráfico">Produtor Gráfico</option>
            <option value="Produtor RTV">Produtor RTV</option>
            <option value="Programador">Programador</option>
            <option value="Recursos Humanos">Recursos Humanos</option>
            <option value="Redator">Redator</option>
            <option value="Relações Pública">Relações Pública</option>
            <option value="Retocador de Imagem">Retocador de Imagem</option>
            <option value="Revisor">Revisor</option>
            <option value="Secretariado">Secretariado</option>
            <option value="Tecnologia da Informação">Tecnologia da Informação</option>
            <option value="Tradutor de Idiomas">Tradutor de Idiomas</option>
            <option value="Tráfego">Tráfego</option>
            <option value="Web Design">Web Design</option>
            <option value="Outro">Outro</option>
          </select>
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-4">
          <input type="file" name="currriculo" class="form-control input-text" id="curriculo" placeholder="Currículo em PDF" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-12">
          <textarea class="form-control" name="observacoes" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Observações"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-12">
          <button type="submit" class="btn input-btn">ENVIAR CURRÍCULO</button>
        </div>
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
<!--Trabalhe Conosco-->

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
<script src="contactform/contactform.js"></script>

</body>
</html>