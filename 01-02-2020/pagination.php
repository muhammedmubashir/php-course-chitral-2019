<?php
//pagination 

//load balance , performance boost
$total_no_of_products 	= 73;
$product_per_page 		= 10;
$no_of_pages 			= ceil($total_no_of_products / $product_per_page);
echo $no_of_pages;


// .5 round -> upper 
// 7.5 round 8
// 7.4 round 7

// echo round($no_of_pages);
// echo floor($no_of_pages);

// 7.1 floor -> 7
// 7.5 floor -> 7
// 7.9 floor -> 7
// 7.999999999 floor -> 7


// 7.1 ceil -> 8
// 7.2 ceil -> 8
// 7.5 ceil -> 8
// 7.9999 ceil -> 8

//echo ceil($no_of_pages);


// class code copy
// 1 Login form 

// Email 
// Password 

// verify -> use static values
$email = "admin@admin.com";
$password = "123456";
if success 
{
	Home page redirect 
	how to redirect php page -> Google 
}
else
{
	redirect login page
}

?>