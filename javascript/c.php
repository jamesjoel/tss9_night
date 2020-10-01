<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(ope)
		{

			var a = document.getElementById("first_num").value;
			var b = document.getElementById("second_num").value;

			var x = parseInt(a); // convert a value into intiger
			var y = parseInt(b);
			if(ope=='sum')
			{
				var c = x+y;
			}
			if(ope=="sub")
			{

				var c = x-y;
			}
			if(ope=="mul")
			{
				var c = x*y;

			}
			if(ope=="divide")
			{
				var c = x/y;
			}


			//alert("Your ans is "+c);
			document.getElementById("ans").innerHTML="your ans is "+c;
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
<button onclick="demo('sum')">+</button>
<button onclick="demo('sub')">-</button>
<button onclick="demo('mul')">x</button>
<button onclick="demo('divide')">/</button>


<h2 id="ans"></h2>
</body>
</html>