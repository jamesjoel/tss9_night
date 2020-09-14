<?php
include('db.php');

$u = $_POST['username'];
$p = $_POST['password'];

$que = "SELECT * FROM company WHERE username='$u'";
$res = mysqli_query($con, $que);

if(mysqli_num_rows($res)==1)
{
	$data = mysqli_fetch_assoc($res);
	if($data['password']==$p)
	{
		$_SESSION['c_name']=$data['company_name'];
		$_SESSION['c_id']=$data['id'];
		$_SESSION['is_company_logged_in']=true;
		header("location: dashboard.php");
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect !";
		header("location:company_login.php");		
	}
}
else
{
	$_SESSION['msg']="This Username And Password is Incorrect !";
	header("location:company_login.php");
}


?>