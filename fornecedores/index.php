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
          <h2>Seja nosso fornecedor</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Quer ser um dos nossos parceiros?<br>Envie seu cadastro!</h3>
              <p>Para manter nosso padrão de qualidade e para garantir os serviços prestados aos nossos clientes, buscamos em nossos parceiros:</p>
              <p>- Idoneidade;<br>- Capacidade técnica;<br>- Qualidade;<br>- Cumprimento dos prazos;<br>- Comprometimento;<br>- Profissionalismo;<br>- Melhor alternativa técnico-econômica-financeira.</p>
                <!-- <p>Preencher o formulário e enviar seu currúclo em pdf.</p> -->
              </div>
            </div>
            <div class="col-lg-9 wow fadeInUp delay-06s">
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group col-lg-5">
                    <input type="text" name="nomeFantasia" class="form-control input-text" id="nomeFantasia" placeholder="Nome Fantasia" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-7">
                    <input type="text" name="razaoSocial" class="form-control input-text" id="razaoSocial" placeholder="Razão Social" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="cnpj" class="form-control input-text" id="cnpj" placeholder="CNPJ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="inscricaoEstadual" class="form-control input-text" id="inscricaoEstadual" placeholder="Inscrição Estadual" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="inscricaoMunicipal" class="form-control input-text" id="inscricaoMunicipal" placeholder="Inscrição Municipal" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" name="contato" class="form-control input-text" id="contato" placeholder="Contato" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-3">
                    <input type="tel" name="telefone" class="form-control input-text" id="telefone" placeholder="Telefone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-3">
                    <input type="tel" name="celular" class="form-control input-text" id="celular" placeholder="Celular" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control input-text" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" name="site" class="form-control input-text" id="site" placeholder="Site" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-7">
                    <input type="text" name="rua" class="form-control input-text" id="rua" placeholder="Rua" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-2">
                    <input type="text" name="numero" class="form-control input-text" id="numero" placeholder="Número" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-3">
                    <input type="text" name="complemento" class="form-control input-text" id="complemento" placeholder="Complemento" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <input type="text" name="bairro" class="form-control input-text" id="bairro" placeholder="Bairro" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-3">
                    <input type="text" name="cidade" class="form-control input-text" id="cidade" placeholder="Cidade" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-2">
                   <select class="form-control input-text" name="estado" id="estado" value="">
                    <option value="SP">SP</option>
                    <option disabled>─</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                  </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-3">
                  <input type="text" name="cep" class="form-control input-text" id="cep" placeholder="Cep" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-4">
                 <select class="form-control input-text" name="ramoAtividade" id="ramoAtividade" value="">
                  <option value="3D">3D</option>
                  <option value="Brindes">Brindes</option>
                  <option value="Cenografia">Cenografia</option>
                  <option value="Comunicação Visual">Comunicação Visual</option>
                  <option value="Confecção">Confecção</option>
                  <option value="Desenvolvimento Web">Desenvolvimento Web</option>
                  <option value="Embalagens">Embalagens</option>
                  <option value="Estande">Estande</option>
                  <option value="Fotógrafo">Fotógrafo</option>
                  <option value="Gráfica Digital / Offset">Gráfica Digital / Offset</option>
                  <option value="Gráfica Digital">Gráfica Digital</option>
                  <option value="Gráfica Grandes Formatos">Gráfica Grandes Formatos</option>
                  <option value="Gráfica Offset">Gráfica Offset</option>
                  <option value="Ilustrador">Ilustrador</option>
                  <option value="Impressão em Tecido">Impressão em Tecido</option>
                  <option value="Locação de Equipamentos">Locação de Equipamentos</option>
                  <option value="Logistica">Logistica</option>
                  <option value="Material de Escritório">Material de Escritório</option>
                  <option value="Material de Limpeza">Material de Limpeza</option>
                  <option value="Mobiliário Urbano">Mobiliário Urbano</option>
                  <option value="Ponto de Venda">Ponto de Venda</option>
                  <option value="Pré-Impressão">Pré-Impressão</option>
                  <option value="Produtora de Áudio">Produtora de Áudio</option>
                  <option value="Produtora de Vídeo">Produtora de Vídeo</option>
                  <option value="Silk-Sreen">Silk-Sreen</option>
                  <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                  <option value="Tradução de Idiomas">Tradução de Idiomas</option>
                  <option value="Tratamento de Imagem">Tratamento de Imagem</option>
                  <option value="Outro">Outro</option>
                </select>
                <div class="validation"></div>
              </div>
              
               <div class="form-group col-lg-5">
                <input type="text" name="principaisProdutosServicos" class="form-control input-text" id="principaisProdutosServicos" placeholder="Principais Produtos / Serviços" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

        <div class="form-group col-lg-3">
          <input type="file" name="apresentacao" class="form-control input-text" id="apresentacao" placeholder="Apresentação em PDF" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-12">
          <textarea class="form-control" name="observacoes" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Observações"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group col-lg-12">
          <button type="submit" class="btn input-btn">Enviar Cadastro</button>
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