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

	$envio='astillero@cmnv.com.ar' ;
	//$envio='andres@nicorisso.com' ;
	
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
	
	MUCHAS GRACIAS POR CONTACTARSE CON ASTILLERO / CMNV
	
	
	Nos pondremos en contacto con usted a la brevedad.
	";
	
	if (mail($envio,"Contacto desde ASTILLERO / CMNV",$message, "From: noreply@cmnv.com.ar")) {
	$exitos = "El formulario se ha enviado correctamente";
	$_POST = "";
	mail($mail, "Autorespuesta desde astillero@cmnv.com.ar", $message2, "From: astillero@cmnv.com.ar");
	}
} 




?>

