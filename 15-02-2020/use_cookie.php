<?php
// echo $_COOKIE['password'];

$password = "123456";
$salt_value = "9876abcdef#";
//e10adc3949ba59abbe56e057f20f883e
// echo md5($password);
$encoded = base64_encode($salt_value.$password.$salt_value);
$decoded = base64_decode($encoded);


echo "Plain text = ".$password."<br>";
echo "Encoded text = ".$encoded."<br>";
echo "Decoded text = ".$decoded."<br>";
echo "Again Plain text = ".str_replace($salt_value, "", $decoded);


?>