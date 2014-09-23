<?php
include 'include/db_connect.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$pw_hsh = md5($pass);

$sql = "SELECT * FROM users WHERE name = " . "'" . $user . "'" . ";";
$rs = $connection->query($sql);

while($row = $rs->fetch_assoc()) {
	if($row['hashed_pw'] === $pass){
		$_SESSION['id'] = $row['id'];
		header("Location: index.php");
	}
}
// echo $sql;

?>
