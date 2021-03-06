<?php
include('db.php');
include("header.php");


// convert $res to assoctive array
// $data = mysqli_fetch_assoc($res);
$que = "SELECT * FROM job LEFT JOIN company ON job.company_id = company.id";

if(isset($_GET['search_btn']))
{
  // print_r($_GET);
  $keyword = $_GET['keyword'];
  $type = $_GET['type'];
  if($keyword !="" && $type == "")
  {    
    $que="SELECT * FROM job LEFT JOIN company ON job.company_id = company.id WHERE job.title LIKE '%$keyword%'";
  }
  if($keyword == "" && $type != "")
  {
    $que="SELECT * FROM job LEFT JOIN company ON job.company_id = company.id WHERE job.type = '$type'";

  }
  if($keyword != "" && $type !="")
  {
    $que = "SELECT * FROM job LEFT JOIN company ON job.company_id = company.id WHERE job.title LIKE '%$keyword%' AND job.type = '$type'";
  }
  

  
}


/*

  WHERE age = 25 AND city = 'indore'

*/

$res = mysqli_query($con, $que);
?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <p class="text-center text-danger">
              <?php
              if(isset($_SESSION['msg']))
              {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }
              ?>
            </p>
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Recent Jobs</h2>

          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <a href="#" class="btn btn-primary py-3 btn-block"><span class="h5">+</span> Post a Job</a>
          </div>
        </div>


        <?php
        while($data = mysqli_fetch_assoc($res))
        { 
          // print_r($data);
        ?>

        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?php echo $data['title'] ?></h2>
                 <div class="badge-wrap">
                  <span class="
                    <?php 
                      if($data['type']=='Full-Time') 
                      {
                          echo 'bg-primary';
                      }
                      if($data['type']=='Part-Time')
                      {
                        echo 'bg-info';
                      }
                      if($data['type']=='Internship')
                      {
                        echo 'bg-warning';
                      }
                      if($data['type']=='Freelancer')
                      {
                        echo 'bg-dark';
                      }
                      if($data['type']=='Temporary')
                      {
                        echo 'bg-danger';
                      }
                    ?>
                     text-white badge py-2 px-4"><?php echo $data['type'] ?></span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#"><?php echo $data['company_name'] ?></a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $data['city']; ?></span></div>
               </div>
              </div>

              <div class="ml-auto">
                
                <a href="apply_job.php?id=<?php echo $data['id'] ?>&companyid=<?php echo $data['company_id'] ?>" class="btn btn-primary py-2">Apply Job</a>
              </div>
           </div>

         </div>
        </div>

        <?php } ?>



        

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>    


<?php
include("footer.php");
?>