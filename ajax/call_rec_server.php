<?php
$con = mysqli_connect("localhost","root", "", "tss9");

$que = "SELECT * FROM student";

$res = mysqli_query($con, $que);

$n=1;
while($data = mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>".$n."</td>";
	echo "<td>".$data['stu_name']."</td>";
	echo "<td>".$data['stu_age']."</td>";
	echo "</tr>";
	$n++;
}



?>