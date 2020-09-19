<?php
/*
		============ Array ==============

		$a = array("red", "green", "blue");

	---------------------------------------------

		$b = array("name"=>"rohit", "age"=>25, "city"=>"indore");

		echo $b["city"];


	---------------------------------------------

		$_ABC = array("data"=>array("name"=>"rohit", "age"=>25, "city"=>"indore"));



		echo $_ABC["data"]["name"]; ---------- rohit




1. Simple/Index Array
2. Associative Array


3. Multi Dimenctional Array

*/

/*
		When we upload file then in PHP, we get $_FILES multi-dimenctional associvate array.

		the $_FILES array pattern like that

		$_FILES['image']['name']
			---------full name of uploaded file

		$_FILES['image']['size']
			-------- uploaded file size in Bytes

		$_FILES['image']['tmp_name']
			---------- uploaded file path where file is upload

		$_FILES['image']['error']
			----------- if any error when upload then its number any if no error then 0

		$_FILES['image']['type']
			---------- uploaded file type
	

*/

// print_r($_FILES);

$a = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];

move_uploaded_file($b, "demo/".$a);

// move_uploaded_flle(source, destination)


?>