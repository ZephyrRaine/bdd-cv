<?php  
include "db_conn.php";


$email = $_POST['Email'];
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
$adresse = $_POST['Adresse'];
$tel = $_POST['Tel'];
$password = $_POST['Password'];
$statut = $_POST['Statut'];
$photo = $_POST['Photo'];
$experience = $_POST['Experience'];
$idnice = 9;

// Ecriture de la requête
$sqlQuery = 'UPDATE utilisateur SET Nom=:Nom, Prenom=:Prenom, Adresse=:Adresse, Tel=:Tel, Email=:Email, Password=:Password, Statut=:Statut, Photo=:Photo, Experience=:Experience WHERE Id=:Id';


$insertRecipe = $conn->prepare($sqlQuery);

$insertRecipe->execute([
'Nom' => $nom,
'Prenom' => $prenom,
'Adresse' => $adresse,
'Tel' => $tel,
'Password' => $password,
'Email' => $email,
'Statut' => $statut,
'Photo' => $photo,
'Experience' => $experience,
'Id' => $idnice
]);





      header("Location: home.php");
      exit();
