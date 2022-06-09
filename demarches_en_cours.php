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
//echo(implode(" ", $demarches[0]));
echo("Id : " .$demarches[0]['Id']);
echo nl2br("<br>");
echo("Début de la démarche : " .$demarches[0]['Date_contact']);
echo nl2br("<br>");
echo("Type de démarche : " .$demarches[0]['Type_demarche']);
echo nl2br("<br>");
echo("Etat de la démarche : " .$demarches[0]['Etat']);
echo nl2br("<br>");
echo("Id du contact : " .$demarches[0]['Id_Contact']);
echo nl2br("<br>");
echo("Id de l'utilisateur : " .$demarches[0]['Id_Utilisateur']);

?>