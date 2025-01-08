<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; // Assurez-vous que ce chemin est correct

function sendMail($email, $name, $message){
    $mail = new PHPMailer(true);
    try {
        // Paramètres du serveur
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io'; // Remplacez par votre serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = '5aa23dd79dd682'; // Remplacez par votre adresse email
        $mail->Password = '********958a'; // Remplacez par votre mot de passe email
        $mail->Port = 2525; // Remplacez par le port SMTP approprié

        // Destinataires
        $mail->setFrom($email, $name);
        $mail->addAddress('josiasmbogle237@gmail.com'); // Ajoutez un destinataire

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = "Message de $name";
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);

        $mail->send();
        return '<p class="alert alert-success" role="alert">email envoyé</p>';
    } catch (Exception $e) {
        return '<p class="alert alert-warning" role="alert">un probleme est survenu lors de l\'envoi du mail veuillez reessayer. Mailer Error: ' . $mail->ErrorInfo . '</p>';
    }
}

function verifData($email, $name, $message) {
    if(empty($email)){
        return '<p class="alert alert-primary" role="alert">email vide</p>';
    }
    if(empty($name)){
        return '<p class="alert alert-primary" role="alert">nom vide</p>';
    }
    if(empty($message)){
        return '<p class="alert alert-primary" role="alert">message vide</p>';
    }
    return sendMail($email, $name, $message);
}
?>