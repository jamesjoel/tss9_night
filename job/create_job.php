<?php
include('db.php');

if(! isset($_SESSION['is_company_logged_in']))
{
  header('location:login.php');
}


include("header.php");
?>
<div class="site-section bg-light">
      <div class="container" style="min-height: 500px;">
        

        <h3>Welcome : <?php echo $_SESSION['c_name'] ?></h3>       
        <h4 class="text-center">Create Your Jobs</h4>

        <div class="row" data-aos="fade">
         <div class="col-md-12" style="min-height: 400px">
              <form action="save_job.php" method="post">
                  <div class="card">
                      <div class="card-header">
                          <h4>Create New Job</h4>
                      </div>
                      <div class="card-body">
                          
                          <div class="form-group">
                              <label>Title</label>
                              <input type="text" name="title" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Salary</label>
                              <input type="text" name="salary" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Description</label>
                              <textarea name="desc" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                              <label>Experiance</label>
                              <select class="form-control" name="exp">
                              	<option>0</option>
                              	<option>1</option>
                              	<option>2</option>
                              	<option>3</option>
                              	<option>4</option>
                              	<option>5</option>
                              	<option>6</option>
                              	<option>7</option>
                              	<option>8</option>
                              	<option>9</option>
                              	<option>10</option>
                              </select>
                          </div>
                          <div class="form-group">
                          	<label>Job Type</label>
                          	<select class="form-control" name="type">
                          		<option>Select</option>
                          		<option>Part-Time</option>
                          		<option>Full-Time</option>
                          		<option>Internship</option>
                          		<option>Freelance</option>
                          		<option>Temporary</option>
                          	</select>
                          </div>
                          
                      </div>
                      <div class="card-footer">
                          <input type="submit" value="Create" class="btn btn-primary">
                          
                      </div>
                  </div>
              </div>
          </form>           

         </div>
        </div>

      </div>
    </div>    


<?php
include("footer.php");
?>