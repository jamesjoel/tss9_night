<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-4">
			<h3>Change Password</h3>
			
			 <form action="<?php echo site_url('user/update_pass') ?>" method="post">
			 <div class="card">
			 	<div class="card-body">
			 		<div class="form-group">
			 			<label>Current Password</label>
			 			<input name="cpass" type="password"  class="form-control">
			 		</div>

			 		<div class="form-group">
			 			<label>New Password</label>
			 			<input name="npass" type="password"  class="form-control">
			 		</div>
			 		<div class="form-group">
			 			<label>Confirm New Password</label>
			 			<input name="cnpass" type="password"  class="form-control">
			 		</div>
			 		
			 	</div>
			 	<div class="card-footer">
			 		<input type="submit" value="Change Password" class="btn btn-primary">
			 		<p class="text-danger">
			 			<?php echo $this->session->flashdata("msg"); ?>
			 		</p>
			 	</div>
			 </div>
			</form>
			 
		</div>
	</div>
</div>