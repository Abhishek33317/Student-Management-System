<?php
session_start();
if(isset( $_SESSION['uid']))
{
 header("Location: admin/admin_dash.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Vertical Form Layout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
    body{
    background-image: url(images/student1.jpg);
    background-size: cover;
    background-position: center; 
       }

</style>
<style>
    .bs-example{
        margin: 100px;        
    }
</style>

<style>
    .card{
        margin-top: 75px;
        margin-left: auto;
        margin-right: auto;         
    }

h2 {
  border: 2px solid black;
  background-color: lightblue;
  color: blue;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  margin-bottom: 50px;
}

</style>
</head>
<body>
<div class="card text-white bg-success mb-3" style="width: 30rem;">
    <div class="card-header" style="background-color:#008000">
    Welcome to Student Management System
    </div>

  <div class="bs-example">
    <form action="" method="post">
       <div class="form-group">
              <h2>Admin Panel <span class="badge badge-secondary"></span></h2>
            
            <label for="First_input">Username</label>
            <input type="text" name="username" class="form-control"  id="First_input" placeholder="Enter Username" required>
        </div>
        
        <div class="form-group">
            <label for="Second_input">Password</label>
            <input type="password" name="password" class="form-control"  id="Second_input" placeholder="Enter Password" required>
        </div>
        <br>
<button type="submit"  name= "done" class="btn btn-primary">Login</button>

<a class="btn btn-primary" href="signup.php" role="button">Sign Up</a>
</form>
</div>
</div>
</body>
</html> 

<?php
require('db_con.php');
if(isset($_POST['done'])){
  // matching user data with the data stored in the database
  $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `admin` WHERE Username='$username' and Password='$password'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    
    if ($count<1)
    {
    echo "<script>
alert('Invalid login details');
window.location.href='Login.php';
</script>";
    
}
else
{
    $data = mysqli_fetch_assoc($result);
    $id=$data['Id'];
    $_SESSION['uid'] = $id;
    header("Location: admin/admin_dash.php");
    exit;
}
}
//close the connection after query is performed
mysqli_close($con);
?>                                             