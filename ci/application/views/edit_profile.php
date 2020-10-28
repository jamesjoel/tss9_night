<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-4">
			<h3>Edit Profile</h3>
			<?php 

				$data = $result->row_array();
				// print_r($data);

			 ?>
			 <form action="<?php echo site_url('user/update') ?>" method="post">
			 <div class="card">
			 	<div class="card-body">
			 		<div class="form-group">
			 			<label>Full Name</label>
			 			<input type="Text" name="full_name" value="<?php echo $data['full_name'] ?>" class="form-control">
			 		</div>
			 		<div class="form-group">
			 			<label>Username</label>
			 			<input disabled type="Text" value="<?php echo $data['username'] ?>" class="form-control">
			 		</div>
			 		<div class="form-group">
			 			<label>Address</label>
			 			<textarea name="address" class="form-control"><?php echo $data['address'];?></textarea>
			 		</div>
			 		<div class="form-group">
			 			<label>City</label>
			 			<select name="city" class="form-control">
			 				<option value="">Select</option>
			 				<option <?php if($data['city']=="indore") echo "selected='selected'"; ?> value="indore">Indore</option>
			 				<option <?php if($data['city']=="mumbai") echo "selected='selected'"; ?> value="mumbai">Mumbai</option>
			 				<option <?php if($data['city']=="pune") echo "selected='selected'"; ?> value="pune">Pune</option>
			 			</select>
			 		</div>
			 		<div class="form-group">
			 			<label>Gender</label>
			 			<Br />
			 			Male<input <?php if($data['gender']=="male") echo "checked='chekced'"; ?> type="radio" name="gender" value="male" >
			 			Female<input <?php if($data['gender']=="female") echo "checked='chekced'"; ?> type="radio" name="gender" value="female" >
			 		</div>
			 		<div class="form-group">
			 			<label>Contact</label>
			 			<input type="Text" name="contact" value="<?php echo $data['contact'];?>" class="form-control">
			 		</div>
			 	</div>
			 	<div class="card-footer">
			 		<input type="submit" value="Update" class="btn btn-primary">
			 	</div>
			 </div>
			</form>
			 
		</div>
	</div>
</div>