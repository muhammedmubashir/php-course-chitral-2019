<?php

//Loops
// For, while, do while, foreach

//Increament Operator , decreament operator
// post increament 
// pre increament
// $a = 10;
// echo --$a; // $a = $a + 1;
// echo "<br>".$a;

// ? -> Uniary Operator
// $a = 10;
// if($a % 2 == 0)
// {
// 	echo "a is even number";
// }
// else
// {
// 	echo "a is odd number";
// }
// $a = 11;
// echo ($a % 2 == 0) ? "Even Number" : "Odd Number";

$gender = "female";

?>

<input type="radio" name="gender" value="male" <?php echo ($gender == "male") ? "checked='checked'": ""?>>Male
<input type="radio" name="gender" value="female" <?php echo ($gender == "female") ? "checked='checked'": ""?>>Female