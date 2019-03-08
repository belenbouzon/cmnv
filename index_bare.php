<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta content="width=device-width,initial-scale=1.0" name="viewport">

  <!-- TITLE IN -->
  <title>CMNV // Comunidad de Inversión</title>
  <!-- TITLE OUT -->

  <!-- METATAGS IN -->
  <meta name="title" content="CMNV // Comunidad de Inversión">
  <meta name="description" content="CMNV // Comunidad de Inversión">
  <meta name="keywords" content="CMNV // Comunidad de Inversión">
  <meta name="distribution" content="Global">
  <!-- METATAGS OUT -->

  <!-- CSS IN -->
  <link href="css/estilos_merge.css" rel="stylesheet" type="text/css">
  <!-- CSS OUT -->

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

</head>


<body>

<div class="wrapper" style="height:100%; /*min-height:700px;*/">
	
    <div class="header" style="position: absolute; top: 0; left: 0; right: 0; width: 100%;">
        <div class="header-content">
            <div class="header-logo">
            	<a href="index.php"><img src="images/logo-headercmnv.png" alt="cmnv" /></a>
            </div>
            <div class="header-menu">
              <ul>
                  <li><a href="comunidad.php">Comunidad</a></li>
                  <li><a href="astillero.php">Astillero</a></li>
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
                        <a href="astillero.php">Astillero</a>
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
    
    <!--SLIDER-->
    <div id="slides">
      <div class="slides-container">
        <a href="astillero.php"><img src="images/slider-dos-01.jpg"></a>
        <a href="astillero.php"><img src="images/slider-dos-02.jpg"></a>
        <a href="astillero.php"><img src="images/slider-dos-03.jpg"></a>
        <a href="astillero.php"><img src="images/slider-dos-04.jpg"></a>     
      </div>
      <!--<nav class="slides-navigation">
        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Previous</a>
      </nav>-->
    </div>
    

    <!--FOOTER-->
    <div class="footer" style="position:absolute; bottom:0; left:0; right:0; width:100%; z-index:99999">
        <div class="footer-izq">
            <div class="footer-item hidden-xs">
                CMNV - COMUNIDAD DE INVERSIÓN<br>+54 11 6009 7300 / <a href="mailto:info@cmnv.com.ar" style="color:#999;">info@cmnv.com.ar</a><br>Zufriategui 627 Piso 4 / Bs As / Arg
            </div>
            <!--  <div class="footer-mobile hidden-md hidden-lg">CMNV - COMUNIDAD DE INVERSIÓN</div>  -->
        </div>
        <div class="footer-der">
            <a target="_blank" href="https://www.facebook.com/astillerocatalinassur"><img src="images/ico-rrss-facebook.jpg" width="25px" /></a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.linkedin.com"><img src="images/ico-rrss-linkedin.jpg" width="25px" /></a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.instagram.com/cmnv_/"><img src="images/ico-rrss-instagram2.jpg" width="25px" /></a>
        </div>
    </div>
    <!--FOOTER: END-->
    
</div>


<!-- JS -->
<script src="js/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.dlmenu.js"></script>

<!-- Slider -->
<script>
$(function() {
  $('#slides').superslides({
  hashchange: true,
  play: 3500
  });
});
</script>

<!-- Dlmenu -->
<script>
	$(function() {
		$( '#dl-menu' ).dlmenu();
	});
</script>



</body>
</html>
