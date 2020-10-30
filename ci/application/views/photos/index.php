<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h2>Your Personal Photos Album</h2>
			<form action="<?php echo site_url('photos/photo_upload') ?>" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					<h4>Add Your Photos</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Select Photo</label>
						<!-- accept="image/*" -->
						<input type='file' name="userfile"  class="form-control">
					</div>
					<div class="text-danger">
						<?php echo $this->session->flashdata("msg"); ?>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Upload" class="btn btn-primary btn-block">
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="row mt-4">
		<?php
			foreach($photos->result_array() as $row)
		{ ?>
		<div class="col-md-2">
			
			
			<img style="height: 180px !important;" src="<?php echo base_url('assets/photos/'.$row['image_name']) ?>" class="img-thumbnail">
		</div>
			<?php 
			}
			?>
	</div>
</div>