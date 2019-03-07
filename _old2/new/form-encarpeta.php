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






if (!$errores) {
	
	$envio='juancarlos@sotogomez.com.ar' ;
	
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];
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
	
	MUCHAS GRACIAS POR CONTACTARSE CON CMNV
	
	
	Nos pondremos en contacto con usted sobre nuestros nuevos proyectos.
	";
	
	if (mail($envio,"EN CARPETA web",$message, "From: noreply@cmnv.com.ar")) {
	$exitos = "El formulario se ha enviado correctamente";
	$_POST = "";
	mail($mail, "Autorespuesta desde ventas@cmnv.com.ar", $message2, "From: ventas@cmnv.com.ar");
	}
} 




?>

