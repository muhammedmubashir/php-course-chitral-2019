<?php
session_start();
if(count($_SESSION['errors']) > 0)
{
	echo "<ul>";
	foreach ($_SESSION['errors'] as $error) 
	{
		echo "<li style='color:red;'>".$error."</li>";
	}
	echo "</ul>";
	unset($_SESSION['errors']);
}
?>

<h1>Basic Info</h1>
<form action="step2.php" method="post">
	Name *: <input type="text" name="fullname">
	<br>
	Email *: <input type="text" name="email">
	<br>
	Phone *: <input type="text" name="phone_no">
	<br>
	<br>
	<input type="submit" name="sbtbtn" value="Submit">
</form>
<!-- 
validation 
client side validation -> Javascript
server side validation -> PHP  -->