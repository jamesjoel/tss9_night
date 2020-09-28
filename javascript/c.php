<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("first_num").value;
			var b = document.getElementById("second_num").value;

			var x = parseInt(a); // convert a value into intiger
			var y = parseInt(b);

			var c = x+y;

			alert("Your ans is "+c);
		}
	</script>
</head>
<body>
<br />
<br />
<br />
<br />
First Number <input type="Text" id="first_num"/>
<Br />
<Br />
<Br />
Second Number <input type="Text" id="second_num"/>
<Br />
<Br />
<Br />
<Br />
<button onclick="demo()">+</button>
<button onclick="demo()">-</button>
<button onclick="demo()">x</button>
<button onclick="demo()">/</button>

</body>
</html>