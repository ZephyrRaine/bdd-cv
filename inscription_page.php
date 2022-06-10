<?php  
include "db_conn.php";


// submit_contact.php
if (!isset($_POST['email']) || !isset($_POST['message']))
{
      echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}     

$email = $_POST['Email'];
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
$adresse = $_POST['Adresse'];
$tel = $_POST['Tel'];
$password = $_POST['Password'];

