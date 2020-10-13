<?php
$con = mysqli_connect("localhost","root", "", "tss9");

$x = $_POST['name'];
$y = $_POST['age'];

$que = "INSERT INTO student (stu_name, stu_age) VALUES ('$x', '$y')";
mysqli_query($con, $que);
$id = mysqli_insert_id($con);



$que2 = "SELECT * FROM student WHERE id = $id";
$res = mysqli_query($con, $que2);
$data = mysqli_fetch_assoc($res);

$que3 = "SELECT COUNT(*) FROM student";
$res3 = mysqli_query($con, $que3);
$data3 = mysqli_fetch_assoc($res3);

$cout = $data3['COUNT(*)'];


echo "<tr>";
echo "<td>".$cout."</td>";
echo "<td>".$data['stu_name']."</td>";
echo "<td>".$data['stu_age']."</td>";
echo "</tr>";


?>