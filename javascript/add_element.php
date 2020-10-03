<?php
$con = mysqli_connect("localhost", "root", "", "tss9");
$query = "SELECT * FROM college";

$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script type="text/javascript">
		function create()
		{
			var a = document.getElementById("college_list").value;
		}
	</script>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-header">
					<h3>Make Resume</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>College</label>
						<select class="form-control" id="college_list" onchange="create()">
							<option>Select</option>
							<?php
							while($data=mysqli_fetch_assoc($result))
							{ ?>
								<option value="<?php echo $data['id'] ?>"><?php echo $data['college_name'];?></option>
							<?php 
							}
							?>
							<option value="0">Other</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>