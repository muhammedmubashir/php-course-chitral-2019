<?php
session_start();
$_SESSION['address'] 	= $_POST['address'];
$_SESSION['city'] 		= $_POST['city'];
$_SESSION['zipcode'] 	= $_POST['zipcode'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
