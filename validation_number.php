<?php
session_start();
$number=$_GET['plate'];
$temp=0;
$con=new mysqli("localhost","root","root","car_rental");
$number_data = mysqli_query($con,"SELECT number_plate FROM inventory");


while ($row = mysqli_fetch_array($number_data))
{
	//echo $row[number_plate];
	if($number==$row[number_plate])
	{
		$temp=1;
		break;
	}
}
if($temp==1)
	echo "1";
else
	echo "0";
mysqli_close($con);
?>