<?php

echo 'email verzenden';
$JCEmail = "mail@cedricdebuck.be";

$name = isset($_POST['name']) ? (string) $_POST['name'] : '';
$email = isset($_POST['email']) ? (string) $_POST['email'] : '';
$subject = isset($_POST['msg_subject']) ? (string) $_POST['msg_subject'] : '';
$message = isset($_POST['message']) ? (string) $_POST['message'] : '';
$moduleAction = isset($_POST['moduleAction']) ? (string) $_POST['moduleAction'] : '';

if ($moduleAction === 'sendEmail') {
    echo 'send email is pressed';

    $emailMessage = "Er werd een bericht verstuurd via de website:

    Naam: $name
    E-mail: $email
    Onderwerp: $subject

    Bericht:
    $message

    ---EINDE---
    ";

    echo $emailMessage;

    mail($JCEmail, $subject, $emailMessage);

    phpinfo();
}

?>
