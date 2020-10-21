<style type="text/css">
	.error-msg{
		color: red;
		font-size: 12px;
	}
</style>
<div class="container mt-4">
	
	<div class="col-md-6 offset-md-3">
		<?php
		// echo validation_errors();
		?>
		<!--  if we add CI validation on any form then we have to create action is empty -->
		<form action="" method="post">
		<div class="card">
			<div class="card-header">
				<h5>Signup</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" value="<?php echo set_value('full_name') ?>" name="full_name" class="form-control">
					<div class="error-msg"><?php echo form_error('full_name'); ?></div>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" value="<?php echo set_value('username') ?>" name="username" class="form-control">
					<div class="error-msg"><?php echo form_error('username'); ?></div>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" value="<?php echo set_value('password') ?>" name="password" class="form-control">
					<div class="error-msg"><?php echo form_error('password'); ?></div>
				</div>
				<div class="form-group">
					<label>Re-Password</label>
					<input type="password" value="<?php echo set_value('re_pass') ?>" name="re_pass" class="form-control">
					<div class="error-msg"><?php echo form_error('re_pass'); ?></div>
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address"><?php echo set_value('address') ?></textarea>
					<div class="error-msg"><?php echo form_error('address'); ?></div>
				</div>
				<div class="form-group">
					<label>City</label>
					<select class="form-control" name="city">
						<option value="">Select</option>
						<option <?php echo set_select("city", "indore"); ?> value="indore">Indore</option>
						<option <?php echo set_select("city", "mumbai"); ?> value="mumbai">Mumbai</option>
						<option <?php echo set_select("city", "pune"); ?> value="pune">Pune</option>
					</select>
					<div class="error-msg"><?php echo form_error('city'); ?></div>
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input type="text" value="<?php echo set_value('contact') ?>" name="contact" class="form-control">
					<div class="error-msg"><?php echo form_error('contact'); ?></div>
				</div>
				<div class="form-group">
					<label>Gender</label>
					Male : <input type="radio" <?php echo set_radio('gender', 'male'); ?> name="gender" value="male">
					Female : <input type="radio" <?php echo set_radio('gender', 'female'); ?> name="gender" value="female">
					<div class="error-msg"><?php echo form_error('gender'); ?></div>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="Signup" class="btn btn-primary">
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>