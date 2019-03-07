<?php

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

require_once('php-mailer/PHPMailerAutoload.php');
$mail = new PHPMailer();

// Enter your email address:
$to = "jc@sotogomez.com.ar";

// Form Fields


$direccion = $_POST["widget-contact-form-direccion"];
$localidad = $_POST["widget-contact-form-localidad"];
$provincia = $_POST["widget-contact-form-provincia"];
$superficie = $_POST["widget-contact-form-superficie"];
$largo = $_POST["widget-contact-form-largo"];
$ancho = $_POST["widget-contact-form-ancho"];

if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($antispam) && $antispam == '') {
    
 if($email != '' && $message != '') {
            
                //If you don't receive the email, enable and configure these parameters below: 
     
                //$mail->isSMTP();                                      // Set mailer to use SMTP
                //$mail->Host = 'mail.yourserver.com';                  // Specify main and backup SMTP servers, example: smtp1.example.com;smtp2.example.com
                //$mail->SMTPAuth = true;                               // Enable SMTP authentication
                //$mail->Username = 'SMTP username';                    // SMTP username
                //$mail->Password = 'SMTP password';                    // SMTP password
                //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                //$mail->Port = 587;                                    // TCP port to connect to 
     
     	        $mail->IsHTML(true);                                    // Set email format to HTML
                $mail->CharSet = 'UTF-8';
     

          


                $direccion = isset($direccion) ? "Dirección: $direccion<br><br>" : '';
                $localidad = isset($localidad) ? "Localidad: $localidad<br><br>" : '';
                $provincia = isset($provincia) ? "Localidad: $provincia<br><br>" : '';
                $superficie = isset($superficie) ? "Localidad: $superficie<br><br>" : '';
                $largo = isset($largo) ? "Localidad: $largo<br><br>" : '';
                $ancho = isset($ancho) ? "Localidad: $ancho<br><br>" : '';

                $mail->Body = $direccion . $localidad . $provincia . $superficie . $largo . $ancho . '<br><br><br>This email was sent from: ' . $_SERVER['HTTP_REFERER'];
     
                         
        if(!$mail->Send()) {
		   $response = array ('response'=>'error', 'message'=> $mail->ErrorInfo);  
            
		}else {
           $response = array ('response'=>'success');  
        }
     echo json_encode($response);

} else {
	$response = array ('response'=>'error');     
	echo json_encode($response);
}
    
}
?>
