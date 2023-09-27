<?php  

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuración inicial del servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'outlaws1012@gmail.com';
    $phpmailer->Password = 'cksc arcu bxco xbyn';

    // Añadiendo destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

    // Definiendo el contenido del email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar correo
    $phpmailer->send();

}

?>