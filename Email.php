<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create an instance; passing `true` enables exceptions
$phpmailer = new PHPMailer(true);
$email = $_POST['email'];
$nombre = $_POST['nombre'];

try {
    //Server settings
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'b5183643f4f912';
    $phpmailer->Password = 'ab1f7250edea55';

    //Recipients
    $phpmailer->setFrom('agente@segurototal.com');
    $phpmailer->addAddress($email);
    $phpmailer->Subject = 'Contacta un agente';

    //Content
    $phpmailer->isHTML(TRUE);
    $phpmailer->CharSet = 'UTF-8';
    $contenido  = "<html>";
    $contenido .= "<p><strong> ¡Hola " . $nombre ."! </strong>Gracias por ponerte en contacto con seguroTotal, en breve un agente se pondra en contacto contigo</p>";
    $contenido .= "</html>";
    $phpmailer->Body = $contenido;

    $phpmailer->send();
    echo json_encode('success');
} catch (Exception $e) {
    echo json_encode('error');
}
