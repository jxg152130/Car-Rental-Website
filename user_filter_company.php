<?php
session_start();
?>
<?php
$company=$_GET['company'] ;
$con=mysqli_connect("localhost","root","root","car_rental");
$type_data = mysqli_query($con,"SELECT distinct car_type FROM car c,inventory i where c.car_id = i.car_id and availability = 1 and  company='$company'");
	echo "<option selected='selected'>Car Type</option>";
		 
while ($row = mysqli_fetch_array($type_data))
{
	
	echo "<option>" .$row['car_type']."</option>";
} 
mysqli_close($con);
?>