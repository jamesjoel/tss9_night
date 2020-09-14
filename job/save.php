<?php
include("db.php");

// print_r($_POST);
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['address'];
$e = $_POST['gender'];
$f = $_POST['city'];
$g = $_POST['contact'];

$que = "INSERT INTO employee (full_name, username, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";

mysqli_query($con, $que);

header("location:login.php");

?>