<?php
session_start();
$email=$_GET['email'];
$con=new mysqli("localhost","root","root","car_rental");
$number_data = mysqli_query($con,"SELECT user_id FROM users_table where user_email='$email'");
$temp=mysqli_fetch_array($number_data);
$id=$temp[user_id];
$data = mysqli_query($con,"SELECT * FROM cart where user_id=$id and date_in is null");
$temp_1="";
while ($row = mysqli_fetch_array($data))
{
	$temp_1=$row[user_id];
	if($temp_1!="")
	echo " User ID: ".$row[user_id]." </br> Email id: ".$email." </br> Registration no: ".$row[number_plate]."</br>  Date out: ".$row[date_out].
"</br> Due Date: ".$row[due_date]." ";
	
}
if($temp_1=="")
		echo "no";
mysqli_close($con);
?>