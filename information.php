<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>mes info</title>
</head>
<body>
      <form method="post" action="information_page.php">

<?php  
include "db_conn.php";
$idnice = 9;

$requete = $conn->prepare('SELECT * FROM utilisateur WHERE Id = ' .$idnice); 
$requete->execute();
$utilisateur = $requete->fetchall()[0];



echo('<input type="text" name="Nom"  id="Nom" value= '.$utilisateur['Nom'].'>');
echo('<input type="text" id="Prénom" name="Prenom" value= '.$utilisateur['Prenom'].'>');
echo('<input type="text" id="Adresse" name="Adresse" value= '.$utilisateur['Adresse'].'>');
echo('<input type="text" id="Téléphone" name="Tel" value= '.$utilisateur['Tel'].'>');
echo('<input type="text" id="Email" name="Email" value= '.$utilisateur['Email'].'>');
echo('<input type="text" id="Mot de passe" name="Password"value= '.$utilisateur['Password'].'>');
echo('<input type="text" id="Statut" name="Statut" value= '.$utilisateur['Statut'].'>');
echo('<input type="text" id="Photo" name="Photo" value= '.$utilisateur['Photo'].'>');
echo('<input type="text" id="Experience" name="Experience" value= '.$utilisateur['Experience'].'>');

      ?>
   <input type="submit" value="Valider les changements"/>
      </form>

        

  </body>
</html>
