<?php
include("db.php");
include("header.php");
$id = $_SESSION['c_id'];
$que = "SELECT * FROM job WHERE company_id=$id";

$res = mysqli_query($con, $que);


?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Your Jobs</h2>
          </div>
          
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12" style="min-height: 400px">
              <h4>List of Your Jobs</h4>
              <table class="table table-dark table-bordered table-hover">
                <tr>
                  <th>S.No.</th>
                  <th>Job Title</th>
                  <th>Salary</th>
                  <th>View Applied List</th>
                </tr>
                <?php
                $counter=1;
                while($data=mysqli_fetch_assoc($res))
                { ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['salary']; ?></td>
                    <td><a href="applied_list.php?job_id=<?php echo $data['id'] ?>" class="btn btn-info btn-sm">List</a></td>
                  </tr>
                <?php
                $counter++;
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