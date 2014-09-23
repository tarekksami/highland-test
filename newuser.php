<?php
if(isset($_SESSION['user_id'])){
	header("Location: index.php");
}
include 'include/header.php';
include 'include/db_connect.php';

?>

<div>
<form action = 'createuser.php' method = 'POST'>
<input type = 'text' name = 'username' placeholder = 'User Name'/>
<br/>
<input type = 'password' name = 'password' placeholder = 'Password'/>
<br/>
<input type = 'submit' value = 'Submit'/>
</form>

<?php
include('include/footer.php');
?>