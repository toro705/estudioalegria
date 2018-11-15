<?php 
	// echo "<pre>";
	// print_r($_FILES);
	// echo "</pre>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";}
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'lib/PHPMailer/src/Exception.php';
	require 'lib/PHPMailer/src/PHPMailer.php';
	require 'lib/PHPMailer/src/SMTP.php';
	if ($_SESSION['lang'] == 'es') {
	 	$types = ['image/jpeg', 'image/jpg', 'application/pdf'];
	 	if(in_array($_FILES['cv']['type'], $types)) {
			$mail = new PHPMailer();
		    $mail->setFrom('cv@estudioabffm.com.a', 'Contacto RRHH');
		    $mail->addAddress('cv@estudioabffm.com.a', 'Estudio Alegría');
		    $mail->CharSet = 'UTF-8';
		    if ($mail->addReplyTo($_POST['email'], $_POST['nombre'])) {
		        $mail->Subject = 'Recibió un nuevo CV';
		        $mail->isHTML(true);
		        $mail->Body = '<p><b>Nombre:</b> '.$_POST['nombre'].'</p>';
		        $mail->Body .= '<p><b>Apellido:</b> '.$_POST['apellido'].'</p>';
		        $mail->Body .= '<p><b>Email:</b> '.$_POST['email'].'</p>';
		        $mail->Body .= '<p><b>Teléfono:</b> '.$_POST['telefono'].'</p>';
		        $mail->Body .= '<p><b>Mensaje:</b> '.$_POST['mensaje'].'</p>';
		        $uploadfile = $_FILES['cv']['tmp_name'];
		        $uploadfileName = $_FILES['cv']['name'];
		 		$mail->addAttachment($uploadfile, $uploadfileName);        
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
	        $response['msj'] = 'Extensión incorrecta.';
	        $response['success'] = false;
	 		
	 	}

	} else {
	 	$types = ['image/jpeg', 'image/jpg', 'application/pdf'];
		 	if(in_array($_FILES['cv']['type'], $types)) {
				$mail = new PHPMailer();
			    $mail->setFrom('cv@estudioabffm.com.a', 'Contacto RRHH');
			    $mail->addAddress('cv@estudioabffm.com.a', 'Estudio Alegría');
			    $mail->CharSet = 'UTF-8';
			    if ($mail->addReplyTo($_POST['email'], $_POST['nombre'])) {
			        $mail->Subject = 'Recibió un nuevo CV';
			        $mail->isHTML(true);
			        $mail->Body = '<p><b>Nombre:</b> '.$_POST['nombre'].'</p>';
			        $mail->Body .= '<p><b>Apellido:</b> '.$_POST['apellido'].'</p>';
			        $mail->Body .= '<p><b>Email:</b> '.$_POST['email'].'</p>';
			        $mail->Body .= '<p><b>Teléfono:</b> '.$_POST['telefono'].'</p>';
			        $mail->Body .= '<p><b>Mensaje:</b> '.$_POST['mensaje'].'</p>';
			        $uploadfile = $_FILES['cv']['tmp_name'];
			        $uploadfileName = $_FILES['cv']['name'];
			 		$mail->addAttachment($uploadfile, $uploadfileName);        
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

		 	} else {
		        $response['msj'] = 'Invalid file extension.';
		        $response['success'] = false;
		 		
		 	}
		
	}
	die(json_encode($response));
?>