<?php  
session_start();
include "db_conn.php";
$currentid = 1;
$requete = $conn->prepare('SELECT demarche.Id, demarche.Date_contact, demarche.Type_demarche, demarche.Etat, demarche.Id_Contact, demarche.Id_Utilisateur, contact.Nom, contact.Tel, contact.Email FROM `demarche` INNER JOIN contact ON contact.Id = demarche.Id_Contact WHERE Id_Utilisateur = ' .$currentid); //je pense que y a besoin de ca 
$requete->execute();

$demarches = $requete->fetchall();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démarches en cours</title>
    <h1>Liste des démarches</h1>
<?php

$nombredemarches=count($demarches);

?>

<table style="width: 100%">
    <tr>
        <th>Démarche</th>
        <th>Début de la démarche</th>
        <th>Type de démarche</th>
        <th>Etat de la démarche</th>
        <th>Id du contact</th>
        <th>Id de l'utilisateur</th>
        <th>Nom du contact</th>
        <th>Tel du contact</th>
        <th>Email du contact</th>
    </tr>

<?php
for ($i = 0; $i < $nombredemarches; $i++) {
    $demarche = $demarches[$i];
    echo("<tr>");   
        //echo(implode(" ", $demarches[0]));
        echo("<td>" .$demarche['Id'] ."</td>");
        echo("<td>" .$demarche['Date_contact'] ."</td>");
        echo("<td>" .$demarche['Type_demarche'] ."</td>");
        echo("<td>" .$demarche['Etat'] ."</td>");
        echo("<td>" .$demarche['Id_Contact'] ."</td>");
        echo("<td>" .$demarche['Id_Utilisateur'] ."</td>");
        echo("<td>" .$demarche['Nom'] ."</td>");
        echo("<td>" .$demarche['Tel'] ."</td>");
        echo("<td>" .$demarche['Email'] ."</td>");
    echo("</tr>");   
}

?>
</table>