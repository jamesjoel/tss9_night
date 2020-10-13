<?php
$con = mysqli_connect("localhost","root", "", "tss9");

$que = "DELETE FROM college WHERE id = 3";

mysqli_query($con, $que);

?>