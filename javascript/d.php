<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("name").value;
			// alert(a);
			// document.getElementById("name").value="rohit";

			/*

			inline close tag we can use .value
			open-close tag we can use .innerHTML
			*/
			// var a = document.getElementById("test").innerHTML;
			// alert(a);
			document.getElementById("test").innerHTML = a;
		}
	</script>
</head>
<body>
	<br />
	<br />
Your Name <input type="Text" id="name"/>
	<br />
	<br />
	<br />
	<button onclick="demo()">OK</button>
	<Br />
	<h1 id="test"></h1>
</body>
</html>