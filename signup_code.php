<?php
include("db_con.php");
?>

<?php
// code for registration of admin
if(isset($_POST['done']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="INSERT INTO `admin`(`Id`, `Username`, `Password`) VALUES ('','$username','$password')";
$result=mysqli_query($con,$query);
if ($result){
    echo "<script>
alert('signup successful');
window.location.href='login.php';
</script>";
    }

 else{
       echo "Error: " . $query . "" . mysqli_error($con);
      }
}
mysqli_close($con);
?>