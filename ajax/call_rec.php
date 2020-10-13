<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					url : "call_rec_server.php",
					type : "get",
					success : function(data){
						alert(data);
						// $("#tab").html(data);
						$("#tab").append(data);
					}
				})
			});

		});
	</script>
	<style type="text/css">
		
	</style>
</head>
<body>
<h1>Calling and Rec in AJAX</h1>


<br />
<button>Show</button>
<table border="1" id="tab" align="center" cellpadding="10">
	<tr>
		<th>S.No.</th>
		<th>Student Name</th>
		<th>Student Age</th>
	</tr>
</table>

</body>
</html>