<?php
// echo count($_POST);
if(count($_POST) > 0)
{
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";	
	if($_POST['email'] == "root" && $_POST['password'] == "123456")
	{
		session_start();
		$_SESSION['userid'] = 1;
		// redirect homepage/inbox
		header("Location: home.php");
	}
}

?>

<form action="" method="post">
	Email: <input type="text" name="email">
	Password: <input type="password" name="password">
	<input type="submit" name="sbtBtn" value="Login">
</form>