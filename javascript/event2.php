<!-- 

	document.getElementById().value

		The .value is Sub-Method


			1. value
			2. innerHTML
			3. style.property
			4. setAttribute()



	src, alt									img
	href 										a
	align, border, height, width,cellpadding	table


	placeholder 				input
	type		 				input
	value						input
	name 						input, textarea, option


	



	id, class 					all tag






 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #6ACEDA;
		}
	</style>
	<script type="text/javascript">
		var x = 100;
		var y = 100;
		function demo()
		{
			x++;
			y++;
			document.getElementById("box").style.height=x+"px";
			document.getElementById("box").style.width=y+"px";
		}
	</script>
</head>
<body>
<div id="box" onmousemove="demo()"></div>
</body>
</html>