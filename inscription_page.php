<?php  
include "db_conn.php";


$email = $_POST['Email'];
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
$adresse = $_POST['Adresse'];
$tel = $_POST['Tel'];
$password = $_POST['Password'];

// Ecriture de la requête
$sqlQuery = 'INSERT INTO utilisateur(Nom, Prenom, Adresse, Tel, Email, Password) VALUES (:Nom, :Prenom, :Adresse, :Tel, :Email, :Password)';
// Préparation
$insertRecipe = $conn->prepare($sqlQuery);

$insertRecipe->execute([
'Nom' => $nom,
'Prenom' => $prenom,
'Adresse' => $adresse,
'Tel' => $tel,
'Password' => $password,
'Email' => $email,
]);





      header("Location: index.php");
      exit();
