<?php
include("db.php");

// print_r($_POST);
$a = $_POST['company_name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['contact_person'];
$e = $_POST['contact_number'];
$f = $_POST['address'];
$g = $_POST['city'];

$que = "INSERT INTO company (company_name, username, password, contact_person, contact_number, address, city) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
mysqli_query($con, $que);
header("location:company_signup.php");

?>