<?php  
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) { 
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
	}else if(empty($pass)){
		header("Location: index.php?error=Password is required");
	exit();

	}else{
		$sql = "SELECT * FROM users WHERE user_name='$Email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['Email'] === $Email && $row['password'] === $password) {
				$_SESSION['id'] = $row['id'];
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
