<?php
include("db.php");
include("header.php");
$id = $_SESSION['id'];
$que = "SELECT * FROM employee_profile WHERE employee_id = $id";
$res = mysqli_query($con, $que);


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
                <?php
                if(mysqli_num_rows($res)==1)
                { 
                    $data = mysqli_fetch_assoc($res);
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <td>Profile Name</td>
                            <td><?php echo $data['profile_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Experiance</td>
                            <td><?php echo $data['experiance'] ?></td>
                        </tr>
                        <tr>
                            <td>Old Company Name</td>
                            <td><?php echo $data['company_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Detail</td>
                            <td><?php echo $data['detail'] ?></td>
                        </tr>
                        <tr>
                            <td>Key Skills</td>
                            <td><?php echo $data['key_skills'] ?></td>
                        </tr>
                        
                    </table>

                <?php }
                else
                { ?>
                    <h5>You not set your profile yet, please Update your profile</h5>
                <?php 
                }
                ?>
            </div>
            <div class="card-footer">
                <a href="edit_profile.php" class="btn btn-primary">Update Profile</a>
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