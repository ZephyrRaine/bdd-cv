<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['nom']))
{
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['nom']; ?></h1>
	<a href="demarches_en_cours.php">Démarche en cours</a>
	<a href="Nepage.php">Nouvelle Entreprise</a><br><br>
	<a href="index.php">Logout</a>
</body>
</html>

<?php 
}else{
	header("Location: index.php");
	exit();
} ?>