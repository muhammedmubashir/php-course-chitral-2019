<?php

// String & related functions
// regex -> regular expression 

// string is a set of char 

// $str = "University of Chitral";

// echo $str[0];
// echo $str[1];
// echo $str[2];
// echo $str;

// substr(string, start)
// strstr(haystack, needle)
// str_replace(search, replace, subject)
// strpos(haystack, needle)
// strrpos(haystack, needle)
// implode(glue, pieces)

// $mobile_categories[] = ["samsung","apple","oppo","lenovo","asus"];
// $string = "";
// foreach ($mobile_categories[0] as $value) 
// {
// 	$string .= $value.",";
// }
// echo $string."<br>";
// echo substr($string, 0, -1);

// select * from tablename where id = 10;
// select * from tablename where id IN (10,12,13,14,15,16,17....);


// echo "<pre>";
// print_r($mobile_categories);
// echo "</pre>";
// $string = implode(", ", $mobile_categories);
// echo $string;


// $string = 'University of chitral,';

// echo substr($string, 3, 7)."<br>"; // versity 
// echo substr($string, 3, -1); // versity of chitral 

// $string = "Web development course";
// echo strstr($string, "e");
// //explode(delimiter, string)

// echo strpos($string, "d");

// str_replace(search, replace, subject); HOME WORK

//https://www.php.net/ref.strings

// $str = "<script> var a = 10;</script>"; //XSS attack -> Cross site scripting
// echo htmlentities($str);


// $password = "ADMIN123";
// echo md5($password);

// echo strtolower($password);
// echo strtoupper($password);



?>