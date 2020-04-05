<?php
require('../db_con.php');
?>

<?php
$id=$_GET['id'];
$query="DELETE FROM `student` WHERE `Id`='$id'";
$result = mysqli_query($con,$query) or die( mysqli_error($con));
if($result==true)
{
echo "<script>
alert('Entry deleted');
window.location.href='admin_dash.php';
</script>";
}
else
{
echo "<script>
alert('Invalid Entry Retry');
window.location.href='search.php';
</script>";
}
?>