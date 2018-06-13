<?php
session_start();
require"../includes-acoes/solicitacao/solicitacao.php";
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
                <form action="" method="post" role="form" class="contactForm" enctype="multipart/form-data">

                  <?php if($envio=="s"){echo $msg;}?>

                  <div class="form-group col-lg-6">
                    <input type="text" name="cliente" class="form-control input-text" id="cliente" placeholder="*Cliente" data-rule="minlen:4" value="<?php echo $_SESSION['cliente']?>" required />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" name="projeto" class="form-control input-text" id="projeto" placeholder="*Projeto" data-rule="minlen:4" value="<?php echo $_SESSION['projeto']?>" required/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="solicitante" class="form-control input-text" id="solicitante" placeholder="*Solicitante" data-rule="minlen:4" value="<?php echo $_SESSION['solicitante']?>" required/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="diretorArte" class="form-control input-text" id="diretorArte" placeholder="Responsável pela Criação" data-rule="minlen:4" value="<?php echo $_SESSION['diretorArte']?>"/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                   <select class="form-control input-text" name="solicitcao" id="solicitcao" value="">
                    <option value="Orçamento" <?php if($_SESSION['solicitcao']=="Orçamento"){?>selected<?php }?>>Orçamento</option>
                    <option value="Finalização" <?php if($_SESSION['solicitcao']=="Finalização"){?>selected<?php }?>>Finalização</option>
                    <option value="Produção" <?php if($_SESSION['solicitcao']=="Produção"){?>selected<?php }?>>Produção</option>
                    <option value="Programação" <?php if($_SESSION['solicitcao']=="Programação"){?>selected<?php }?>>Programação</option>
                    <option value="Tratamento de Imagem" <?php if($_SESSION['solicitcao']=="Tratamento de Imagem"){?>selected<?php }?>>Tratamento de Imagem</option>
                    <option value="Criação" <?php if($_SESSION['solicitcao']=="Criação"){?>selected<?php }?>>Criação</option>
                    
                  </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-4">
                 <select class="form-control input-text" name="midia" id="midia" value="">
                  <option value="Mídia Impressa" <?php if($_SESSION['midia']=="Mídia Impressa"){?>selected<?php }?>>Mídia Impressa</option>
                  <option value="Mídia Exterior" <?php if($_SESSION['midia']=="Mídia Exterior"){?>selected<?php }?>>Mídia Exterior</option>
                  <option value="Mídia Indoor" <?php if($_SESSION['midia']=="Mídia Indoor"){?>selected<?php }?>>Mídia Indoor</option>
                  <option value="Mídia Digital" <?php if($_SESSION['midia']=="Mídia Digital"){?>selected<?php }?>>Mídia Digital</option>
                  <option value="Motion & Film" <?php if($_SESSION['midia']=="Motion & Film"){?>selected<?php }?>>Motion & Film</option>
                </select>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-4">
                <input type="text" name="dataInicial" class="form-control input-text" id="dataInicial" placeholder="Data Inicial" data-rule="minlen:4" value="<?php echo $_SESSION['dataInicial']?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-4">  
                <input type="text" name="dataEntrega" class="form-control input-text" id="dataEntrega" placeholder="*Data Entrega" data-rule="minlen:4" value="<?php echo $_SESSION['dataEntrega']?>" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="item" class="form-control input-text" id="item" placeholder="Item" data-rule="minlen:4" value="<?php echo $_SESSION['item']?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="veiculo" class="form-control input-text" id="veiculo" placeholder="Veículo" data-rule="minlen:4" value="<?php echo $_SESSION['veiculo']?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">  
                <input type="text" name="formato" class="form-control input-text" id="formato" placeholder="Formato" data-rule="minlen:4" value="<?php echo $_SESSION['formato']?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">  
                <input type="text" name="paginas" class="form-control input-text" id="paginas" placeholder="Páginas" data-rule="minlen:4" value="<?php echo $_SESSION['paginas']?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-3">
               <select class="form-control input-text" name="lombada" id="lombada" value="">
                <option value="Não" <?php if($_SESSION['lombada']=="Não"){?>selected<?php }?>>Sem Lombada</option>
                <option value="Quadrada" <?php if($_SESSION['lombada']=="Quadrada"){?>selected<?php }?>>Quadrada</option>
                <option value="Canoa" <?php if($_SESSION['lombada']=="Canoa"){?>selected<?php }?>>Canoa</option>
                <option value="Wire-O" <?php if($_SESSION['lombada']=="Wire-O"){?>selected<?php }?>>Wire-O</option>
                <option value="Espiral" <?php if($_SESSION['lombada']=="Espiral"){?>selected<?php }?>>Espiral</option>
              </select>
              <div class="validation"></div>
            </div>
            <div class="form-group col-lg-3">
             <select class="form-control input-text" name="cores" id="cores" value="">
              <option value="4x4" <?php if($_SESSION['cores']=="4x4"){?>selected<?php }?>>4x4 cores</option>
              <option value="4x0" <?php if($_SESSION['cores']=="4x0"){?>selected<?php }?>>4x0 cores</option>
              <option value="1x1" <?php if($_SESSION['cores']=="1x1"){?>selected<?php }?>>1x1 cor</option>
              <option value="1x0" <?php if($_SESSION['cores']=="1x0"){?>selected<?php }?>>1x0 cor</option>
              <option value="Outro" <?php if($_SESSION['cores']=="Outro"){?>selected<?php }?>>Outro</option>
            </select>
            <div class="validation"></div>
          </div>
          <div class="form-group col-lg-3">
           <select class="form-control input-text" name="resolucao" id="resolucao" value="">
            <option value="300dpi" <?php if($_SESSION['resolucao']=="300dpi"){?>selected<?php }?>>Resolução de 300dpi</option>
            <option value="240dpi" <?php if($_SESSION['resolucao']=="240dpi"){?>selected<?php }?>>Resolução de 240dpi</option>
            <option value="200dpi" <?php if($_SESSION['resolucao']=="200dpi"){?>selected<?php }?>>Resolução de 200dpi</option>
            <option value="150dpi" <?php if($_SESSION['resolucao']=="150dpi"){?>selected<?php }?>>Resolução de 150dpi</option>
            <option value="100dpi" <?php if($_SESSION['resolucao']=="100dpi"){?>selected<?php }?>>Resolução de 100dpi</option>
            <option value="72dpi" <?php if($_SESSION['resolucao']=="72dpi"){?>selected<?php }?>>Resolução de 72dpi</option>
            <option value="Outro" <?php if($_SESSION['resolucao']=="Outro"){?>selected<?php }?>>Outra resolução</option>
          </select>
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-3">
         <select class="form-control input-text" name="extensao" id="extensao" value="">
          <option value="" disabled="">Design</option>
          <option value="PDF" <?php if($_SESSION['extensao']=="PDF"){?>selected<?php }?>>PDF</option>
          <option value="AI" <?php if($_SESSION['extensao']=="AI"){?>selected<?php }?>>AI</option>
          <option value="INDD" <?php if($_SESSION['extensao']=="INDD"){?>selected<?php }?>>INDD</option>
          <option value="PSD" <?php if($_SESSION['extensao']=="PSD"){?>selected<?php }?>>PSD</option>
          <option value="EPS" <?php if($_SESSION['extensao']=="EPS"){?>selected<?php }?>>EPS</option>
          <option value="PS" <?php if($_SESSION['extensao']=="PS"){?>selected<?php }?>>PS</option>
          <option value="CDR" <?php if($_SESSION['extensao']=="CDR"){?>selected<?php }?>>CDR</option>
          <option value="" disabled="">Imagem</option>
          <option value="BMP" <?php if($_SESSION['extensao']=="BMP"){?>selected<?php }?>>BMP</option>
          <option value="GIF" <?php if($_SESSION['extensao']=="GIF"){?>selected<?php }?>>GIF</option>
          <option value="JPEG" <?php if($_SESSION['extensao']=="JPEG"){?>selected<?php }?>>JPEG</option>
          <option value="JPG" <?php if($_SESSION['extensao']=="JPG"){?>selected<?php }?>>JPG</option>
          <option value="PNG" <?php if($_SESSION['extensao']=="PNG"){?>selected<?php }?>>PNG</option>
          <option value="TIF" <?php if($_SESSION['extensao']=="TIF"){?>selected<?php }?>>TIF</option>
          <option value="TIFF" <?php if($_SESSION['extensao']=="TIFF"){?>selected<?php }?>>TIFF</option>
          <option value="" disabled="">Compactadores</option>
          <option value="7z" <?php if($_SESSION['extensao']=="7z"){?>selected<?php }?>>7z</option>
          <option value="RAR" <?php if($_SESSION['extensao']=="RAR"){?>selected<?php }?>>RAR</option>
          <option value="ZIP" <?php if($_SESSION['extensao']=="ZIP"){?>selected<?php }?>>ZIP</option>
          <option value="" disabled="">Documentos</option>
          <option value="DOC" <?php if($_SESSION['extensao']=="DOC"){?>selected<?php }?>>DOC</option>
          <option value="PPT" <?php if($_SESSION['extensao']=="PPT"){?>selected<?php }?>>PPT</option>
          <option value="TXT" <?php if($_SESSION['extensao']=="TXT"){?>selected<?php }?>>TXT</option>
          <option value="XLS" <?php if($_SESSION['extensao']=="XLS"){?>selected<?php }?>>XLS</option>
          <option value="" disabled="">Internet</option>
          <option value="HTML" <?php if($_SESSION['extensao']=="HTML"){?>selected<?php }?>>HTML</option>
          <option value="HTM" <?php if($_SESSION['extensao']=="HTM"){?>selected<?php }?>>HTM</option>
          <option value="CSS" <?php if($_SESSION['extensao']=="CSS"){?>selected<?php }?>>CSS</option>
          <option value="PHP" <?php if($_SESSION['extensao']=="PHP"){?>selected<?php }?>>PHP</option>
          <option value="SQL" <?php if($_SESSION['extensao']=="SQL"){?>selected<?php }?>>SQL</option>
          <option value="JS" <?php if($_SESSION['extensao']=="JS"){?>selected<?php }?>>JS</option>
          <option value="XML" <?php if($_SESSION['extensao']=="XML"){?>selected<?php }?>>XML</option>
          <option value="ASP" <?php if($_SESSION['extensao']=="ASP"){?>selected<?php }?>>ASP</option>
          <option value="ASPX" <?php if($_SESSION['extensao']=="ASPX"){?>selected<?php }?>>ASPX</option>
          <option value="CFM" <?php if($_SESSION['extensao']=="CFM"){?>selected<?php }?>>CFM</option>
          <option value="DWG" <?php if($_SESSION['extensao']=="DWG"){?>selected<?php }?>>DWG</option>
          <option value="FLA" <?php if($_SESSION['extensao']=="FLA"){?>selected<?php }?>>FLA</option>
          <option value="JSP" <?php if($_SESSION['extensao']=="JSP"){?>selected<?php }?>>JSP</option>
          <option value="SVG" <?php if($_SESSION['extensao']=="SVG"){?>selected<?php }?>>SVG</option>
          <option value="SWF" <?php if($_SESSION['extensao']=="SWF"){?>selected<?php }?>>SWF</option>
          <option value="" disabled="">Vídeo</option>
          <option value="AVI" <?php if($_SESSION['extensao']=="AVI"){?>selected<?php }?>>AVI</option>
          <option value="MKV" <?php if($_SESSION['extensao']=="MKV"){?>selected<?php }?>>MKV</option>
          <option value="MOV" <?php if($_SESSION['extensao']=="MOV"){?>selected<?php }?>>MOV</option>
          <option value="MPEG" <?php if($_SESSION['extensao']=="MPEG"){?>selected<?php }?>>MPEG</option>
          <option value="RMVB" <?php if($_SESSION['extensao']=="RMVB"){?>selected<?php }?>>RMVB</option>
          <option value="" disabled="">Áudio</option>
          <option value="AAC" <?php if($_SESSION['extensao']=="AAC"){?>selected<?php }?>>AAC</option>
          <option value="AC3" <?php if($_SESSION['extensao']=="AC3"){?>selected<?php }?>>AC3</option>
          <option value="MP3" <?php if($_SESSION['extensao']=="MP3"){?>selected<?php }?>>MP3</option>
          <option value="OGG" <?php if($_SESSION['extensao']=="OGG"){?>selected<?php }?>>OGG</option>
          <option value="WAV" <?php if($_SESSION['extensao']=="WAV"){?>selected<?php }?>>WAV</option>
          <option value="WMA" <?php if($_SESSION['extensao']=="WMA"){?>selected<?php }?>>WMA</option>
        </select>
        <div class="validation"></div>
      </div>
      <div class="form-group col-lg-3">
       <select class="form-control input-text" name="sangria" id="sangria" value="">
        <option value="Não" <?php if($_SESSION['sangria']=="Não"){?>selected<?php }?>>Sem Sagria</option>
        <option value="Sim" <?php if($_SESSION['sangria']=="Sim"){?>selected<?php }?>>Com Sangria</option>
        <option value="5mm" <?php if($_SESSION['sangria']=="5mm"){?>selected<?php }?>>Sangria de 5mm</option>
      </select>
      <div class="validation"></div>
    </div>
    <div class="form-group col-lg-3">
     <select class="form-control input-text" name="corteEspecial" id="corteEspecial" value="">
      <option value="Não" <?php if($_SESSION['corteEspecial']=="Não"){?>selected<?php }?>>Sem Corte Especial</option>
      <option value="Sim" <?php if($_SESSION['corteEspecial']=="Sim"){?>selected<?php }?>>Com Corte Especial</option>
    </select>
    <div class="validation"></div>
  </div>
  <div class="form-group col-lg-6">
    <input type="text" name="quantidade" class="form-control input-text" id="quantidade" placeholder="Quantidade" data-rule="minlen:4" value="<?php echo $_SESSION['quantidade']?>"/>
    <div class="validation"></div>
  </div>  
  <div class="form-group col-lg-12">
    <textarea class="form-control" name="descricao" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="*Descrição" required><?php echo $_SESSION['descricao']?></textarea>
    <div class="validation"></div>
  </div>

  <div class="form-group col-lg-12">
    <input type="text" name="link" class="form-control input-text" id="link" placeholder="Link" data-rule="minlen:4" value="<?php echo $_SESSION['link']?>"/>
    <div class="validation"></div>
  </div>
   
    <div class="form-group col-lg-12">
    <input type="email" name="email" class="form-control input-text" id="email" placeholder="*Seu Email" data-rule="minlen:4" value="<?php echo $_SESSION['email']?>" required/>
    <div class="validation"></div>
  </div>

  <div class="form-group col-lg-12">
    <input type="file" class="btn upload-btn" name="file" id="file" multiple />
    <!--<button type="file" class="btn upload-btn" name="file">Upload de arquivos</button>-->
  </div>
   <div class="form-group col-lg-12">
    <input type="submit" name="button" id="button" class="btn input-btn" value="GERAR SOLICITAÇÃO" />
    <input name="envio" type="hidden" id="envio" value="s" />
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
 /* wow = new WOW(
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
  };*/
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
<script>
/*document.forms[0].addEventListener('submit', function( evt ) {
    var file = document.getElementById('file').files[0];

    if(file && file.size < 10485760) { // 10 MB (this size is in bytes)
        //Submit form        
    } else {
        //Prevent default and display error
        evt.preventDefault();
    }
}, false);*/
</script>
</body>
</html>