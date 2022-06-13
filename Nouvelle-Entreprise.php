<?php  
session_start();
include "db_conn.php";


$Nom = $_POST['Nom'];
$Secteur = $_POST['Secteur'];
$Adresse = $_POST['Adresse'];

// Ecriture de la requête
$sqlQuery = 'INSERT INTO entreprise(Nom, Secteur, Adresse) VALUES (:Nom, :Secteur, :Adresse)';
// Préparation
$insertRecipe = $conn->prepare($sqlQuery);

$insertRecipe->execute([
'Nom' => $Nom,
'Secteur' => $Secteur,
'Adresse' => $Adresse,
]);


	header("Location: liste_entreprise.php");
	exit();

?>


