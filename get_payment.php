<?php
session_start();
$email=$_GET['email'];
$con=new mysqli("localhost","root","root","car_rental");
$number_data = mysqli_query($con,"SELECT user_id FROM users_table where user_email='$email'");
$temp=mysqli_fetch_array($number_data);
//echo $temp;
$id=$temp[user_id];
$today=date("Y-m-d");
$data = mysqli_query($con,"SELECT * FROM cart where user_id=$id and date_in is null");
$temp_1="";
$due_date="";
while ($row = mysqli_fetch_array($data))
{
	$due_date=$row[due_date];
	$number_plate=$row[number_plate];
	
}
$penality;

if($due_date>=$today)
{echo"no";
mysqli_query($con,"update cart set penality=0, date_in='$today' where user_id='$id' and date_in is null");
mysqli_query($con,"update inventory set availability=1 where number_plate='$number_plate'");

}
else
{
	$diff=round(abs(strtotime($due_date) - strtotime($today))/86400);
	$penality=50*$diff;
	echo "penality is".$penality;
	
mysqli_query($con,"update cart set penality=$penality, date_in='$today' where user_id='$id' and date_in is null");
mysqli_query($con,"update inventory set availability=1 where number_plate='$number_plate'");
	}
	
mysqli_close($con);
?>