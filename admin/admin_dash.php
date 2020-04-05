
<?php 
session_start();
if(!isset($_SESSION['uid']))
{
header('location: ../Login.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin Dash Board</title>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
    .bs-example{
         margin: 100px;  
    }
</style>

<style type="text/css">
    body{
    background-image: url(../images/student0.jpg);
    background-size: cover;
    background-position: center; 
       }
</style>

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    <li class="nav-item">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </li>
    
  </div>
</nav>

<div class="bs-example">
    <div class="card" style="width: 18rem;">
        <div class="card-header">Student Management System</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a class="btn btn-primary btn-lg" href="insert.php" role="button">Add student details</a></li>
            <li class="list-group-item"><a class="btn btn-primary btn-lg" href="search.php" role="button">Update student details</a></li>
            <li class="list-group-item"><a class="btn btn-primary btn-lg" href="search2.php" role="button">Delete student details</a></li>
        </ul>
        <div class="card-body">
            
        </div>
    </div>
</div>

</body>
</html>
