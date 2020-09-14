<?php
include("db.php");

// print_r($_POST);
$a = $_POST['title'];
$b = $_POST['salary'];
$c = $_POST['desc'];
$d = $_POST['exp'];
$e = $_POST['type'];

$id = $_SESSION['c_id'];
$que = "INSERT INTO job (company_id, title, salary, description, experiance, type) VALUES ('$id', '$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $que);
header("location:dashboard.php");
?>