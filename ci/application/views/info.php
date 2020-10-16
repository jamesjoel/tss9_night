<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #C12457;
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
<h1>hello world</h1>
</body>
</html>