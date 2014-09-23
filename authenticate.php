<?php
session_start();
include 'include/db_connect.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$pw_hsh = md5($pass);

$sql = "SELECT * FROM users WHERE `name` = '{$user}' LIMIT 1;";
$rs = $connection->query($sql);

if($rs->num_rows >0){
while($row = $rs->fetch_assoc()) {
	if($row['hashed_pw'] === $pw_hsh){
		$_SESSION['user_id'] = $row['id'];
		header("Location: index.php");
	};
};
}

echo "Sorry, incorrect username or password <br/>";
echo "<a href = 'login.php'>Try again</a>";

// echo $sql;

?>