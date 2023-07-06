<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Dashboard Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <style>
    .navbar {
      background-color: #f8f9fa;
      padding: 10px;
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .container {
      margin-top: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 5px;
    }

    .submit-btn {
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #0069d9;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <header class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a class="btn btn-lg btn-danger" href="#">Add Admin</a>
        </div>
      </header>

      <div class="container">
        <form action="" method="POST">
          <div class="form-group">
            <label class="form-label" for="name">FullName:</label>
            <input type="text" class="form-control" id="name" name="fullname" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="rollNumber">Username:</label>
            <input type="text" class="form-control" name="username" id="rollNumber" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="contact">Password:</label>
            <input type="text" class="form-control" name="password"  id="contact" required>
          </div>
      
          <button type="submit" class="submit-btn" name="submit" >Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php

if(isset($_POST['submit'])) 
{
    // echo "setting";
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];
    // echo $username.$fullname.$password;


    $sql = "INSERT INTO tbl_admin SET 
    fullname='$fullname',
    username='$username',
    password='$password'
";


$res = mysqli_query($conn, $sql) or die(mysqli_error());

if($res==TRUE)
{

    echo "inserting";
    // header("location:".SITEURL.'admin/manage-admin.php');
}
else
{
    echo "error inserting";
   
    // header("location:".SITEURL.'admin/add-admin.php');
}


}








?>
