<?php

$total_file = count($_FILES['photo']['name']);

$x=0;


print_r($_FILES);
die;

for($i=1; $i<=$total_file; $i++)
{
	$name = $_FILES['photo']['name'][$x];
	$tmp_name = $_FILES['photo']['tmp_name'][$x];
	
	$arr = explode(".", $name);





	move_uploaded_file($tmp_name, "image/".$name);
	$x++;

}


?>