<?php
session_start();
$value=$_GET['value'];

$con=mysqli_connect("localhost","root","root","car_rental");
mysqli_query($con,"delete from inventory where number_plate='$value'");

mysqli_close($con);
?>