<?php
session_start();
$reg=$_GET['reg'];
$price=$_GET['price'];

$temp=0;
$con=mysqli_connect("localhost","root","root","car_rental");

mysqli_query($con,"UPDATE inventory set price=$price where number_plate='$reg'");
mysqli_close($con);
?>