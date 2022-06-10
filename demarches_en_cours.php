<?php  
session_start();
include "db_conn.php";
$requete = $conn->prepare('SELECT * FROM demarche'); //je pense que y a besoin de ca 
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
    </tr>

<?php
for ($i = 0; $i < $nombredemarches; $i++) {
    $demarche = $demarches[$i];
    echo("<tr>");   
        //echo(implode(" ", $demarches[0]));
        echo("<td>Démarche n°" .$demarche['Id'] ."</td>");
        echo("<td>Début de la démarche : " .$demarche['Date_contact'] ."</td>");
        echo("<td>Type de démarche : " .$demarche['Type_demarche'] ."</td>");
        echo("<td>Etat de la démarche : " .$demarche['Etat'] ."</td>");
        echo("<td>Id du contact : " .$demarche['Id_Contact'] ."</td>");
        echo("<td>Id de l'utilisateur : " .$demarche['Id_Utilisateur'] ."</td>");
    echo("</tr>");   
}

?>
</table>