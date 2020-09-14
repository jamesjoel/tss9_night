<?php
// print_r($_POST);
/*
	now we have to insert this data to the data and its perticular table

	so we have to connect php file to database

	$con = mysqli_connect("hostname", "username", "password", "dbname");


	now we can write down INSERT QUERY


	INSERT INTO tablename (col1, col2, col3, .....) VALUES ('val1', 'val2', 'val3'....)





*/
// Step I ------ connect to the database
include("db.php");



// step II ------- getting data from "form tag" to our variable and its avalable in pre defined $_POST array
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['gender'];
$e = $_POST['address'];
$f = $_POST['city'];


// step III ------ create insert query for insert or save into the table
$q="INSERT INTO user (full_name, username, password, address, gender, city) VALUES ('$a', '$b', '$c', '$e', '$d', '$f')";



// step IV---------- finaly FIRE/RUN the query

mysqli_query($con, $q);
 
 // step V ---- when all things are done, then user going to the signup page


header("location:signup.php");

?>