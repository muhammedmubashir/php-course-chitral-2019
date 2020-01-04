<?php
//index arrays
// same type of data 
// same variable 
// set of values 

// set of values 
// $employee[] = 1001;
// $employee[] = "Abdul Mateen";
// $employee[] = "Software engineer";
// $employee[] = 50000;

// echo "<pre>";
// print_r($employee);
// echo "</pre>";


// $temp[] = 10;
// $temp[] = 20;
// $temp[] = 30;
// $temp[] = 40;
// $temp[] = 50;
// $temp[10] = 100;
// $temp[] = 200;  
// $temp[5] = 300;  // 11
// $temp[] = 400;  


// echo "<pre>";
// print_r($temp);
// echo "</pre>";

// // BackBone 
// PHP backbone -> Array


$array = [10,20,30,40,50];
// echo "<pre>";
// print_r($array);
// echo "</pre>";
// foreach ($array as $value) 
// {
// 	echo $value."<br>";
// }

foreach ($array as $index => $value) 
{
	echo $index." = ".$value."<br>";
}

?>