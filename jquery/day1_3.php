<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<script type="text/javascript" src="jquery.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").mouseover(function(){
				$(this).css({"background-color":"red", "font-size":"20px", "color":"#FFF"});
			});
			$("p").mouseout(function(){
				$(this).css({"background-color":"transparent", "font-size":"16px", "color":"#000"});
			});
		});
	</script>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>