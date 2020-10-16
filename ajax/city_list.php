<?php
$con = mysqli_connect("localhost", "root", "", "tss9");
$que = "SELECT * FROM cities LEFT JOIN states ON cities.state_id = states.id";
$res = mysqli_query($con, $que);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jquery.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		/*
			.keydown
			.keypress
			.keyup

		*/
		$(document).ready(function(){
			var type = true;
			var stype = true;

			$("#search").keyup(function(){
				var a = $(this).val();
				$.ajax({
					url : "search_city.php",
					type : "post",
					data : { keyword : a }, 
					success : function(data){
						$("#tab").html(data);
					}
				});
			});

			$("#city_sort").click(function(){
				$.ajax({
					url : "search_city_sort.php",
					type : "post",
					data : { type : type },
					success : function(data){
						// alert(data);
						type = !type;
						$("#tab").html(data);
					}
				});
			});
			$("#state_sort").click(function(){
				$.ajax({
					url : "search_state_sort.php",
					type : "post",
					data : { stype : stype },
					success : function(data){
						stype = !stype;
						$("#tab").html(data);
					}
				})
			});
		});
	</script>
</head>
<body>
<div class="container">
	<h3 class="text-center">All City List</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="form-group">
				<input type="text" id="search" placeholder="Search City" class="form-control">
			</div>
		</div>
	</div>
	<table  class="table table-dark table-hover table-striped table-bordered">
		<tr>
			<th>S.No.</th>
			<th>City Name&nbsp;&nbsp;&nbsp;<i id="city_sort" class="fa fa-sort" aria-hidden="true"></i></th>
			<th>State Name&nbsp;&nbsp;&nbsp;<i id="state_sort" class="fa fa-sort" aria-hidden="true"></i></th>
		</tr>
		<tbody id="tab">
		<?php
		$n=1;
		while($data = mysqli_fetch_assoc($res))
		{ ?>
			<tr>
				<td><?php echo $n; ?></td>
				<td><?php echo $data['city']; ?></td>
				<td><?php echo $data['name']; ?></td>
			</tr>
		<?php
		$n++;
		}
		?>
		</tbody>
	</table>
</div>
</body>
</html>