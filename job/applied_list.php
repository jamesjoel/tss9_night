<?php
include("db.php");
include("header.php");
$jobid = $_GET['job_id'];

$que1 = "SELECT * FROM apply WHERE job_id = $jobid";
$res1 = mysqli_query($con, $que1);




// $que1 = "SELECT * FROM employee INNER JOIN employee_profile ON employee.id = employee_profile.employee_id WHERE ";

//$res = mysqli_query($con, $que);


?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Appled List</h2>
          </div>
          
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12" style="min-height: 400px">
              <table class="table table-dark table-bordered table-hover">
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Profile Name</th>
                  <th>Experiance</th>
                  <th>Contact</th>
                  <th>Resume</th>
                </tr>
                
                <?php
                while($data1=mysqli_fetch_assoc($res1))
                {
                  $empid = $data1['employee_id'];
                  $res2 = "SELECT * FROM employee INNER JOIN employee_profile ON employee.id = employee_profile.employee_id WHERE empoyee.id = ".$empid;

                }

                ?>

              </table>
         </div>
        </div>

        


      </div>
    </div>    


<?php
include("footer.php");
?>