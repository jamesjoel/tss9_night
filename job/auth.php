<?php
include("db.php");
// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['password'];

$que = "SELECT * FROM employee WHERE username = '$u'";

$res = mysqli_query($con, $que);

if(mysqli_num_rows($res)==1) // that means username is correct
{	
	// this function is convert to associative array form database coming variable
	$data = mysqli_fetch_assoc($res);
	// print_r($data);
	if($data['password']==$p) // compair $p to database password
	{
		$_SESSION['name']=$data['full_name'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['is_user_logged_in']=true;
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg']="This Username and Password is Incorrect";
	header("location:login.php");
}

?>