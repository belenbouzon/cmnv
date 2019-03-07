<?php



$errores="";

if($_POST['nombre'] == "") {
	$errores['nombre']= "Ingrese algún nombre.<br>";	
}
if($_POST['telefono'] == "") {
	$errores['telefono']= "Debe ingresar algún teléfono.<br>";	
}
$i=substr_count($_POST['mail'], '@');
if($i != 1){
	$errores['mail']= "Escriba bien su e-mail";
}
if($_POST['empresa'] == "") {
	$errores['empresa']= "Debe ingresar alguna empresa.<br>";	
}
if($_POST['comentarios'] == "") {
	$errores['comentarios']= "Debe ingresar algún mensaje.<br>";	
}







if (!$errores) {

	$envio='juancarlos@sotogomez.com.ar' ;
	
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];
	$comentarios = $_POST['comentarios'];
	$empresa = $_POST['empresa'];
	$date = date("d/m/Y H:i:s");
	
	$message = "
	
	Nombre y Apellido: ".$nombre."
	Mail: ".$mail."
	Telefono: ".$telefono."
	Asunto: ".$asunto."
	
	".$comentarios."
	
	-----------------------------------
	Horario:  ".$date."
	
	";
	
	$message2 = "
	
	Gracias por interesarse en nuestro proyecto Astillero-Catalinas Sur.
	Responderemos su mensaje a la brevedad.

	Dpto. Comercial CMNV
	Tel:+54 11 6009 7300
	www.cmnv.com.ar
	";
	
	if (mail($envio,"ASTILLERO web",$message, "From: noreply@cmnv.com.ar")) {
	$exitos = "El formulario se ha enviado correctamente";
	$_POST = "";
	mail($mail, "Gracias por contactarse con Comunidad de Inversión", $message2, "From: ventas@cmnv.com.ar");
	}
} 




?>

