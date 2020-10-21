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
				<h5>Login</h5>
			</div>
			<div class="card-body">
				
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
					
				</div>
				
			</div>
			<div class="card-footer">
				<input type="submit" value="Login" class="btn btn-primary">
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>