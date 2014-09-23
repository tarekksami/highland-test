<?php
include 'include/db_connect.php';
session_start();
include 'include/header.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$pw_hsh = md5($pass);

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$pw_hsh = md5($pass);

	$sql = "SELECT * FROM users WHERE `name` = '{$user}'";
	$rs = $connection->query($sql);
	if($rs->num_rows > 1){
	echo "Sorry, a user with that name already exists<br/>";
	echo "<a href = 'newuser.php'>Try again</a><br/>";
	echo "Already a user? <br/><a href = 'login.php'>Log in now</a>";
	}
	else{
	$sql = "INSERT INTO users (name, hashed_pw) VALUES ('" . $user . "', " . "'" . $pw_hsh . "');";
	$connection->query($sql);
	$_SESSION['id'] = $connection->insert_id;
	echo "Success!<br/>";
	echo "<a href = 'login.php'>Log In</a>";

}
// echo $sql;

?>