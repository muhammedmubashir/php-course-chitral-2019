<!-- HTML
CSS -> styling 
w3schools.com 

Javascript 

 -->
<?php
session_start();
if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0)
{
	echo "<h1>Home Page</h1>";
	echo "<a href='logout.php'>Logout</a>";
}
else
{
	header("Location: login.php");
}
?>