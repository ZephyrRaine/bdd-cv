<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>mes info</title>
</head>
<body>
      <form method="post" action="modifne.php">

<?php  
include "db_conn.php";
$idnice = 3;

$requete = $conn->prepare('SELECT * FROM entreprise WHERE Id = ' .$_GET["Id"]); 
$requete->execute();
$utilisateur = $requete->fetchall()[0];


echo('<input type="text" name="Nom"  id="Nom" value= '.$utilisateur['Nom'].'>');
echo('<input type="text" id="Adresse" name="Adresse" value= '.$utilisateur['Adresse'].'>');
echo('<input type="text" id="Secteur" name="Secteur" value= '.$utilisateur['Secteur'].'>');
echo('<input type="hidden" name="Id" value='.$utilisateur['Id'].'>');


      ?><input type="hidden" name="pseudo" value="Mateo21" />
   <input type="submit" value="Valider les changements"/>
      </form>

        

  </body>
</html>