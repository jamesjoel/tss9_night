<?php
include("header.php");
?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Employee Profile</h2>
          </div>
          
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12" style="min-height: 400px">
              <form action="save.php" method="post">
        <div class="card">
            <div class="card-header">
                <h4>My Profile</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Profile Name</label>
                    <input type="text" name="profile_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Experiance</label>
                    <select class="form-control">
                        <?php
                        for($i=0; $i<=10; $i++)
                        {
                            echo "<option>".$i."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Previouse Company Name</label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detail</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Key Skills</label>
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Create Profile" class="btn btn-primary">
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