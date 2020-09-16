<?php
include("db.php");
include("header.php");

$id = $_SESSION['id'];
$que = "SELECT * FROM employee_profile WHERE employee_id = $id";
$res = mysqli_query($con, $que);
if(mysqli_num_rows($res)==1)
{
    $data = mysqli_fetch_assoc($res);
}
else
{
    $data['profile_name'] = "";
    $data['experiance'] = "0";
    $data['detail'] = "";
    $data['key_skills'] = "";
    $data['company_name'] = "";

}

// print_r($data);
// die;

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
        <form action="save_profile.php" method="post">
        <div class="card">
            <div class="card-header">
                <h4>My Profile</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Profile Name</label>
                    <input type="text" value="<?php echo $data['profile_name'] ?>" name="profile_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Experiance</label>
                    <select name="exp" class="form-control">
                        <?php
                        for($i=0; $i<=10; $i++)
                        {
                            if($data['experiance']==$i)
                            {
                            echo "<option selected='selected'>".$i."</option>";

                            }
                            else
                            {
                            echo "<option>".$i."</option>";

                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Previouse Company Name</label>
                    <input type="text" value="<?php echo $data['company_name'] ?>" name="company_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detail</label>
                    <textarea name="detail" class="form-control"><?php echo $data['detail'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Key Skills</label>
                    <textarea name="key_skills" class="form-control"><?php echo $data['key_skills'] ?></textarea>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Update Profile" class="btn btn-primary">
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