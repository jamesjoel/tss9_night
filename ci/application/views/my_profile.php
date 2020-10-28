<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-4">
			<h3>My Profile</h3>
			<?php 

				$data = $result->row_array();
				// print_r($data);

			 ?>
			 <table class="table table-dark table-bordered table-stiped">
			 	<tr>
			 		<td>Full Name</td>
			 		<td><?php echo $data['full_name']; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Username</td>
			 		<td><?php echo $data['username']; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Address</td>
			 		<td><?php echo $data['address']; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Gender</td>
			 		<td><?php echo $data['gender']; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Contact</td>
			 		<td><?php echo $data['contact']; ?></td>
			 	</tr>
			 	<tr>
			 		<td>City</td>
			 		<td><?php echo $data['city']; ?></td>
			 	</tr>
			 </table>
			 <a href="<?php echo site_url('user/edit') ?>" class="btn btn-info">Edit</a>
		</div>
	</div>
</div>