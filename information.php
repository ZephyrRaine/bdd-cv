
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>mes info</title>
</head>
<body>
      Tableau qui passe bien !
      <form method="post" action="information_page.php">

<?php  
include "db_conn.php";
$idnice = $_SESSION['id'];

$requete = $conn->prepare('SELECT * FROM utilisateur WHERE Id = ' .$idnice); 
$requete->execute();
$utilisateur = $requete->fetchall()[0];
?>


Nom <?php
      echo('<input type="text" name="Nom"  id="Nom" value= '.$utilisateur['Nom'].'>'); ?>
Prénom  <?php
      echo('<input type="text" id="Prénom" name="Prenom" value= '.$utilisateur['Prenom'].'>'); ?>
Adresse <?php
echo('<input type="text" id="Adresse" name="Adresse" value= '.$utilisateur['Adresse'].'>'); ?>
Téléphone <?php
echo('<input type="text" id="Téléphone" name="Tel" value= '.$utilisateur['Tel'].'>'); ?>
Email <?php
echo('<input type="text" id="Email" name="Email" value= '.$utilisateur['Email'].'>'); ?>
Password <?php
echo('<input type="text" id="Mot de passe" name="Password"value= '.$utilisateur['Password'].'>'); ?>
Statut <?php
echo('<input type="text" id="Statut" name="Statut" value= '.$utilisateur['Statut'].'>'); ?>
Photo <?php
echo('<input type="text" id="Photo" name="Photo" value= '.$utilisateur['Photo'].'>'); ?>
Experience <?php
echo('<input type="text" id="Experience" name="Experience" value= '.$utilisateur['Experience'].'>'); 

      ?>
   <input type="submit" value="Valider les changements"/>
      </form>     

  </body>

<style type="text/css">
      body {

      
  margin-top : 250px;
  }
</style>
</html>
