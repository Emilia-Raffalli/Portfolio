<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $errors = [];

    if (strlen($lastName) <= 3) { // nom doit être supérieur ou égal à 3 lettres
        $errors['lastName'] = "Votre nom doit comporter au moins 3 caractères.";
    }

    // Validation de l'adresse email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Veuillez saisir une adresse email valide.";
    }

    $to = "e.raffalli@hotmail.fr";
    $subject = "Nouveau message de $lastName";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $messageBody = "Nom: $lastName\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Objet: $subject\n";
    $messageBody .= "Message:\n$message";

    $success = mail($to, $subject, $messageBody, $headers);

    if ($success) {
        $messageSendMail = "Votre message a été envoyé avec succès. Merci !";
    } else {
        $error['sendMail'] = "Une erreur s'est produite lors de l'envoi du message.";
    }
}


?>




