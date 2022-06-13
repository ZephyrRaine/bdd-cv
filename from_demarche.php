
<?php
// Ecriture de la requête
$sqlQuery = 'INSERT INTO demarche(Date_contact, Type_demarche, Etat, Id_contact) VALUES (:Date_contact, :Type_demarche, :Etat, :Id_contact)';
// Préparation
$insertRecipe = $conn->prepare($sqlQuery);

$insertRecipe->execute([
'Date_contact' => $Date_contact,
'Type_demarche' => $Type_demarche,
'Etat' => $Etat,
'Id_contact' => $Id_contact,
]);

	exit();
	header("Location: nouvelle_demarche.php");
	exit();

?>