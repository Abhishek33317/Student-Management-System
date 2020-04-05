<?php
$con = mysqli_connect('localhost', 'root','', 'student_management');
if (!$con){
    die("Database Connection Failed" . mysqli_error($con));
}
$select_db = mysqli_select_db($con, 'student_management');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($con));
}
//check if it is connected to the database or not by using echo;
//echo "connected";

?>

