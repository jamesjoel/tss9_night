<?php
session_start();

/*
	the session delete by 2 method

	1. unset($_SESSION['key']);

	 in this method we can delete perticular key or session

	2. session_destroy();
	 in this method we can delete all the session (all key)

*/

session_destroy();


?>