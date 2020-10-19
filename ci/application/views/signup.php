<div class="container mt-4">
	
	<div class="col-md-6 offset-md-3">
		<form action="<?php echo site_url('home/save') ?>" method="post">
		<div class="card">
			<div class="card-header">
				<h5>Signup</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="full_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address"></textarea>
				</div>
				<div class="form-group">
					<label>City</label>
					<select class="form-control" name="city">
						<option>Select</option>
						<option>Indore</option>
						<option>Mumbai</option>
						<option>Pune</option>
					</select>
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