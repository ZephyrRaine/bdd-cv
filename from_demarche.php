
<?php

include "db_conn.php";

$date = $_POST['date'];
$contact = $_POST['contact'];
$etat = $_POST['etat'];
$enterprise = $_POST['enterpise'];

// Ecriture de la requête
$sqlQuery = 'INSERT INTO demarche(Date_contact, Type_demarche, Etat, Id_contact) VALUES (:Date_contact, :Type_demarche, :Etat, :Id_contact)';
// Préparation
$insertRecipe = $conn->prepare($sqlQuery);

$insertRecipe->execute([
'Date_contact' => $date,
'Type_demarche' => $contact,
'Etat' => $etat,
'Id_contact' => $Id_contact,
]);

//	header("Location: nouvelle_demarche.php");
//	exit();

?>