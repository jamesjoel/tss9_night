<?php
include('db.php');
if(! isset($_SESSION['is_user_logged_in']))
{
	$_SESSION['msg']="You Are not Logged in, If you have to apply this job then Login First";
	header("location:index.php");
}



$jobid = $_GET['id'];
$userid = $_SESSION['id'];
$companyid = $_GET['companyid'];

$que = "INSERT INTO apply (employee_id, job_id, company_id) VALUES ('$userid', '$jobid', '$companyid')";
mysqli_query($con, $que);

header("location:index.php");



?>