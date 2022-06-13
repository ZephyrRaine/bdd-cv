<?php  
session_start();
include "db_conn.php";
$requete = $conn->prepare('SELECT * FROM entreprise'); //je pense que y a besoin de ca 
$requete->execute();

$entreprises = $requete->fetchall();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise </title>
    <h1>Liste des Entreprises</h1>

    <?php

$nombre_entreprises=count($entreprises);

?>

<table style="width: 100%">
    <tr>
    	<th>Nombres d'entreprises</th>
        <th>Entreprise</th>
        <th>Secteur</th>
        <th>Adresse</th>
    </tr>

    <?php
for ($i = 0; $i < $nombre_entreprises; $i++) {
    $entreprise = $entreprises[$i];
    echo("<tr>");   
       
        echo("<td>Entreprises n°" .$entreprise['Id'] ."</td>");
        echo("<td>Nom de l'entreprise: " .$entreprise['Nom'] ."</td>");
        echo("<td>Secteur de l'entreprise: " .$entreprise['Secteur'] ."</td>");
        echo("<td>Adresse de l'entreprise: " .$entreprise['Adresse'] ."</td>");
    echo("</tr>");   
}

?>
</table>

<input type=button onclick=window.location.href='http://localhost/Nepage.php'; value="Nouvelle entreprise"  />