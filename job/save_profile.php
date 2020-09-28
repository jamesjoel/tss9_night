<?php
include("db.php");
$id= $_SESSION['id'];
$que = "SELECT * FROM employee_profile WHERE employee_id = $id";
$res = mysqli_query($con, $que);

// print_r($_FILES);
// die;



/*
======================== Single File Upload ====================

Array
	("input type file name"=>
		Array
		(
			"name" =>"file name",
			"size" => "file size in bytes",
			"tmp_name" => "file uploaded folder",
			"error" => "error code - 0, 1, 2, 3, 4, 5 if 0 then no error",
			"type" =>"jpg/image, doc/text, pdf/text, png/image...."
		)
	)

==================================================================

========================== Multipal File Upload (when we set multipal attribute in input type file and file name should be an array like photo[]) =========================

Array
	("input type file name"=>
		Array
		(
			"name" =>array("name1", "name2", "name3"),
			"size" => array("size1","size2", "size3")
			"tmp_name" => array("", "", ""),
			"error" => array("0", "0", "0"),
			"type" =>array("type1", "type2", "type3")
		)
	)











*/

























$name = $_FILES['resume']['name'];
$tmp_name = $_FILES['resume']['tmp_name'];


$a = $_POST['profile_name'];
$b = $_POST['exp'];
$c = $_POST['company_name'];
$d = $_POST['detail'];
$e = $_POST['key_skills'];

/*
mkdir($_SESSION['username']);
move_uploaded_file($tmp_name, $_SESSION['username']."/".$name);
*/

move_uploaded_file($tmp_name, "resumes/".$name);


if(mysqli_num_rows($res)==1)
{
	$que = "UPDATE employee_profile SET profile_name = '$a', experiance='$b', company_name = '$c', detail ='$d', key_skills ='$e', resume = '$name' WHERE employee_id = $id";
}
else
{

	$que = "INSERT INTO employee_profile (employee_id, profile_name, experiance, company_name, detail, key_skills, resume) VALUES ($id, '$a', '$b', '$c', '$d', '$e', '$name')";
}




mysqli_query($con, $que);

header("location:my_profile.php");

?>