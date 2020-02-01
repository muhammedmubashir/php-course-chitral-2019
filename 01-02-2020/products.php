<h1>Product Listing Page</h1>
<?php

for ($i=1; $i <=10 ; $i++) 
{ 
	$temp = "<a href='details.php?id=$i'>Product".$i."</a>";
	echo $temp."<br>";
}

?>

