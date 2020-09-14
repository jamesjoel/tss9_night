<?php
include("db.php");

// print_r($_POST);

$u = $_POST['username'];
$p = $_POST['password'];

$q = "SELECT * FROM user WHERE username='$u'";
// when we fire select query then we heve to use a varialble for receive data
$res=mysqli_query($con, $q);

// number of rows -----> $res
$num=mysqli_num_rows($res);

if($num==1) // username is correct
{
	$data = mysqli_fetch_assoc($res);
	// convert $res to associative array
	if($data['password']==$p) // username and password both are correct
	{
		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];

		$_SESSION['is_user_logged_in']=true;
		header("location:dashboard.php");

	}
	else
	{ // username is correct but PASSWORD is incorrect
		$_SESSION['msg'] = "This Password is Incorrect";
		header("location:login.php");		
	}
}
else // username is incorrect
{
	$_SESSION['msg'] = "This Username is Incorrect";
	header("location:login.php");
}

?>