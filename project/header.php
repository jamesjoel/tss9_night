<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">My Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <?php
      // the isset() function is used for check the variable is create or not
      if(isset($_SESSION['is_user_logged_in']))
      { ?>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>  
      <?php 
      }
      else
      { ?>
        <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>  
      <?php 
      }
      ?>



        
    </ul>
  </div>  
</nav>
<br>


<div class="container" style="min-height: 650px">