<?php



$prénom= $_POST['firstname'];
$nom = $_POST['lastname']; 
$sujet = $_POST['sujet']; 
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];

echo 'Merci ' . $prénom . ' ' . $nom . ' de nous avoir contacté à propos de ' . $sujet . ' . '
. ' Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande :' . $message;
