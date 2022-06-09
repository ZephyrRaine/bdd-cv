<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['Nom']))
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
	<button href="logout.php">Logout</button>
</body>
</html>

<?php 
}else{
	echo "C PAS BON";
	exit();
	header("Location: index.php");
	exit();
} ?>