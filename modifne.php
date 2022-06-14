
<?php  

include "db_conn.php";


$Id = $_POST['Id'];
$Nom = $_POST['Nom'];
$Secteur = $_POST['Secteur'];
$Adresse = $_POST['Adresse'];


$insertEntrepriseStatement = $conn->prepare('UPDATE entreprise SET Nom = :Nom, Secteur = :Secteur, Adresse =:Adresse WHERE Id = :Id');
$insertEntrepriseStatement->execute([
'Nom' => $Nom,
'Secteur' => $Secteur,
'Adresse' => $Adresse,
'Id' => $Id,
]);

header("Location: liste_entreprise.php");
	exit();

?>