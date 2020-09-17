<?php
echo "hello world<hr />";

print_r($_GET);

echo "<hr />";
$a = $_GET['name'];

echo $a;

/*

 server variables in PHP	

	1. $_POST   		---------   when form is submit and form method is post
	2. $_SESSION 		--------- 	when session create the $_SESSION is getting
	3. $_GET			---------   when hittin URL (when specifice pettern)
	
	4. $_COOKIE
	5. $_FILES
	6. $_REQUEST
	7. $_SERVER



*/


?>