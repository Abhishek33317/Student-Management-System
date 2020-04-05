<?php
include("footer.php");
?>

<?php
require('../db_con.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Static Navbar</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
    body{
    background-image: url(../images/student5.jpg);
    background-size: cover;
    background-position: center; 
       }
</style>

<style type="text/css">
    .update{
    margin: auto;
    width: 55%;
    border: 3px solid green;
    
       }
</style>



</head>
<body>
<div class="update">
<nav class="navbar navbar-light bg-light">
  <form action=" " method="post" class="form-inline">
    <label for="search1">Enter Standard</label>
    <input class="form-control mr-sm-2" type="search" name="standard" id="search1" placeholder="Search" aria-label="Search">
    <label for="search2">Enter Student Name</label>
    <input class="form-control mr-sm-2" type="search" name="name" id="search2" placeholder="Search" aria-label="Search">
    <button name="done" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
</body>
</html>  

<?php
if(isset($_POST['done']))
{
	$standard=$_POST['standard'];
	$name=$_POST['name'];
	$query= "SELECT * FROM `student` WHERE Standard='$standard' and Name  LIKE '%$name%'";
	$result = mysqli_query($con,$query) or die( mysqli_error($con));
	$count=mysqli_num_rows($result);
	if($count>0)
	{
 while($row=mysqli_fetch_array($result)){
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
                <th>Delete</th>

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
                <td><img src= "<?php echo $row['Image'];?>" height="100px" width="100px"></td>
                <td><a class="btn btn-outline-success" href="delete.php?id=<?php echo $row['Id']; ?>" role="button">Delete</a></td>
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
echo "No record found";
}
}
?>
</body>
</html>