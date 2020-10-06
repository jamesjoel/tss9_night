<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<script type="text/javascript" src="jquery.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
			$("#show").click(function(){
				$("input").attr("type", "text");
			});
			$("#hide").click(function(){
				$("input").attr("type", "password");
			});
		});
	</script>
</head>
<body>
<input type="password" />
<button id="show">Show</button>
<button id="hide">Hide</button>
</body>
</html>