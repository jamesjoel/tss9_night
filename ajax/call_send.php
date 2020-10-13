<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var a = $("#college").val();
				var b = $("#age").val();
				$.ajax({
					url : "call_send_server.php",
					type : "post",
					data : { name : a, age : b }
				})
			});

		});
	</script>
</head>
<body>
<h1>Calling and Sending in AJAX</h1>

Student Name <input type="text" id="college" />
<br />
<br />
Student Age <input type="text" id="age" />
<br />
<br />
<button>Add</button>

</body>
</html>