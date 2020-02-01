<?php
$products[1] = ["iphone","Silver","64gb"];
$products[2] = ["iphone","red","32GB"];
$products[3] = ["samsung","Silver","64gb"];
$products[4] = ["galaxy","Silver","64gb"];
$products[5] = ["oppo","Silver","64gb"];
$products[6] = ["Asus","Silver","64gb"];
$products[7] = ["Lenovo","Silver","64gb"];
$products[8] = ["Vivo","Silver","64gb"];
$products[9] = ["Qmobile","Silver","64gb"];
$products[10] = ["Lg","Silver","64gb"];


echo $id = $_GET["id"];

// DB query -> SQL -> product information 
echo "<pre>";
print_r($products[$id]);
echo "</pre>";

?>