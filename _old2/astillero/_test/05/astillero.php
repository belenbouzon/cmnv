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
<script src="js/jssor.slider-22.0.15.mini.js" type="text/javascript" data-library="jssor.slider.mini" data-version="22.0.15"></script>
<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
</script>
    
<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_2", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
</script>

<!-- slider -->
		


<!-- GOTO CONTACTO -->
<script>
$(document).ready(function(){
	$('ul.dropdown > li > a').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
</script>
<!-- GOTO CONTACTO -->	

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.elevatezoom.js"></script>


</head>

<body style="background-color:#0A1330">

<div class="wrapper">
	
    <div class="header">
    	
        <div class="header-content">
        
            <div class="header-logo">
            	<a href="index.php"><img src="images/logo-headercmnv.png" alt="cmnv" /></a>
            </div>
            
            <div class="header-menu">
                <ul>
                    <!--<li><a href="#">Empresa</a></li>-->
                    <li><a class="active" href="#">Lanzamientos</a></li>
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
                                <a href="#">Lanzamientos</a>
                                <!--<a href="#">Noticias</a>-->
                                <a href="contacto.php">Contacto</a>
							</li>
						</ul>
					</div> 
            </div>
            
       </div>
        
    </div>
    
    <div class="slider-marca">
    	<img class="img-responsive" src="images/logo-astillero-principal.png" alt="Astillero" />
        
        <div class="menu-responsive" style="margin:50px 0">
                    
            <div id="dd" class="wrapper-dropdown-5" tabindex="1">Mas información
                <ul class="dropdown">
                	<li><a href="#vuelvoalsur">Vuelvo al Sur</a></li>
                    <li><a href="#elproyecto">Sobre el Proyecto</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <li><a href="#unidades">Unidades</a></li>
                    <li><a href="#ubicacion">Ubicación</a></li>
                    <li><a href="#consultas">Consultas</a></li>
                </ul>
            </div>                  
                        
    	</div>
        
    </div>
    
    <div class="slider-dos" id="vuelvoalsur">
    	
        
        <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1280px; height: 650px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1280px; height: 650px; overflow: hidden;">
            
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <div class="placa-slider-txt" style="width: 800px; top: 200px; left: 200px;">
        			Vuelvo al Sur, <br/>
                    como se vuelve siempre al amor, <br/>
                    vuelvo a vos, con mi deseo, con mi temor. <br/>
                    Llevo el Sur, como un destino del corazón,<br/>
                    soy del Sur, como los aires del bandoneón.<br/>
        		</div>
                <img data-u="image" src="images/slider-uno-01.jpg" />
            </div>
          
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <div class="placa-slider-txt" style="width: 800px; top: 200px; left: 200px;">
        			Sueño el Sur, inmensa luna, cielo al revés, <br/>
                    busco el Sur, el tiempo abierto, why su después.<br/>
                    Quiero al Sur, su buena gente, su dignidad,<br/>
                    siento el Sur, como tu cuerpo en la intimidad.<br/>
                    Te quiero Sur, Sur, te quiero.<br/>
        		</div>
                <img data-u="image" src="images/slider-uno-02.jpg" />
            </div>
           
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <div class="placa-slider-txt" style="width: 800px; top: 200px; left: 200px;">
        			Vuelvo al Sur,<br/>
                    como se vuelve siempre al amor, <br/>
                    vuelvo a vos, con mi deseo, con mi temor.<br/>
                    Quiero al Sur, su buena gente, su dignidad,<br/>
                    siento el Sur, como tu cuerpo en la intimidad.<br/>
        		</div>
                <img data-u="image" src="images/slider-uno-03.jpg" />
            </div>
            
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <div class="placa-slider-txt" style="width: 800px; top: 240px; left: 200px;">
        			Vuelvo al Sur, <br/>
                    llevo el Sur, te quiero Sur, te quiero Sur...<br/>
                    <i>Astor Piazzolla & Pino Solanas. Fotos de Jorge Miño.</i>
        		</div>
                <img data-u="image" src="images/slider-uno-04.jpg" />
            </div>
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    	</div>
        
        
        
    </div>
    
    <div class="slider-uno" id="elproyecto">
    	

        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1280px; height: 650px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1280px; height: 650px; overflow: hidden;">
            
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <img data-u="image" src="images/slider-dos-01.jpg" />
            </div>
           
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <img data-u="image" src="images/slider-dos-02.jpg" />
            </div>
            
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <img data-u="image" src="images/slider-dos-03.jpg" />
            </div>
            
            <div data-p="225.00" data-po="80% 55%" style="display:none; position:relative">
                <img data-u="image" src="images/slider-dos-04.jpg" />
            </div>
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    	</div>
        
        
        
    </div>
    
    <div class="slider-uno-data">
    	<p>Sobre un antiguo astillero en la ribera, en la calle que celebra el arrojo de Juan Bautista Azopardo, el gran corsario maltés al mando de la defensa de las aguas del Río de la Plata para el primer gobierno patrio, nace un edificio pionero.</p>
        <p>Más de 20.000 m² de espacios contemporáneos de usos mixtos, con unidades de 25 a 140 m², sobre un zócalo gastronómico con todos los servicios, en la puerta de entrada a la ciudad.</p>
        <p>Un enclave privilegiado, rodeado de museos, universidades y parques. Entre el barrio más antiguo de la ciudad y las grandes piezas de infraestructura que conectan la historia de Buenos Aires con el mundo, Astillero será la nave insignia de un nuevo distrito.</p>
        <p>¡BIENVENIDOS A BORDO!</p>
    </div>
    
    
    
    <div class="data-amenities" id="amenities">
    	
    	<h2>Amenities y Servicios</h2>
        
        
        <ul>
        	<li>VISTAS A LA RESERVA ECOLÓGICA Y AL RÍO DE LA PLATA</li>
            <li>PISCINA SEMI-OLIMPICA DE 25MTS</li>
            <li>PILETA BAJA PARA RELAX</li>
            <li>LOUNGE BAR</li>
            <li>FITNESS CENTER CON VESTUARIOS</li>
            <li>SOLARIUM CON JACUZZI CLIMATIZADO EN TERRAZA</li>
            <li>SECTOR PRIVADO DE PARRILLAS EN TERRAZA</li>
            <li>SALON PARA MASAJES</li>
            <li>CAVA PRIVADA CON LOCKERS</li>
            <li>BUSINESS CENTER</li>
            <li>LAUNDRY</li>
            <li>ESPACIO PARA BICICLETAS</li>
            <li>SECTOR LAVA-AUTOS EN SS</li>
            <li>VIGILANCIA 24HS</li>
            <li>SISTEMA DE SEGURIDAD DIGITAL</li>
            <li>INTERNET INALAMBRICO EN AREAS COMUNES</li>
            <li>GRUPO ELECTRÓGENO PARA SERVICIOS COMUNES</li>
            <li>ESPACIOS VERDES CON CRITERIO DE SUSTENTABILIDAD</li>
            <li>ILUMINACIÓN SUSTENTABLE</li>
        </ul>
        
    </div>
    
    <div class="data-unidades" id="unidades">
    	<h2>Unidades</h2>
        
        
        <ul>
        	<li>TERRAZAS Y BALCONES PRIVADOS CON  VISTAS A LA RESERVA Y PUERTO MADERO</li>
            <li>CARPINTERÍAS EXTERIORES DE PISO A TECHO  CON DOBLE VIDRIO</li>
            <li>PISOS EN PORCELLANATO, MADERA Y/O CEMENTO ALISADO</li>
            <li>AGUA CALIENTE CENTRAL</li>
            <li>AIRE ACONDICIONADO EN TODAS LAS UNIDADES</li>
            <li>BAÑOS CON DISEÑO MODERNO CON ARTEFACTOS DE PRIMERA MARCA Y MESADA DE MARMOL</li>
            <li>MOBILIARIO DE COCINA Y FRENTE  DE PLACARDS BLANCOS</li>
        </ul>
    </div>
    
    <div class="data-icons">
    	
        <div class="data-icons-content">
    	
        	<div class="data-icons-content-brochure">
				<div style="width:32px; float:left;">
                	<img src="images/ico-brochure.png" />
                </div>
                <div style="float:left; padding:5px 0 0 15px">
                	<a target="_blank" href="http://www.cmnv.com.ar/astillero/descargas/brochure-astillero.pdf">Brochure</a>
                </div>
            </div>
            <div class="data-icons-content-facebook">
				<div style="width:32px; float:left;">
                	<img src="images/ico-facebook.png" />
                </div>
                <div style="float:left; padding:5px 0 0 15px">
                	<a target="_blank" href="https://www.facebook.com/astillerocatalinassur">Facebook</a>
                </div>
    		</div>

    	</div>
        
    </div>
    
    <div class="zone-contact">
    
    	<div class="zone-contact-content">
    	
            <div class="zone-contact-top">
        
                <div id="ubicacion" class="zone-contact-ubicacion">
                    
                    <h2>UBICACIÓN</h2>
                    	<!--
                        <div class="block-in maps" style="padding:0px;text-align:center; max-width:100%">
                    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.248952656621!2d-58.36903738476988!3d-34.623148580454405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a334cdf7d1bf95%3A0xc43ac587e6fa756a!2sAzopardo+1337%2C+C1107ADW+CABA!5e0!3m2!1ses!2sar!4v1483987065938" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    	</div>
                        -->
                    <div class="mapweb">
                    <img class="img-responsive" id="zoom_01" src='images/mapa-ubicacion-astillero.jpg' data-zoom-image="images/mapa-ubicacion-astillero-zoom.jpg"/>
                    </div>
                    <div class="mapmobile">
                    <img class="img-responsive" src='images/mapa-ubicacion-astillero.jpg'/>
                    </div>
                    
                    <span style="font: normal 13px/16px 'Questrial', 'Helvetica Neue', Helvetica, Arial, sans-serif;">Azopardo 1337, Ciudad de Buenos Aires</span> <a href="https://goo.gl/maps/5C2CGfeMG7r" target="_blank" style="font: normal 13px/16px 'Questrial', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #3C425A; cursor: pointer">Ver en GoogleMaps</a>
                </div>
                
                <div id="consultas" class="zone-contact-form">
                    
                    <h2>CONSULTAS</h2>
                    
                    
                    
                    <div id="formulario" class="line" style="background-color:#FFF; margin-top:30px; text-align:center; ">
    	

                        <form method="POST" enctype="multipart/form-data" action="index.php#formulario">                            
                            
                            <label><input name="nombre" type="text" value="" placeholder="Nombre" class="inputs" style="width: 98%;" required=""></label>
                            
                            <label><input name="empresa" type="text" value="" placeholder="Empresa" class="inputs" style="width: 98%;" required=""></label>
                            
                            <label><input name="mail" type="email" value="" placeholder="Mail" class="inputs" style="width: 98%;" required=""></label>
                            
                            <label><input name="telefono" type="text" value="" placeholder="Telefono" class="inputs" style="width: 98%;" required=""></label>
                                
                                <label>
                                    <textarea class="inputs" name="comentarios" placeholder="Escribí aquí tu consulta" style="width: 98%; height:140px;" required=""></textarea>
                                </label>
                                    <label style="text-align:left; padding:0"><input type="submit" class="btn" value="Enviar Consulta" style="margin:20px 0px 0 0px; font-weight:bold">
                                </label>
                                                        
                           </form>
                           <label>
                           		<label>
           <h1 class="h-azul-grande"><span style="color:#F00; font-size:12px"> <?php if($_POST) { include("form-contacto.php"); } ?> <span style="color: #090; font-size: 18px; margin: 8px 0 10px 30px;  display: block;"> <?php echo $exitos; ?> </span></span></h1>
       		</label>
                           </label>
                    
                    </div>
                    
                    
                    
                    
                </div>
            
            </div>
            
            <div class="zone-contact-down">
            
                <div class="zone-contact-logos">
                
                	<div class="zone-contact-logos-item-txt" style="margin:0 0 30px 0">
                    	Comercializan
                    </div>	
                    <div class="zone-contact-logos-item">
                    	<img src="images/logo-dimitrio.png" /><br/>
                        <a href="http://www.dimitrio.com.ar" target="_blank" style="font-style:italic; color:#21386E; font: italic 13px/16px 'EB Garamond', 'Helvetica Neue', Helvetica, Arial, sans-serif; cursor:pointer">www.dimitrio.com.ar</a>
                    </div>
                    <div class="zone-contact-logos-item">
                    	<img src="images/logo-toribio.png" /><br/>
                        <a href="http://www.toribioachaval.com" target="_blank" style="font-style:italic; color:#EB0028; font: italic 13px/16px 'EB Garamond', 'Helvetica Neue', Helvetica, Arial, sans-serif; cursor:pointer">www.toribioachaval.com</a>
                    </div>
                    <div class="zone-contact-logos-item">
                    	<img src="images/logo-ecocheras.png" /><br/>
                        <a href="http://www.ecocheras.com.ar" target="_blank" style="font-style:italic; color:#00ADFF; font: italic 13px/16px 'EB Garamond', 'Helvetica Neue', Helvetica, Arial, sans-serif; cursor:pointer">www.ecocheras.com.ar</a>
                    </div>
                    
                </div>
            
            </div>
            
            
            
            <div class="zone-contact-down" style="margin:60px 0 40px 0">
            
                <div class="zone-contact-logos">
                	
                    <div class="zone-contact-logos-itemconstruye">
                    	<div class="zone-contact-logos-item-txt">
                    		Construye
                    	</div>
                        <div class="zone-contact-logos-item-logoedfan">
                        	<a href="http://www.edfan.com/" target="_blank"><img class="img-responsive" src="images/logo-astillero-edfan.png" /></a>
                        </div>
                    </div>
                    
                    
                    <div class="zone-contact-logos-itemarquitectos">
                    	<div class="zone-contact-logos-item-txt">
                    		Arquitectos
                    	</div>
                        
                        <div class="zone-contact-logos-item-logobma">
                        	<a href="http://www.bmaestudio.com.ar/" target="_blank"><img class="img-responsive" src="images/logo-astillero-bma.png" /></a>
                        </div>
                        <div class="zone-contact-logos-item-logomoarqs">
                        	<a href="http://www.moarqs.com/" target="_blank"><img class="img-responsive" src="images/logo-astillero-moarqs.png" /></a>
                        </div>
                    </div>
                    
                    <div class="zone-contact-logos-itemdesarrolla">
                    	<div class="zone-contact-logos-item-txt">
                    		Desarrolla
                    	</div>
                        <div class="zone-contact-logos-item-logocmnv">
                        	<a href="http://www.cmnv.com.ar/" target="_blank"><img class="img-responsive" src="images/logo-astillero-cmnv.png" /></a>
                        </div>
                    </div>
                    
                </div>
            
            </div>
            
            
            
            
            
            
            
            
    	</div>
        
    </div>
    
    
    <div class="footer">
    	
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


</body>
</html>
