<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.small-img{
			height: 100px;
			width: 100px;
			padding: 2px;
			border: 1px solid #000;
			border-radius: 5px;
			box-shadow: 0 0 5px #000;
		}
		.small-img:hover{

			box-shadow: 0 0 10px #000;
		}
		#big-img{
			height: 380px;
			width: 300px;
			border-radius: 10px;
			border:1px solid #000;
			box-shadow: 0 0 10px #000;
		}
	</style>
</head>
<body>
<div style="margin: 20px auto; width: 600px; border : 5px solid #CCC; min-height: 500px; text-align: center; padding: 5px;">
	<img src="1.jpg" id="big-img">
	<hr />
	<img src="1.jpg" class="small-img" onmouseover="demo('1.jpg')">
	<img src="2.jpg" class="small-img" onmouseover="demo('2.jpg')">
	<img src="3.jpg" class="small-img" onmouseover="demo('3.jpg')">
	<img src="4.jpg" class="small-img" onmouseover="demo('4.jpg')">
	<img src="5.jpg" class="small-img" onmouseover="demo('5.jpg')">
</div>
<script type="text/javascript">
	function demo(x)
	{
		// alert(x);
		document.getElementById("big-img").setAttribute("src", x);
	}
</script>
</body>
</html>