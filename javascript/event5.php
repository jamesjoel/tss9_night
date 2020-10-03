<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1(a)
		{
			document.getElementById(a).style.backgroundColor="green";
		}
		function demo2(b)
		{
			document.getElementById(b).style.backgroundColor="yellow";
		}
	</script>
</head>
<body>
<Br />
<Br />
<input type="Text" id="text1" onblur="demo2('text1')" onfocus="demo1('text1')" />
<Br />
<Br />
<input type="Text" id="text2" onblur="demo2('text2')" onfocus="demo1('text2')"/>
<Br />
<Br />
<input type="Text" id="text3" onblur="demo2('text3')" onfocus="demo1('text3')"/>
</body>
</html>