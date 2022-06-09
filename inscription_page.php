<?php  
session_start();
include "db_conn.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
 
echo "Connexion réussie";
 
$sql = "INSERT INTO utilisateur (Id, Nom, Prenom, Adresse, Tel, Email, Password) VALUES ('NULL', :Nom);
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>


