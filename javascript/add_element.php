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
			if(a==0)
			{
				var label = document.createElement("label");
				// <label></label>
				label.innerHTML = "Your Collage Name";
				// <label>Your Collage Name</label>
				document.getElementById("new_college_name").appendChild(label);
				// append it into div



				var input = document.createElement("input");
				// <input />
				input.setAttribute("type", "text");
				// <input type="text"/>
				input.setAttribute("class", "form-control");
				// <input type="text" class="form-control"/>
				input.setAttribute("placeholder", "College Name");
				// <input type="text" class="form-control" placeholder="College Name"/>
				input.setAttribute("name", "college_name");
				// <input type="text" class="form-control" name="college_name" placeholder="College Name"/>
				document.getElementById("new_college_name").appendChild(input);


				var submit_btn = document.createElement("input");
				// <input />
				submit_btn.setAttribute("type", "submit");
				// <input type="submit" />
				submit_btn.setAttribute("class", "btn btn-primary");
				document.getElementById("new_college_name").appendChild(submit_btn);


			}
		}

		function add()
		{
			var x = document.createElement("h1");
			// x = <h1></h1>
			x.innerHTML="hello";
			document.getElementById("box").appendChild(x);
			// appendChild() for append a created element

		}


	</script>

</head>




<body>
<div class="container">
	<button onclick="add()" class="btn btn-success">OK</button>
	<div id="box"></div>




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

						<form action="add_college.php" method="post">
							<div class="form-group" id="new_college_name"></div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>