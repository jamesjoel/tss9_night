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


      </div>
    </div>    


<?php
include("footer.php");
?>