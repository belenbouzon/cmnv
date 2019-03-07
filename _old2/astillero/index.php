<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta content="width=device-width,initial-scale=1.0" name="viewport">

<!-- CSS IN -->
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<!-- CSS OUT -->

<!-- TITLE IN -->
<title>ASTILLERO</title>
<!-- TITLE OUT -->

<!-- METATAGS IN -->
<meta name="title" content="ASTILLERO">
<meta name="description" content="ASTILLERO">
<meta name="keywords" content="ASTILLERO">
<meta name="distribution" content="Global">
<!-- METATAGS OUT -->

<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76301954-4', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body style="background: url(images/tramaedificio.gif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;	">

<div class="wrapper">
	
    
    <div class="line">
    
    	<div class="padding-uno" style="float:left; width:100%; display:block;  position:relative; text-align:center">
    		<img class="img-astillero img-responsive" src="images/astillero-marca.png" />
        </div>
        
        <div style="float:left; width:100%; display:block; margin:35px 0; position:relative; text-align:center">
            <a class="link-astillero" href="http://www.cmnv.com.ar/astillero/descargas/brochure-astillero.pdf" target="_blank">ver Brochure</a><br/>
            <a class="link-astillero" href="https://goo.gl/maps/5C2CGfeMG7r" target="_blank">ubicaci�n del proyecto</a><br/>
    	</div>
        
    </div>
    
    <div id="formulario" class="line" style="background-color:#FFF; margin-top:30px; text-align:center; ">
    	
        	
        
            <form method="POST" enctype="multipart/form-data" action="index.php#formulario">                            
                
                <label><input name="nombre" type="text" value="" placeholder="Nombre" class="inputs" style="width: 95%;" required=""></label>
                
                <label><input name="empresa" type="text" value="" placeholder="Empresa" class="inputs" style="width: 95%;" required=""></label>
                
                <label><input name="mail" type="email" value="" placeholder="Mail" class="inputs" style="width: 95%;" required=""></label>
                
                <label><input name="telefono" type="text" value="" placeholder="Telefono" class="inputs" style="width: 95%;" required=""></label>
                
                <label>
                    <textarea class="inputs" name="comentarios" placeholder="Escrib� aqu� tu consulta" style="width: 95%; height:140px; border:inherit;" required=""></textarea>
                </label>
                    <label style="text-align:center; padding:0"><input type="submit" class="btn" value="Enviar Consulta" style="margin:0 0px 0 0; font-weight:bold">
                </label>
                                        
           </form>
           <label>
           <h1 class="h-azul-grande"><span style="color:#F00; font-size:12px"> <?php if($_POST) { include("form-contacto.php"); } ?> <span style="color: #2EB1E5; font-size: 18px; margin: 8px 0 10px 30px;  display: block;"> <?php echo $exitos; ?> </span></span></h1>
       		</label>
    </div>
    
    
    
    
    
    
    
    <div style="float:left; width:100%; display:block; margin:80px 0 5px; position:relative; text-align:center">
    	<a href="../index.html"><img src="images/logo-footer-cmnv.png" /></a>
    </div>
    
    <div class="footer" style="float:left; width:100%; display:block; margin:0px 0 20px; position:relative; text-align:center">
    	COMUNIDAD DE INVERSI�N S.A.<br/>
		<span style="color:#FFF">ZUFRIATEGUI 627 PISO 5 / VTE LOPEZ / BS AS</span><br/>
		<span style="color:#FFF">+54 11 6009 7300 / <a href="mailto:info@cmnv.com.ar">INFO@CMNV.COM.AR</a></span>
    </div>
    
</div>

</body>
</html>