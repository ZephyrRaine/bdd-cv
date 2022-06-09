<?php 

$sname= "10.96.16.17";
$port= "3308";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, $port);

if (!$conn){
	echo "Connection failed!";
}
