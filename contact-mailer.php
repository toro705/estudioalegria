<?php 
    session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'lib/PHPMailer/src/Exception.php';
	require 'lib/PHPMailer/src/PHPMailer.php';
	require 'lib/PHPMailer/src/SMTP.php';
    if ($_SESSION['lang'] == 'es') {
    	$mail = new PHPMailer();
        $mail->setFrom('info@estudioabffm.com.ar', 'Contacto Web');
        $mail->addAddress('info@estudioabffm.com.ar', 'Estudio Alegría');
        $mail->CharSet = 'UTF-8';    
        if ($mail->addReplyTo($_POST['email'], $_POST['nombre'])) {
            $mail->Subject = 'Recibió un nuevo contacto desde su Web';
            $mail->isHTML(true);
            $mail->Body = '<p><b>Nombre:</b> '.$_POST['nombre'].'</p>';
            $mail->Body .= '<p><b>Apellido:</b> '.$_POST['apellido'].'</p>';
            $mail->Body .= '<p><b>Email:</b> '.$_POST['email'].'</p>';
            $mail->Body .= '<p><b>Teléfono:</b> '.$_POST['telefono'].'</p>';
            $mail->Body .= '<p><b>Asunto:</b> '.$_POST['asunto'].'</p>';
            $mail->Body .= '<p><b>Mensaje:</b> '.$_POST['mensaje'].'</p>';
            if (!$mail->send()) {
                    $response['msj'] = 'Ocurrió un error, intentelo nuevamente mas tarde.';
                    $response['success'] = false;
                } else {
                    $response['msj'] = 'Mensaje Enviado.';
                    $response['success'] = true;
                }
            } else {
                $response['msj'] = 'Email Incorrecto.';
                $response['success'] = false;
            }
    } else {
        $mail = new PHPMailer();
                $mail->setFrom('info@estudioabffm.com.ar', 'Contacto Web');
                $mail->addAddress('info@estudioabffm.com.ar', 'Estudio Alegría');
                $mail->CharSet = 'UTF-8';    
                if ($mail->addReplyTo($_POST['email'], $_POST['nombre'])) {
                    $mail->Subject = 'Recibió un nuevo contacto desde su Web';
                    $mail->isHTML(true);
                    $mail->Body = '<p><b>Nombre:</b> '.$_POST['nombre'].'</p>';
                    $mail->Body .= '<p><b>Apellido:</b> '.$_POST['apellido'].'</p>';
                    $mail->Body .= '<p><b>Email:</b> '.$_POST['email'].'</p>';
                    $mail->Body .= '<p><b>Teléfono:</b> '.$_POST['telefono'].'</p>';
                    $mail->Body .= '<p><b>Asunto:</b> '.$_POST['asunto'].'</p>';
                    $mail->Body .= '<p><b>Mensaje:</b> '.$_POST['mensaje'].'</p>';
                    if (!$mail->send()) {
                        $response['msj'] = 'Sorry, something went wrong. Please try again later.';
                        $response['success'] = false;
                    } else {
                        $response['msj'] = 'Message sent! Thanks for contacting us.';
                        $response['success'] = true;
                    }
                } else {
                    $response['msj'] = 'Invalid email address, message ignored.';
                    $response['success'] = false;
                }
        
    }

	die(json_encode($response));

	// return $mail->Send();	
?>