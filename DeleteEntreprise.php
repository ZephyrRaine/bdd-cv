<?php  
include "db_conn.php";

// Ecriture de la requête
$sqlQuery = 'DELETE FROM contact WHERE Id = :Id';

$sqlQuery = 'DELETE FROM entreprise WHERE Id = :Id';
// Préparation
$insertRecipe = $conn->prepare($sqlQuery);

$insertRecipe->execute([
'Id' => $_GET["id"]
]);

header("Location: liste_entreprise.php");

exit();
?>