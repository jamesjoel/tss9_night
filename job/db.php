<?php
/*
	database name ----- jobportal
		
		tables

		1. employee 

				id    --- int
				full_name ---- varchar 255
				username ---- varchar 255
				password ---- varchar 255
				address ---- text
				city ---- varchar 255
				gender ---- varchar 255
				contact ---- varchar 255


*/


$con = mysqli_connect("localhost", "root", "", "tss9");
session_start();

?>