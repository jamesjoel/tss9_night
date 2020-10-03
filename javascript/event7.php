<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("txt").value;
			var l = a.length;
			document.getElementById("msg").innerHTML=l;
		}
	</script>
</head>
<body>
<br />
<br />
<br />
Message
<Br />
<textarea rows="5" cols="30" id="txt" onkeyup="demo()"></textarea>
<h4>Total Charactor : <span id="msg">0</span></h4>
</body>
</html>