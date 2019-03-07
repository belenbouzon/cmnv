<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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

<script src="js/jquery-1.8.3.min.js"></script>


</head>


<body class="bg-home">

<div class="wrapper" style="min-height:300px">
	
    <div class="header">
    	
        <div class="header-content">
        
            <div class="header-logo">
            	<a href="index.php"><img src="images/logo-headercmnv.png" alt="cmnv" /></a>
            </div>
            
            <div class="header-menu">
                <ul>
                    <!--<li><a href="#">Empresa</a></li>-->
                    <li><a href="astillero.php">Lanzamientos</a></li>
                    <!--<li><a href="#">Noticias</a></li>-->
                    <li><a href="contacto.php">Contacto</a></li>                
                </ul>
            </div>
            <div class="header-menu-mobile">
                <div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Menu</button>
						<ul class="dl-menu">
							<li>
								<!--<a href="#">Empresa</a>-->
                                <a href="astillero.php">Lanzamientos</a>
                                <!--<a href="#">Noticias</a>-->
                                <a href="contacto.php">Contacto</a>
							</li>
						</ul>
					</div> 
            </div>
            
       </div>
        
    </div>
    
    
    
    
    
    
    
    
    <div class="slider-home">
    	
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="footer" style="position:absolute; bottom:0; left:0; right:0; width:100%;">
    	
        <div class="footer-item">© 2017. Todos los derechos reservados. Comunidad de Inversión S.A.</div><div class="footer-item">  Zufriategui 627 Piso 5 / Bs As / Arg / +54 11 6009 7300 / info@cmnv.com.ar</div>
        
    </div>
    
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
