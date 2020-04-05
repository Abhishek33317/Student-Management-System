<?php
include('footer.php');
?>
<?php
require('../db_con.php');
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
       
<style>
    .bs-example{
        margin: 100px;        
    }
</style>

<style type="text/css">
    body{
    background-image: url(../images/student2.jpg);
    background-size: cover;
    background-position: center; 
       }
</style>

<style>
    .card{
        margin-top: 60px;
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
    <form action=" " method="post" enctype="multipart/form-data">
       <div class="form-group">
              <h2> Add Student Details <span class="badge badge-secondary"></span></h2>
            
            <label for="rollno">Rollno</label>
            <input type="number" name="rollno" class="form-control"  id="rollno" placeholder="Enter Rollno" required>
        </div>
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="student_name" class="form-control"  id="name" placeholder="Enter Name" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city_name" class="form-control"  id="city" placeholder="Enter City" required>
        </div>

        <div class="form-group">
            <label for="contact">Parent Contact No.</label>
            <input type="tel" name="parent_contact_no" class="form-control"  id="contact" placeholder="Enter Contact Number" required>
        </div>

         <div class="form-group">
            <label for="standard">Standard</label>
            <input type="number" name="standard" class="form-control"  id="standard" placeholder="Choose Standard" required>
        </div>

        <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
        </div>
        
        <button type="submit"  name= "done" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
</body>
</html>   


<?php
if(isset($_POST['done'])){
  $rollno=$_POST['rollno'];
  $name=$_POST['student_name'];
  $city=$_POST['city_name'];
  $parent_contact_no=$_POST['parent_contact_no'];
  $standard=$_POST['standard'];
  $Image = $_FILES['image']['name'];
  $Type = $_FILES['image']['type'];
  $Temp = $_FILES['image']['tmp_name'];
  $ImageExt = explode('.',$Image);
  $ImgCorrectExt = strtolower(end($ImageExt));
  $Allow = array('jpg','jpeg','png');
  $target = "../data_image/".$Image;
 

if(in_array($ImgCorrectExt,$Allow))
{
$query="INSERT INTO `student`(`Id`, `Rollno`, `Name`, `City`, `Parents_contact`, `Standard`, `Image`) VALUES ('','$rollno','$name','$city','$parent_contact_no','$standard','$target')";
$result=mysqli_query($con,$query);
move_uploaded_file($Temp, $target);

if ($result){
    echo "<script>
alert('student details added successfully');
window.location.href='admin_dash.php';
</script>";
    }

 else{
       echo "Error: " . $query . "" . mysqli_error($con);
      }
}
else
{
echo ' You Cannot upload image';
}
}
mysqli_close($con);
?>                                           