<?php
include("header.php");
?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Company Signup</h2>
          </div>
          
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12" style="min-height: 400px">
        <form action="save_company.php" method="post">
        <div class="card">
            <div class="card-header">
                <h4>Company Registration</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Re-Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact Person Name</label>
                    <input type="text" name="contact_person" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" name="contact_number" class="form-control">
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
                        <option>Delhi</option>
                        <option>Bhopal</option>
                    </select>
                </div>
               
            </div>
            <div class="card-footer">
                <input type="submit" value="Signup" class="btn btn-primary">
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