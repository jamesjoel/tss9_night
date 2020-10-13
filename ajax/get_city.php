<?php
$con = mysqli_connect("localhost", "root", "", "tss9");

$a = $_POST['stateid'];

$que = "SELECT * FROM cities WHERE state_id = $a";
$res = mysqli_query($con, $que);
echo "<option>Select</option>";
while($data=mysqli_fetch_assoc($res))
{
	echo "<option>".$data['city']."</option>";
}


?>