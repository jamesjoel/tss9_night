<?php
$con = mysqli_connect("localhost","root", "", "tss9");
$que = "SELECT * FROM student";
$res = mysqli_query($con, $que);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();
				$.ajax({
					url : "call_send_rec_server.php",
					type : "post",
					data : { name : a, age : b},
					success : function(data){
						
						$("#tab").append(data);
						$("#name").val("");
						$("#age").val("");
					}
				})
			});
		});
	</script>
</head>
<body>
<h1>Calling and Sending and Receving in AJAX</h1>

Student Name <input type="text" id="name" />
<br />
<br />
Student Age <input type="text" id="age" />
<br />
<br />
<button>Add</button>
<br />
<br />
<table border="1" id="tab" align="center" cellpadding="5">
	<tr>
		<th>S.No.</th>
		<th>Student Name</th>
		<th>Student Age</th>
	</tr>
	<?php
	$n=1;
	while($data=mysqli_fetch_assoc($res))
	{ ?>
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['stu_name']; ?></td>
			<td><?php echo $data['stu_age']; ?></td>
		</tr>
	<?php
	$n++;
	}
	?>
</table>

</body>
</html>