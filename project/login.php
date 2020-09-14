<?php
include("db.php");
include("header.php");
?>
  <div class="row">
    
    <div class="col-md-6 offset-md-3">
    <h3>Login Page</h3>
    <form action="auth.php" method="post">
        <div class="card">
            <div class="card-header">
                <h4>Login</h4>
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
<?php
include("footer.php");
?>