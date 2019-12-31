<?php

// Visual Studio  (.NET)
// IIS -> Port 80 -> HTTP 

// XAMPP ya WAMP 
// Apache -> Port 80 -> HTTP 


// httpd.conf

// C:/wamp/bin/apache/apache2.x.x/conf/httpd.conf

// open this file Notepad

// Listen 81

// http://localhost:81/

// www root directory


//settype(var, type)
// $a = 10;
// echo gettype($a);

// // Type casting 

// settype($a, "string");
// $age = "25";
// settype($age, "int");

// $no_of_days = $age * 365;
// $age = "25";
// $no_of_days = (int)$age * 365;


// for ($i=1; $i <= 10 ; $i++) 
// { 
// 	echo $i."<br>";
// }
// $i = 1;
// while ($i <= 10) 
// {
// 	echo $i."<br>";
// 	# code...
// 	$i++;
// }


// do
// {
// 	echo "Hello";
// }
// while(false);
// while(false)
// {
// 	echo "hello";
// }

for ($i=1; $i <=5 ; $i++) 
{ 
	for ($j=1; $j <= $i; $j++) 
	{ 
		echo " * ";
	}
	echo "<br>";
}


?>