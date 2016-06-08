<?php
session_start();
?>
<?php
$type=$_GET['type'] ;
$true="true";
$con=mysqli_connect("localhost","root","root","car_rental");
$type_data = mysqli_query($con,"SELECT distinct company FROM car c,inventory i where c.car_id = i.car_id and availability = 1 and car_type='$type'");
	echo "<option  selected='selected'>Company</option>";
		 
while ($row = mysqli_fetch_array($type_data))
{
	
	echo "<option>" .$row['company']."</option>";
} 
mysqli_close($con);
?>