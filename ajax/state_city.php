<?php
$con = mysqli_connect("localhost", "root", "", "tss9");
$query = "SELECT * FROM states";
$res = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="jquery.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state").change(function(){
				var a = $(this).val();
				$.ajax({
					url : "get_city.php",
					type : "post",
					data : { stateid : a },
					success : function(data){
						//alert(data);
						$("#city").html(data);
					}
				});
			});
		});
	</script>
</head>
<body>
<div class="container">
	<div class="col-md-6 offset-md-3">
		<h2 class="text-center mt-4">State - City By AJAX</h2>
		<div class="form-group">
			<label>Select State</label>
			<select class="form-control" id="state">
				<option>Select</option>
				<?php
				while($data = mysqli_fetch_assoc($res))
				{ ?>
					<option value="<?php echo $data['id'] ?>"><?php echo $data['name']; ?></option>
				<?php
				}
				?>
			</select>


		</div>
		<br />
		<br />
		<div class="form-group">
			<label>Select City</label>
			<select class="form-control" id="city">
				<option>Select</option>
			</select>


		</div>
		
	</div>
</div>
</body>
</html>