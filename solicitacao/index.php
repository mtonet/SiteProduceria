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

  <!--Solicitaçao--> 
  <footer class="footer_section" id="contact">
    <div class="container">
      <section class="main-section contact" id="contact">
        <div class="contact_section">
          <h2>Solicitação</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Ficou simples fazer uma<br>solicitação!</h3>
              <p>Listamos as principais informações que precisamos para exucutar a maioria dos trabalhos.<p>
              <p>Preencher o formulário e automaticamente será gerado um pdf.</p>
              </div>
              <ul class="contact-info-box address clearfix">
                <li class="animated bounceIn wow delay-02s"><a href="tel:1138548035">+55 11 3854-8035</a></li>
                <li class="animated bounceIn wow delay-03s"><a href="mailto:contato@produceria.com.br">contato@produceria.com.br</a></li>
                <li class="animated bounceIn wow delay-04s"><a href="mailto:orcamento@produceria.com.br">orcamento@produceria.com.br</a></li>
                <li class="animated bounceIn wow delay-05s"><a href="https://produceria.wetransfer.com/" target="_blank">produceria.wetransfer.com</a></li>
                <li class="animated bounceIn wow delay-06s"><a data-toggle="modal" data-target="#formatos-padrao-modal">Formatos Padrão</a></li>
                 <li class="animated bounceIn wow delay-07s"><a data-toggle="modal" data-target="#aproveitamento-papel-modal">Aproveitamento de Papel</a></li>
                 <li class="animated bounceIn wow delay-08s"><a href="tabela-sinapro-2017.pdf" target="_blank">Tabela Sinapro Vigente</a></li>
              </ul>

            </div>
            <div class="col-lg-9 wow fadeInUp delay-06s">
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group col-lg-6">
                    <input type="text" name="cliente" class="form-control input-text" id="cliente" placeholder="Cliente" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" name="projeto" class="form-control input-text" id="projeto" placeholder="Projeto" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="solicitante" class="form-control input-text" id="solicitante" placeholder="Solicitante" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="diretorArte" class="form-control input-text" id="diretorArte" placeholder="Responsável pela Criação" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                   <select class="form-control input-text" name="solicitcao" id="solicitcao" value="">
                    <option value="Orçamento">Orçamento</option>
                    <option value="Finalização">Finalização</option>
                    <option value="Produção">Produção</option>
                    <option value="Programação">Programação</option>
                    <option value="Criação">Criação</option>
                  </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-4">
                 <select class="form-control input-text" name="midia" id="midia" value="">
                  <option value="Mídia Impressa">Mídia Impressa</option>
                  <option value="Mídia Exterior">Mídia Exterior</option>
                  <option value="Mídia Indoor">Mídia Indoor</option>
                  <option value="Mídia Digital">Mídia Digital</option>
                  <option value="Motion & Film">Motion & Film</option>
                </select>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-4">
                <input type="text" name="dataInicial" class="form-control input-text" id="dataInicial" placeholder="Data Inicial" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-4">  
                <input type="text" name="dataEntrega" class="form-control input-text" id="dataEntrega" placeholder="Data Entrega" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="item" class="form-control input-text" id="item" placeholder="Item" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="veiculo" class="form-control input-text" id="veiculo" placeholder="Veículo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">  
                <input type="text" name="formato" class="form-control input-text" id="formato" placeholder="Formato" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">  
                <input type="text" name="paginas" class="form-control input-text" id="paginas" placeholder="Páginas" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-3">
               <select class="form-control input-text" name="lombada" id="lombada" value="">
                <option value="Não">Sem Lombada</option>
                <option value="Quadrada">Quadrada</option>
                <option value="Canoa">Canoa</option>
                <option value="Wire-O">Wire-O</option>
                <option value="Espiral">Espiral</option>
              </select>
              <div class="validation"></div>
            </div>
            <div class="form-group col-lg-3">
             <select class="form-control input-text" name="cores" id="cores" value="">
              <option value="4x4">4x4 cores</option>
              <option value="4x0">4x0 cores</option>
              <option value="1x1">1x1 cor</option>
              <option value="1x0">1x0 cor</option>
              <option value="Outro">Outro</option>
            </select>
            <div class="validation"></div>
          </div>
          <div class="form-group col-lg-3">
           <select class="form-control input-text" name="resolucao" id="resolucao" value="">
            <option value="300dpi">Resolução de 300dpi</option>
            <option value="240dpi">Resolução de 240dpi</option>
            <option value="200dpi">Resolução de 200dpi</option>
            <option value="150dpi">Resolução de 150dpi</option>
            <option value="100dpi">Resolução de 100dpi</option>
            <option value="72dpi">Resolução de 72dpi</option>
            <option value="Outro">Outra resolução</option>
          </select>
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-3">
         <select class="form-control input-text" name="extensao" id="extensao" value="">
          <option value="" disabled="">Design</option>
          <option value="PDF">PDF</option>
          <option value="AI">AI</option>
          <option value="INDD">INDD</option>
          <option value="PSD">PSD</option>
          <option value="EPS">EPS</option>
          <option value="PS">PS</option>
          <option value="CDR">CDR</option>
          <option value="" disabled="">Imagem</option>
          <option value="BMP">BMP</option>
          <option value="GIF">GIF</option>
          <option value="JPEG">JPEG</option>
          <option value="JPG">JPG</option>
          <option value="PNG">PNG</option>
          <option value="TIF">TIF</option>
          <option value="TIFF">TIFF</option>
          <option value="" disabled="">Compactadores</option>
          <option value="7z">7z</option>
          <option value="RAR">RAR</option>
          <option value="ZIP">ZIP</option>
          <option value="" disabled="">Documentos</option>
          <option value="DOC">DOC</option>
          <option value="PPT">PPT</option>
          <option value="TXT">TXT</option>
          <option value="XLS">XLS</option>
          <option value="" disabled="">Internet</option>
          <option value="HTML">HTML</option>
          <option value="HTM">HTM</option>
          <option value="CSS">CSS</option>
          <option value="PHP">PHP</option>
          <option value="SQL">SQL</option>
          <option value="JS">JS</option>
          <option value="XML">XML</option>
          <option value="ASP">ASP</option>
          <option value="ASPX">ASPX</option>
          <option value="CFM">CFM</option>
          <option value="DWG">DWG</option>
          <option value="FLA">FLA</option>
          <option value="JSP">JSP</option>
          <option value="SVG">SVG</option>
          <option value="SWF">SWF</option>
          <option value="" disabled="">Vídeo</option>
          <option value="AVI">AVI</option>
          <option value="MKV">MKV</option>
          <option value="MOV">MOV</option>
          <option value="MPEG">MPEG</option>
          <option value="RMVB">RMVB</option>
          <option value="" disabled="">Áudio</option>
          <option value="AAC">AAC</option>
          <option value="AC3">AC3</option>
          <option value="MP3">MP3</option>
          <option value="OGG">OGG</option>
          <option value="WAV">WAV</option>
          <option value="WMA">WMA</option>
        </select>
        <div class="validation"></div>
      </div>
      <div class="form-group col-lg-3">
       <select class="form-control input-text" name="sangria" id="sangria" value="">
        <option value="Não">Sem Sagria</option>
        <option value="Sim">Com Sangria</option>
        <option value="5mm">Sangria de 5mm</option>
      </select>
      <div class="validation"></div>
    </div>
    <div class="form-group col-lg-3">
     <select class="form-control input-text" name="corteEspecial" id="corteEspecial" value="">
      <option value="Não">Sem Corte Especial</option>
      <option value="Sim">Com Corte Especial</option>
    </select>
    <div class="validation"></div>
  </div>
  <div class="form-group col-lg-6">
    <input type="text" name="quantidade" class="form-control input-text" id="quantidade" placeholder="Quantidade" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
    <div class="validation"></div>
  </div>  
  <div class="form-group col-lg-12">
    <textarea class="form-control" name="descricao" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Descrição"></textarea>
    <div class="validation"></div>
  </div>

  <div class="form-group col-lg-12">
    <input type="text" name="link" class="form-control input-text" id="link" placeholder="Link" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
    <div class="validation"></div>
  </div>
  <div class="form-group col-lg-12">
    <button type="submit" class="btn input-btn">GERAR SOLICITAÇÃO</button>
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
<!--Solicitaçao-->

<!-- Modal - Formatos padrão -->
<div class="modal fade" id="formatos-padrao-modal" tabindex="-1" role="dialog" aria-labelledby="formatos-padrao-modal-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formatos Pdrão</h4>
      </div>
      <div class="modal-body">
        <img src="img/formatos-padrao.png" alt="Formatos Padrão" class="center-block img-responsive">
      </div>
    </div>
  </div>
</div>

<!-- Modal - Aproveitamento de Papel -->
<div class="modal fade" id="aproveitamento-papel-modal" tabindex="-1" role="dialog" aria-labelledby="aproveitamento-papel-modal-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aproveitamento de Papel</h4>
      </div>
      <div class="modal-body">
        <img src="img/aproveitamento-papel.jpg" alt="Aproveitamento de Papel" class="center-block img-responsive">
      </div>
    </div>
  </div>
</div>




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