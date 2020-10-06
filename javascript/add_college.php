<?php
// print_r($_POST);
$con = mysqli_connect("localhost", "root", "", "tss9");
// Connection to Database
$a = $_POST['college_name'];
$que = "INSERT INTO college (college_name) VALUES ('$a')";
mysqli_query($con, $que);
header("location:add_element.php");

?>