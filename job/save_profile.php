<?php
include("db.php");
$id= $_SESSION['id'];
$que = "SELECT * FROM employee_profile WHERE employee_id = $id";
$res = mysqli_query($con, $que);


$a = $_POST['profile_name'];
$b = $_POST['exp'];
$c = $_POST['company_name'];
$d = $_POST['detail'];
$e = $_POST['key_skills'];

if(mysqli_num_rows($res)==1)
{
	$que = "UPDATE employee_profile SET profile_name = '$a', experiance='$b', company_name = '$c', detail ='$d', key_skills ='$e' WHERE employee_id = $id";
}
else
{

	$que = "INSERT INTO employee_profile (employee_id, profile_name, experiance, company_name, detail, key_skills) VALUES ($id, '$a', '$b', '$c', '$d', '$e')";
}




mysqli_query($con, $que);

header("location:my_profile.php");

?>