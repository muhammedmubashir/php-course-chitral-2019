<?php

//regex -> regular expression

// 1. Validation 
// 2. Parsing 

// pattern 
 
// a-z A-Z 0-9 () [] * + . $ ^ | \ / {} ?

// Pattern 	Input 		output
// ab* 		ab 			True
// 			abb 		T
// 			abbbbbb 	T
// 			a 			T
// 			Tab 		T
// 			Tb 			F
// 			Ta 			T 
// 			Pattern 	T

// ab+  		ab 			True
// 			abb 		T
// 			abbbbbb 	T
// 			a 			F
// 			Tab 		T
// 			Tb 			F
// 			Ta 			F 
// 			Pattern 	F


// ^ab+c* 		abc 		T
// 			tab 		F
// 			abandon 	T
// 			ac 			F 
// 			abbbbbbbbc  T 
// 			aaaabc 		F

// ^[a-zA-Z]+$
// 			abcdef...z 		T
// 			abc98			F
// 			AbdulMateen100  F

// ^[0-9]{2}   	12
// 				34
// 				45
// 				78
// 				97
// 				12

// [0-9]{2,4}		min 2 or max 4
// 				2019
// 				19

// [0-9]{2,}       Min 2 or max infinite 
// 				19 
// 				2019
// 				20199999999999999999999999573482574829		


// do(nut | it) 	donut 		T
// 				doit 		T
// 				do 			F 	


// do(nut | it)? 	donut 		T
// 				doit 		T
// 				do 			T 	

// .* 			any char exist on your keyboard

// \s 	-> space
// \w 	-> word
// \d  -> digit


// input abc@gmail.com  T
// input abc@gmail@com  -> wrong -> F

// pattern 
// ^[a-zA-Z]{2,100}@[a-zA-Z0-9]{3,100}\.[a-zA-Z]{3}


// $input = "abc@gmail.com";
// $input = "abc@gmail.pk";
// $pattern = "/^[a-zA-Z]{2,100}@[a-zA-Z0-9]{3,100}\.[a-zA-Z]{3}/";

// var_dump(preg_match($pattern, $input));

// $date = "25-01-2020"; //dd-mm-yyyy
// // $date = "99-99-9999"; //dd-mm-yyyy

// 01
// 02
// 03
// 09

// 10
// 11
// 12...19

// 20
// 21....29

// 30
// 31

// 01...09
// 10,11,12

// $date = "25-01-2020"; //dd-mm-yyyy
// $date = "99-99-9999"; //dd-mm-yyyy

// $pattern = "/(0[1-9])|(1|2[0-9])|(3[0-1])-(0[1-9])|(1[0-2])-[0-9]{4}/";
// var_dump(preg_match($pattern, $date));


$input = "abc@gmail.com";
$input = "abc123@gmail.com";
$input = "abc123@gmail.co.uk";
$input = "abc123@gmail.com.pk";
$input = "123@gmail.com"; invalid

$pattern = "/^[a-zA-Z]+[0-9]*@[a-zA-Z]{2,}\.[a-z]{2,3}(\.[a-z])*/"; 


// regex 10 pattern -> home work

// password -> Captital letter number special char 


// Next class working FORM, SESSION & Cookies 

?>