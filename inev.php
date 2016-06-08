<?php

session_start();
$con=new mysqli("localhost","root","root","car_rental");
$company_data = mysqli_query($con,"SELECT distinct company FROM car");

echo "<option>select</option>";
while ($row = mysqli_fetch_array($company_data))
{
	
	echo "<option>" .$row['company']."</option>";
}
echo "<option>other</option>";
mysqli_close($con);
?>