<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){

				$.ajax({
					url : "only_call_server.php"
				})
			})

		});
	</script>
</head>
<body>
<h1>Only Calling in AJAX</h1>
<button>Delete</button>

</body>
</html>