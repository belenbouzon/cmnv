<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110239612-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110239612-1');
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta content="width=device-width,initial-scale=1.0" name="viewport">

<!-- CSS IN -->
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/component.css" rel="stylesheet" type="text/css">
<!-- CSS OUT -->

<!-- TITLE IN -->
<title>CMNV // Comunidad de Inversión</title>
<!-- TITLE OUT -->

<!-- METATAGS IN -->
<meta name="title" content="CMNV // Comunidad de Inversión">
<meta name="description" content="CMNV // Comunidad de Inversión">
<meta name="keywords" content="CMNV // Comunidad de Inversión">
<meta name="distribution" content="Global">
<!-- METATAGS OUT -->

<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">


<!-- slider -->

<script src="js/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script>
$(function() {
  $('#slides').superslides({
	hashchange: true,
	play: 3500
  });
});
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '554308511624364'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=554308511624364&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
  
</head>


<body class="bg-home">

<div class="wrapper" style="height:100%; /*min-height:700px;*/">
	
    <div class="header" style="position: absolute; top: 0; left: 0; right: 0; width: 100%;">
    	
        <div class="header-content">
        
            <div class="header-logo">
            	<a href="index.php"><img src="images/logo-headercmnv.png" alt="cmnv" /></a>
            </div>
            
            <div class="header-menu">
                <ul>
                    <li><a href="comunidad.php">Comunidad</a></li>
                    <li><a href="astillero.php">Lanzamientos</a></li>
                    <li><a href="encarpeta.php">En carpeta</a></li>
                    <li><a href="arte.php">Arte</a></li>
                    <li><a href="noticias">Noticias</a></li>
                    <li><a href="contacto.php">Contacto</a></li>                
                </ul>
            </div>
            <div class="header-menu-mobile">
                <div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="comunidad.php">Comunidad</a>
                                <a href="astillero.php">Lanzamientos</a>
                                <a href="encarpeta.php">En carpeta</a>
                                <a href="arte.php">Arte</a>
                                <a href="noticias">Noticias</a>
                                <a href="contacto.php">Contacto</a>
							</li>
						</ul>
					</div> 
            </div>
            
       </div>
        
    </div>
    
    
    
    
    
    
    
    
    <div id="slides">
    
        <div class="slides-container">
          <a href="astillero.php"><img src="images/bg-home-02.jpg"></a>
          <a href="astillero.php"><img src="images/bg-home-03.jpg"></a>
          <a href="astillero.php"><img src="images/bg-home-04.jpg"></a>
          <a href="astillero.php"><img src="images/bg-home-05.jpg"></a>     
        </div>
		<!--
        <nav class="slides-navigation">
          <a href="#" class="next">Next</a>
          <a href="#" class="prev">Previous</a>
        </nav>
        -->
  </div>
    
    
    
    
    
    
    

    <!--FOOTER-->
    <div class="footer" style="position:absolute; bottom:0; left:0; right:0; width:100%; z-index:99999">
        <div class="footer-izq">
            <div class="footer-item hidden-xs">© 2017. Todos los derechos reservados. Comunidad de Inversión S.A. Zufriategui 627 Piso 5 / Bs As / Arg / +54 11 6009 7300 / info@cmnv.com.ar</div>
            <div class="footer-mobile hidden-md hidden-lg">© 2107 - Comunidad de Inversión S.A.</div>
        </div>
        <div class="footer-der">
            <a href="http://www.nicorisso.com" target="_blank"><img src="images/ico-web-20x20-gris.png" /></a>
        </div>
    </div>
    <!--FOOTER: END-->
    
</div>



<script type="text/javascript">

			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});

</script>

<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<script>
	$(function() {
		$( '#dl-menu' ).dlmenu();
	});
</script>

<script>
$('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
});
</script>



</body>
</html>
