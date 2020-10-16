<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #451244;
		}
		a{
			background-color: #FFF;
			color: #000;
			display: inline-block;
			padding: 10px;
			margin: 10px;
			text-decoration: none;
		}
		a:hover{
			background-color: red;
		}
	</style>
</head>
<body>
<a href="<?php echo base_url('demo'); ?>">Home</a>
<!-- <a href="http://localhost/tss9/ci/index.php/demo/contact">Contact</a> -->
<a href="<?php echo base_url('demo/contact') ?>">Contact</a>
<!-- <a href="http://localhost/tss9/ci/index.php/demo/about">About</a> -->
<a href="<?php echo base_url('demo/about'); ?>">About</a>


<h2>This is About Page</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>