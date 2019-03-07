<?php
/**
 * HEADER
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--
<meta name="viewport" content="width=device-width, initial-scale=1">
-->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

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



<link href="http://www.cmnv.com.ar/css/style.css" rel="stylesheet" type="text/css">
<link href="http://www.cmnv.com.ar/css/component.css" rel="stylesheet" type="text/css">

<script src="http://www.cmnv.com.ar/js/jquery.elevatezoom.js"></script>

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


<script src="http://www.cmnv.com.ar/js/modernizr.custom.js"></script>
<script src="http://www.cmnv.com.ar/js/jquery.dlmenu.js"></script>



<script>
    $(function() {
        $( '#dl-menu' ).dlmenu();
    });
</script>

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>

<script>
$('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
});
</script>

<script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750
   }); 
</script>




</head>

<body <?php body_class(); ?>>

<div class="header">
    
    	<div class="header">
    	
            <div class="header-content">
            
                <div class="header-logo">
                    <a href="http://www.cmnv.com.ar/"><img src="http://www.cmnv.com.ar/noticias/wp-content/themes/cmnv/images/logo-headercmnv.png" alt="cmnv" /></a>
                </div>
                
                <div class="header-menu">
                    <ul>
                        <li><a href="http://www.cmnv.com.ar/comunidad.php">Comunidad</a></li>
                        <li><a href="http://www.cmnv.com.ar/astillero.php">Astillero</a></li>
                        <li><a href="http://www.cmnv.com.ar/encarpeta.php">En carpeta</a></li>
                        <li><a href="http://www.cmnv.com.ar/arte.php">Arte</a></li>
                        <li><a class="active" href="#">Noticias</a></li>
                        <li><a href="http://www.cmnv.com.ar/contacto.php">Contacto</a></li>                
                    </ul>
                </div>
                <div class="header-menu-mobile">
                    <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a href="http://www.cmnv.com.ar/empresa.php">Empresa</a>
                                    <a href="http://www.cmnv.com.ar/astillero.php">Astillero</a>
                                    <a href="http://www.cmnv.com.ar/encarpeta.php">En carpeta</a>
                                    <a href="http://www.cmnv.com.ar/arte.php">Arte</a>
                                    <a href="#">Noticias</a>
                                    <a href="http://www.cmnv.com.ar/contacto.php">Contacto</a>
                                </li>
                            </ul>
                        </div> 
                </div>
                
           </div>
            
        </div>
    
</div>


<div id="page" class="hfeed site">
	
	
	
	<div id="main" class="clearfix">
		<div class="inner-wrap clearfix">