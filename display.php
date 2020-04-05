<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
<body 
<?php 
require_once("db_con.php");
if(isset( $_POST["done"]))
{
  $rollno=$_POST['rollno'];
  $standard=$_POST['operator'];
$query = "SELECT * from student where Rollno='$rollno' and Standard='$standard'"; 
$result = mysqli_query($con,$query) or die( mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>
<style>
    .bs-example{
      margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Rollno</th>
                <th>Name</th>
                <th>City</th>
                <th>Parents_contact</th>
                <th>Standrad</th>
                <th>Image</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Rollno']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['City']; ?></td>
                <td><?php echo $row['Parents_contact']; ?></td>
                <td><?php echo $row['Standard']; ?></td>
                <td><img src= "<?php echo $row['Image'];?>" height="100px" width="100px" ></td>
               </tr>
       </tbody>
    </table>
</div>
</body>
</html>
<?php
}
}
else
{
header("location: index.php");
}
?>
</body>
</html>