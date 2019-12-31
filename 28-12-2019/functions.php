<?php
//functions
// settype(var, type)
// gettype(var)
// intval(var)
// print

// code reuse 
//optional param
function calculate_tax($amount, $tax = 3.5,$a)
{
	return ($amount * $tax / 100);
}

echo calculate_tax(1000,7);
// echo "<br>";
echo calculate_tax(1000);
echo calculate_tax(1000,7,10);


function input($type,$attr="",$class="")
{
	$string = "<input type=$type";
	if($attr != "")
	{
		// $string = $string . " $atrr";
		$string .= " $attr";
	}
	if($class != "")
	{
		$string .= " class=$class";
	}
	$string .= ">";
	return $string;
}

echo input("text","name='username'");


?>