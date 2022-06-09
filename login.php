<?php  
session_start();
include "db_conn.php";

if (isset($_POST['Email']) && isset($_POST['password'])) { 
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$Email = ($_POST['Email']);	
	$password = ($_POST['password']);

	if (empty($Email)) {
		header("Location: index.php?error=Email is required");
		exit();
	}else if(empty($password)){
		header("Location: index.php?error=Password is required");
	exit();

	}else{
		$sql = "SELECT * FROM utilisateur WHERE Email='$Email' AND Password='$password'";

		$request = $conn->prepare($sql);
		$request->execute();
		$result = $request->fetchAll();
		
		if (count($result) === 1) {
			$row = $result[0]; 
			if ($row['Email'] === $Email && $row['Password'] === $password) {
				$_SESSION['id'] = $row['Id'];
				$_SESSION['nom'] = $row['Nom'];
				header("Location: home.php");
				exit();
			}else{
				header("Location: index.php?error=Incorrect Email or Password");
				exit();
			}	
		}else{
			header("Location: index.php?error=Incorrect Email or Password");
			exit();
		}
	}
		


}else{
	header("Location: index.php");
	exit();
}
