<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta content="width=device-width,initial-scale=1.0" name="viewport">

<!-- CSS IN -->
<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet" type="text/css">

<link href="css/component.css" rel="stylesheet" type="text/css">
<link href="css/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/animateit/animate.min.css" rel="stylesheet">
<link href="css/owlcarousel/owl.carousel.css" rel="stylesheet">
<link href="css/magnific-popup/magnific-popup.css" rel="stylesheet">
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

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|EB+Garamond|Questrial" rel="stylesheet">

<!-- JS -->
<script src="js/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>
<script src="js/plugins-compressed.js"></script>

<style>
	label {display: inline-block !important; /*width: 40%;*/}
	.btn {background-color: #FFF; color: #000;}
	.inputs {height: 40px}

	@media all and (max-width: 700px) {
		label {
			width:90% !important;
		}
		.margin-mobile {margin-bottom:25px;}
	}
</style>
  
</head>


<body>

<div class="wrapper">
	<!--HEADER-->
    <div class="header">
        <div class="header-content">
            <div class="header-logo">
            	<a href="index.php"><img src="images/logo-headercmnv.png" alt="cmnv" /></a>
            </div>
            <div class="header-menu">
                <ul>
                    <li><a href="comunidad.php">Comunidad</a></li>
                    <li><a href="astillero.php">Lanzamientos</a></li>
                    <li><a class="active" href="#">En carpeta</a></li>
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
                            <a href="#">En carpeta</a>
                            <a href="arte.php">Arte</a>
                            <a href="noticias">Noticias</a>
                            <a href="contacto.php">Contacto</a>
						</li>
					</ul>
				</div> 
            </div>
       </div>
    </div>
    <!--HEADER: END-->
    
    <div class="empresa">
    	<div class="empresa-content">
            <div class="empresa-content-descripcion">
                <h1 style="font: normal 40px/45px 'Questrial', 'Helvetica Neue', Helvetica, Arial, sans-serif; margin:20px 0">En carpeta</h1>
        		<div class="small-separator"></div>
        	</div>


        	<div class="row">
				<!--H1-->
				<div class="col-md-6 margin-mobile" data-animation="" data-animation-delay="">
					<div class="portfolio-image effect social-links">
						<img src="images/h1.gif" alt="">
					</div>
				</div>
				<!--END: H1-->
				<!--ASTILLERO II-->
				<div class="col-md-6" data-animation="" data-animation-delay="">
					<div class="portfolio-image effect social-links">
						<img src="images/astillero2.gif" alt="">
					</div>
				</div>
				<!--END: ASTILLERO II-->
				
			</div>

			<div class="row m-t-30">
				<!--MDZ-->
				<div class="col-md-6 margin-mobile" data-animation="" data-animation-delay="">
					<div class="portfolio-image effect social-links">
						<img src="images/mdz.gif" alt="">
					</div>
				</div>
				<!--END: MDZ-->
				<!--PARAGUAY-->
				<div class="col-md-6" data-animation="" data-animation-delay="">
					<div class="portfolio-image effect social-links">
						<img src="images/paraguay.gif" alt="">
					</div>
				</div>
				<!--END: PARAGUAY-->
			</div>

			<!--FORMULARIO-->
			<div class="row m-t-80">
				<p>¿Queres saber más sobre nuestros nuevos proyectos?</p>
			</div>
			<div id="formulario" class="line" style="margin-top:30px; text-align:center; ">
                <form method="POST" enctype="multipart/form-data" action="encarpeta.php#formulario">                            
                    <label style="width: 80%;"><input name="nombre" type="text" value="" placeholder="Nombre" class="inputs" style="width: 90%; background-color: #000; color: #FFF; text-align: center;" required=""></label><br>
                    <label style="width: 80%;"><input name="mail" type="email" value="" placeholder="Mail" class="inputs" style="width: 90%; background-color: #000; color: #FFF; text-align: center;" required=""></label><br>
                    <label style="width: 80%;"><input name="telefono" type="text" value="" placeholder="Telefono" class="inputs" style="width: 90%; background-color: #000; color: #FFF; text-align: center;" required=""></label><br>
                    <label style="text-align:left; padding:0"><input type="submit" class="btn" value="Enviar" style="margin:20px 0px 0 0px; font-weight:bold"></label>                     
                </form>
                <label>
               		<label>
						<h1 class="h-azul-grande"><span style="color:#F00; font-size:12px"> <?php if($_POST) { include("form-contacto-encarpeta.php"); } ?> <span style="color: #090; font-size: 18px; margin: 8px 0 10px 30px;  display: block;"> <?php echo $exitos; ?> </span></span></h1>
					</label>
                </label>
            </div>
            <!--END: FORMULARIO-->


        </div>
    </div>

    
    

    
    <!--FOOTER-->
    <div class="footer">
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


<!-- JS -->
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
<script src="js/functions.js"></script>
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
