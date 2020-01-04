<?php
// $arr[] = 10;
// $arr[] = 10;
// $arr[] = 10;

// //associative array
// $employee['id'] = 1001;
// $employee['name'] = 1001;

// foreach($employee as $value)
// {
	
// }
// foreach($employee as $key => $value)
// {
	
// }
//array related function 
// $info["id"] = 1001;
// $info["name"] = "Tariq";
// $info['education'][] = [
// 						'institute'=>"ABC College",
// 						'CGPA'=>"3.0",
// 						'year'=>2017,
// 						'degree'=>'BS'];
// $info['education'][] = [
// 						'institute'=>"University of Chitral",
// 						'CGPA'=>"3.0",
// 						'year'=>2019,
// 						'degree'=>'MS'];


// echo "<pre>";
// print_r($info);
// echo "</pre>";

// is_array()


// $info["id"] 		= 1001;
// $info["name"] 		= "Tariq";
// $info['education'] 	= [
// 						'institute'=>"University of Chitral",
// 						'CGPA'=>"3.0",
// 						'year'=>2019,
// 						'degree'=>'MS'
// 					  ];
// foreach ($info as $key1 => $value1) 
// {
// 	if(is_array($value1))
// 	{
// 		foreach ($value1 as $key2 => $value2) 
// 		{
// 			echo $key2." = ".$value2."<br>";
// 		}	
// 	}
// 	else
// 	{
// 		echo $key1." = ".$value1."<br>";	
// 	}
// }
$students = ['AbdulQayyom',
			 'Ikram',
			 'Mateen',
			 'Inam',
			 'Aftab'
			 ];
if(in_array("Tariq",$students))
{
	echo "Tariq is present";
}
else
{
	echo "Tariq is absent";
}
?>