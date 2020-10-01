<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var n = 0;
		function demo()
		{
			n++;
			document.getElementById("counter").innerHTML=n;
		}
		var x = 0;
		function demo2()
		{
			x++;
			document.getElementById("counter2").innerHTML=x;
		}
		function demo3()
		{
			document.getElementById("counter2").innerHTML=0;
			x=0;
		}
	</script>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #4512AC;
		}
	</style>
</head>
<body>
<br />
<br />
<button onclick="demo()">OK</button>
<h3>Your Total Click is : <b id="counter">0</b></h3>

<div id="box" onmousemove="demo2()" onmouseout="demo3()">

</div>
<h3>Total Mouse Come on Box : <span id="counter2">0</span></h3>
</body>
</html>