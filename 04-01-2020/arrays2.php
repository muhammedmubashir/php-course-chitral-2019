<?php
//array functions
// $students = ['AbdulQayyom',
// 			 'Ikram',
// 			 'Mateen',
// 			 'Inam',
// 			 'Aftab'
// 			 ];
// //implode use to convert array into string with seperator

// echo implode(", ", $students);
// // Database 
// SQL 
// select * from tablename where id 
// IN (1,2,3,4,5,6,7,8,9,10)


// $email = "mubashir@mydomain.com.pk";

// $chunks = explode("@", $email);
// echo "<pre>";
// print_r($chunks);
// echo "</pre>";

// $string = 'My name is mubashir';
// $values = explode(" ", $string);
// echo "<pre>";
// print_r($values);
// echo "</pre>";
//screencast, camtasia, screen recording 

// $info = [];
// for ($i=1; $i <= 10 ; $i++) 
// { 
// 	array_push($info, $i);
// }

// echo "<pre>";
// print_r($info);
// echo "</pre>";

// echo array_pop($info); // 
// array_pop(array)-> lifo 
//queue -> FIFO
//stack -> LIFO 


//data structures 
// $fruits = ['apple',
// 			'mango',
// 			'grapes',
// 			'peach',
// 			'orange'
// 		  ];
// echo array_pop($fruits);
// echo array_pop($fruits);
// $fruits = ['apple',
// 			'mango',
// 			'grapes',
// 			'peach',
// 			'orange'
// 		  ];
// $output = array_search('banana', $fruits);
// var_dump($output);

// $arr1 = [1,2,3,4,5,6];
// $arr2 = [5,6,7,8,9,10];

// // $combined_array = array_merge($arr1,$arr2);
// // echo "<pre>";
// // print_r($combined_array);


// $output = array_diff($arr2, $arr1);
// echo "<pre>";
// print_r($output);


// https://www.php.net/manual/en/ref.array.php

//10 function 
// array_walk(array, funcname)
// array_replace(array, array1)
// array_merge_recursive(array1)
// array_chunk(input, size)
// array_reverse(array)
// array_keys(input)
// array_reduce(input, function)
// array_key_exists(key, array)
// count()
// array_unique(array)
// array_combine(keys, values)

//15 min quiz 
// upto array -> 5 question 
// string 
$var = "10";
if(isset($var) && $var != "")
{
	echo "set";
}
else
{
	echo "not set";
}

?>