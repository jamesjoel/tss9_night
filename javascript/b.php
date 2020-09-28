<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			// var a = "rohit";

			var a = document.getElementById("first_name").value;

			var b = document.getElementById("last_name").value;

			var c = a +" "+ b;

			alert(c);
		}
	</script>
</head>
<body>
<h1>Javascript Continue</h1>
<Br />
<Br />
<Br />
Enter Your First Name <input type="text" id="first_name"/>
<br />
<br />
Enter Your Last Name <input type="text" id="last_name"/>

<br />
<br />

<button onclick="demo()">OK</button>
</body>
</html>