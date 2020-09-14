<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
    header("location:login.php");
}




include("header.php");
?>
  <div class="row">
    <h3>Welcome <?php echo $_SESSION['name'] ?></h3>   
    
  </div>
 
<?php
include("footer.php");
?>