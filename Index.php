<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Vertical Form Layout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 100px;        
    }
</style>

<style type="text/css">
    body{
    background-image: url(images/student3.jpg);
    background-size: cover;
    background-position: center; 
       }
</style>

<style>
    .card{
        margin-top: 65px;
        margin-left: auto;
        margin-right: auto; 
      }
</style>

</head>
<body>
<a href="Login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Admin Login</a>
<div class="card text-white bg-success mb-3" style="width: 30rem;">
    <div class="card-header" style="background-color:#008000">
    Welcome to Student Management System
    </div>
  <div class="bs-example">
    <form action="display.php" method="post">
       <div class="form-group">
            <label for="rollno">Enter Roll No</label>
            <input type="text" name="rollno" class="form-control"  id="rollno" placeholder="Enter Roll No" required>
        </div>
        
       <div class="select">
        <h3>choose standard</h3>
        <select class="form-control form-control-lg" id="calculate" name="operator">
        <option>None</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        </select>
        </div>
        <br>
<button type="submit"  name= "done" class="btn btn-primary">Show Info</button>
        </form>
    </div>
</div>
</body>
</html>                                              