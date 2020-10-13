<?php
$con = mysqli_connect("localhost","root", "", "tss9");

$x = $_POST['name'];
$y = $_POST['age'];

$que = "INSERT INTO student (stu_name, stu_age) VALUES ('$x', '$y')";

mysqli_query($con, $que);

?>