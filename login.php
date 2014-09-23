<?php
session_start();
if(isset($_SESSION['user_id'])){
	header("Location: index.php");
}
include 'include/header.php';
include 'include/db_connect.php';
?>

<div>
<form action = 'authenticate.php' method = 'post'>
<input type = 'text' name = 'username' placeholder = 'User Name'/>
<br/>
<input type = 'password' name = 'password' placeholder = 'Password'/>
<br/>
<input type = 'submit' value = 'Submit'/>
</div>
</form>
Not already a user? <a href = 'newuser.php'>Sign Up!</a>

<?php
include 'include/footer.php';
?>
