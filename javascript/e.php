<!-- 
	getting value form <input > tag
		var a = document.getElementById("").value;

	give value to <input >tag
		document.getElementById("").value = "rohit"

============================================================

	getting value form all open/close tag
		var a = document.getElementById("").innerHTML;

	give value to all open/close tag
		document.getElementById("").innerHTML = "rohit"
			





 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width : 200px;
			background-color: #124578;
			/*font-size: */
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			document.getElementById("box").style.backgroundColor="red";
			document.getElementById("box").style.color="white";
			document.getElementById("box").style.fontSize="20px";
		}
	</script>
</head>
<body>

<button onclick="demo()">OK</button>
<div id="box">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.
</div>


</body>
</html>