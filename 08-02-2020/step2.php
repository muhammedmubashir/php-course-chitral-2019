<?php
session_start();
if($_POST['fullname'] == "")
{
	$_SESSION['errors'][] = "Name is required";
}
if($_POST['email'] == "")
{
	$_SESSION['errors'][] = "Email is required";
}
if($_POST['phone_no'] == "")
{
	$_SESSION['errors'][] = "Phone No is required";
}
$fullname_pattern = "/^[a-zA-Z]{2,}$/";

if(!preg_match($fullname_pattern, $_POST['fullname']))
{
	$_SESSION['errors'][] = "Name should be alphabet";	
}
// echo count($_SESSION['errors']);
// print_r($_SESSION['errors']);die;
if(count($_SESSION['errors']) == 0)
{
	$_SESSION['fullname'] 	= $_POST['fullname'];
	$_SESSION['email'] 		= $_POST['email'];
	$_SESSION['phone_no'] 	= $_POST['phone_no'];	
}
else
{
	header("Location: step1.php");	
}

?>
<h1>Shipment Info</h1>
<form action="step3.php" method="post">
	Address: <input type="text" name="address">
	<br>
	City: <input type="text" name="city">
	<br>
	ZipCode: <input type="text" name="zipcode">
	<br>
	<br>
	<input type="submit" name="sbtbtn" value="Submit">
</form>