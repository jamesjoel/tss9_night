<?php
session_start();
session_destroy();
// unset()
header("location:login.php");
?>