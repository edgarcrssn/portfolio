<?php
require_once('PDO.php');

$errorMessage = null;
$successMessage = null;

if(isset($_POST['send']))
{
    if(
    !empty($_POST['name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['tel']) &&
    !empty($_POST['object']) &&
    !empty($_POST['message']))
    {
        $formRequest = $db->prepare('INSERT INTO contact(fullName, email, tel, messageObject, messageContent) VALUES(:fullName, :email, :tel, :messageObject, :messageContent)');
        $formRequest->execute(array(
            'fullName' => htmlentities($_POST['name']),
            'email' => htmlentities($_POST['email']),
            'tel' => htmlentities($_POST['tel']),
            'messageObject' => htmlentities($_POST['object']),
            'messageContent' => htmlentities($_POST['message'])
            ));

        mail('edgarcresson@hotmail.com', htmlentities($_POST['object']), htmlentities($_POST['message']));

        $successMessage = 'Message envoyé avec succès !';
    }
    else{
        $errorMessage = 'Veuillez remplir tous les champs avant envoi.';
    }
}