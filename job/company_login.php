<?php
include('db.php');
include("header.php");
?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Company Login</h2>
          </div>
          
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12" style="min-height: 400px">
              <form action="company_auth.php" method="post">
                  <div class="card">
                      <div class="card-header">
                          <h4>Company Login</h4>
                      </div>
                      <div class="card-body">
                          
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control">
                          </div>
                      </div>
                      <div class="card-footer">
                          <input type="submit" value="Login" class="btn btn-primary">
                          <p class="text-danger text-center">

                              <?php
                              // this isset() is check the variable is create or not
                              if(isset($_SESSION['msg']))
                              {
                                  echo $_SESSION['msg'];
                                  unset($_SESSION['msg']);
                              }
                              ?>
                          </p>
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