<?php
include("header.php");
?>
  <div class="row">
    
    <div class="col-md-6 offset-md-3">
    <h3>This is Signup Page</h3>
    <form action="save.php" method="post">
        <div class="card">
            <div class="card-header">
                <h4>Registration</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Re-Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    Male <input type="radio" value="male" name="gender">
                    Female <input type="radio" value="female" name="gender">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city">
                        <option>Select</option>
                        <option>Indore</option>
                        <option>Mumbai</option>
                        <option>Pune</option>
                        <option>Delhi</option>
                        <option>Bhopal</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Signup" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
  </div>
<?php
include("footer.php");
?>